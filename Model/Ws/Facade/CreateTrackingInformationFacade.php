<?php

namespace Esatic\Interservice\Model\Ws\Facade;

use Esatic\Interservice\Model\Carrier\Interservice;
use Esatic\Interservice\Model\Ws\CargarGuiasRecoleccion;
use Esatic\Interservice\Model\Ws\Entities\TrackingInformationResponse;
use Esatic\Interservice\Model\Ws\SrvClientes;
use Magento\Framework\App\ObjectManager;
use Magento\Sales\Model\Order;

class CreateTrackingInformationFacade
{

    /**
     * @var \Esatic\Interservice\Model\Ws\Dto\CreateTrackingInformationDto
     */
    private $createTrackingInformationDto;

    /**
     * @var \Esatic\Interservice\Helper\Data
     */
    private $helper;
    /**
     * @var \Magento\Sales\Model\Order\ShipmentRepository
     */
    private $_shipmentRepository;

    /**
     * @var \Magento\Shipping\Model\ShipmentNotifier
     */
    private $_shipmentNotifier;

    /**
     * @var \Magento\Sales\Model\Order\Shipment\TrackFactory
     */
    private $_trackFactory;
    /**
     * @var \Magento\Sales\Api\OrderRepositoryInterface
     */
    private $_orderRepository;
    /**
     * @var \Esatic\Interservice\Logger\Logger
     */
    private $logger;

    /**
     * CreateTrackingInformationFacade constructor.
     * @param \Esatic\Interservice\Model\Ws\Dto\CreateTrackingInformationDto $createTrackingInformationDto
     * @param \Esatic\Interservice\Helper\Data $helper
     * @param Order\ShipmentRepository $shipmentRepository
     * @param \Magento\Shipping\Model\ShipmentNotifier $shipmentNotifier
     * @param Order\Shipment\TrackFactory $trackFactory
     * @param \Magento\Sales\Api\OrderRepositoryInterface $_orderRepository
     * @param \Esatic\Interservice\Logger\Logger $logger
     */
    public function __construct(
        \Esatic\Interservice\Model\Ws\Dto\CreateTrackingInformationDto $createTrackingInformationDto,
        \Esatic\Interservice\Helper\Data $helper,
        \Magento\Sales\Model\Order\ShipmentRepository $shipmentRepository,
        \Magento\Shipping\Model\ShipmentNotifier $shipmentNotifier,
        \Magento\Sales\Model\Order\Shipment\TrackFactory $trackFactory,
        \Magento\Sales\Api\OrderRepositoryInterface $_orderRepository,
        \Esatic\Interservice\Logger\Logger $logger
    )
    {
        $this->createTrackingInformationDto = $createTrackingInformationDto;
        $this->helper = $helper;
        $this->_shipmentRepository = $shipmentRepository;
        $this->_shipmentNotifier = $shipmentNotifier;
        $this->_trackFactory = $trackFactory;
        $this->_orderRepository = $_orderRepository;
        $this->logger = $logger;
    }

    /**
     * @param Order $order
     * @param $method
     * @return TrackingInformationResponse
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(Order $order, $method): TrackingInformationResponse
    {
        $trackingInformation = $this->createTrackingInformation($order, $method);
        $this->createShipping($order, $trackingInformation);
        return $trackingInformation;
    }

    /**
     * @param Order $order
     * @param $method
     * @return TrackingInformationResponse
     */
    private function createTrackingInformation(Order $order, $method): TrackingInformationResponse
    {
        $data = $this->createTrackingInformationDto->execute($order);
        $srvClient = new SrvClientes();
        $loadGuides = new CargarGuiasRecoleccion(
            $method,
            json_encode($data),
            $this->helper->username($order->getStoreId()),
            $this->helper->password($order->getStoreId())
        );
        $response = $srvClient->CargarGuiasRecoleccion($loadGuides)->getCargarGuiasRecoleccionResult();
        $this->logger->info(__DIR__);
        $this->logger->info(json_encode($data));
        $this->logger->info($response);
        return TrackingInformationResponse::createFromJsonResponse(json_decode($response));
    }

    /**
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Exception
     */
    private function createShipping(Order $order, TrackingInformationResponse $trackingInformation)
    {
        if (count($trackingInformation->getGuides()) <= 0) {
            $this->logger->info('Empty');
            return;
        }
        $objectManager = ObjectManager::getInstance();
        if (!$order->canShip()) {
            return;
        }
        $convertOrder = $objectManager->create(\Magento\Sales\Model\Convert\Order::class);
        $shipment = $convertOrder->toShipment($order);
        // Loop through order items
        foreach ($order->getAllItems() as $orderItem) {
            // Check if order item has qty to ship or is virtual
            if (!$orderItem->getQtyToShip() || $orderItem->getIsVirtual()) {
                continue;
            }
            $qtyShipped = $orderItem->getQtyToShip();
            // Create shipment item with qty
            $shipmentItem = $convertOrder->itemToShipmentItem($orderItem)->setQty($qtyShipped);
            // Add shipment item to shipment
            $shipment->addItem($shipmentItem);
        }
        $guide = $trackingInformation->getGuides()[0];
        $trackFactory = $this->_trackFactory->create();
        $trackFactory->setCarrierCode(Interservice::CODE);
        $trackFactory->setDescription($guide->getDescription());
        $trackFactory->setTitle($this->helper->name($order->getStoreId()));
        $trackFactory->setNumber($guide->getShippingCode());
        $trackFactory->setTrackNumber($guide->getShippingCode());
        $shipment->addTrack($trackFactory);
        // Register shipment
        $shipment->register();
        $this->_shipmentRepository->save($shipment);
        $this->_orderRepository->save($order);
        // Send email
        try {
            $this->_shipmentNotifier->notify($shipment);
        } catch (\Exception $ex) {
            $this->logger->info('Error send notification shipping');
        }
        $this->_shipmentRepository->save($shipment);
    }
}
