<?php

namespace Esatic\Interservice\Observer\Sales;

use Esatic\Interservice\Logger\Logger;
use Esatic\Interservice\Model\Carrier\Interservice;
use Esatic\Interservice\Model\Ws\Entities\TrackingInformationResponse;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Pay implements ObserverInterface
{

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
     * Pay constructor.
     * @param \Esatic\Interservice\Helper\Data $data
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param Logger $logger
     * @param \Esatic\Interservice\Model\Ws\Facade\CreateTrackingInformationFacade $createTrackingInformationFacade
     */
    public function __construct(
        \Esatic\Interservice\Helper\Data $data,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Esatic\Interservice\Logger\Logger $logger,
        \Esatic\Interservice\Model\Ws\Facade\CreateTrackingInformationFacade $createTrackingInformationFacade
    )
    {
        $this->data = $data;
        $this->_storeManager = $storeManager;
        $this->logger = $logger;
        $this->createTrackingInformationFacade = $createTrackingInformationFacade;
    }

    /**
     * @param Observer $observer
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(Observer $observer): ?TrackingInformationResponse
    {
        if (!$this->data->autoCreation($this->_storeManager->getStore()->getId())) {
            return null;
        }
        /** @var \Magento\Sales\Model\Order\Invoice $invoice */
        $invoice = $observer->getData('invoice');
        $shippingMethod = $invoice->getOrder()->getShippingMethod(true);
        $carrierCode = $shippingMethod->getCarrierCode();
        $method = $shippingMethod->getMethod();
        if ($carrierCode != Interservice::CODE) {
            return null;
        }
        $this->logger->info('Creating guide ' . $invoice->getOrder()->getIncrementId());
        $response = $this->createTrackingInformationFacade->execute($invoice->getOrder(), $method);
        $this->logger->info('Guide created' . $invoice->getOrder()->getIncrementId());
        return $response;
    }
}
