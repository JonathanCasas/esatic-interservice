<?php


namespace Esatic\Interservice\Model;


use Esatic\Interservice\Api\Data\CreateGuideResponseInterface;
use Esatic\Interservice\Api\TrackingInterface;
use Esatic\Interservice\Logger\Logger;
use Esatic\Interservice\Model\Carrier\Interservice;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Sales\Api\OrderRepositoryInterface;
use Magento\Sales\Model\Order;

class Tracking implements TrackingInterface
{

    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;
    /**
     * @var \Magento\Sales\Model\ResourceModel\Order\CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var \Esatic\Interservice\Helper\Data
     */
    private $data;
    /**
     * @var Logger
     */
    private $logger;
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;
    /**
     * @var \Esatic\Interservice\Model\Ws\Facade\CreateTrackingInformationFacade
     */
    private $createTrackingInformationFacade;

    /**
     * Tracking constructor.
     * @param OrderRepositoryInterface $orderRepository
     * @param \Esatic\Interservice\Helper\Data $data
     * @param Logger $logger
     * @param \Magento\Store\Model\StoreManagerInterface $_storeManager
     * @param Ws\Facade\CreateTrackingInformationFacade $createTrackingInformationFacade
     * @param \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $collectionFactory
     */
    public function __construct(
        OrderRepositoryInterface $orderRepository,
        \Esatic\Interservice\Helper\Data $data,
        Logger $logger,
        \Magento\Store\Model\StoreManagerInterface $_storeManager,
        Ws\Facade\CreateTrackingInformationFacade $createTrackingInformationFacade,
        \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $collectionFactory
    )
    {
        $this->orderRepository = $orderRepository;
        $this->data = $data;
        $this->logger = $logger;
        $this->_storeManager = $_storeManager;
        $this->createTrackingInformationFacade = $createTrackingInformationFacade;
        $this->collectionFactory = $collectionFactory;
    }


    /**
     * @inheritDoc
     * @throws NoSuchEntityException
     */
    public function createGuide(int $orderId): CreateGuideResponseInterface
    {
        /** @var Order $order */
        $order = $this->orderRepository->get($orderId);
        return $this->create($order);
    }

    /**
     * @inheritDoc
     * @throws NoSuchEntityException
     */
    public function createGuideIncrementId(string $incrementId): CreateGuideResponseInterface
    {
        $collection = $this->collectionFactory->create();
        /** @var Order $order */
        $order = $collection->addFieldToFilter('increment_id', $incrementId)->load()->getFirstItem();
        if ($order->isEmpty())
            throw new NoSuchEntityException(__('La orden no ha sido encontrada'));
        return $this->create($order);
    }


    /**
     * @throws NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function create(Order $order): CreateGuideResponseInterface
    {

        $shippingMethod = $order->getShippingMethod(true);
        $carrierCode = $shippingMethod->getCarrierCode();
        $method = $shippingMethod->getMethod();
        if ($carrierCode != Interservice::CODE) {
            throw new NoSuchEntityException(__('El método de envío no ha sido encontrado'));
        }
        $this->logger->info('Creating guide ' . $order->getIncrementId());
        $response = $this->createTrackingInformationFacade->execute($order, $method);
        $this->logger->info('Guide created' . $order->getIncrementId());
        $createGuideResponse = new CreateGuideResponse();
        $createGuideResponse->setShipmentId($this->createTrackingInformationFacade->getShipment()->getId());
        $createGuideResponse->setOrderId($order->getId());
        $createGuideResponse->setOrderIncrementId($order->getIncrementId());
        $createGuideResponse->setShipmentIncrementId($this->createTrackingInformationFacade->getShipment()->getIncrementId());
        $tracking = count($response->getGuides()) > 0 ? $response->getGuides()[0]->getShippingCode() : '';
        $createGuideResponse->setTrackingNumber($tracking);
        $createGuideResponse->setUrlPdfs($response->getUrlList());
        return $createGuideResponse;
    }
}
