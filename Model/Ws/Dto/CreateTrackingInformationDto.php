<?php

namespace Esatic\Interservice\Model\Ws\Dto;

use Esatic\Interservice\Model\GetCityCodeInterface;
use Esatic\Interservice\Model\Ws\Entities\TrackingInformationRequest;
use Magento\Store\Model\ScopeInterface;

class CreateTrackingInformationDto
{

    /**
     * @var GetCityCodeInterface
     */
    private $getCityCode;
    /**
     * @var \Esatic\Interservice\Logger\Logger
     */
    private $logger;
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * CreateTrackingInformationDto constructor.
     * @param GetCityCodeInterface $getCityCode
     * @param \Esatic\Interservice\Logger\Logger $logger
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(GetCityCodeInterface $getCityCode, \Esatic\Interservice\Logger\Logger $logger, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->getCityCode = $getCityCode;
        $this->logger = $logger;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param \Magento\Sales\Model\Order $order
     * @return TrackingInformationRequest[]|null
     */
    public function execute(\Magento\Sales\Model\Order $order): ?array
    {
        $country = $this->scopeConfig->getValue('shipping/origin/country_id', ScopeInterface::SCOPE_STORE, $order->getStoreId());
        $regionId = $this->scopeConfig->getValue('shipping/origin/region_id', ScopeInterface::SCOPE_STORE, $order->getStoreId());
        $city = $this->scopeConfig->getValue('shipping/origin/city', ScopeInterface::SCOPE_STORE, $order->getStoreId());
        $originAddress1 = $this->scopeConfig->getValue('shipping/origin/street_line1', ScopeInterface::SCOPE_STORE, $order->getStoreId());
        $originAddress2 = $this->scopeConfig->getValue('shipping/origin/street_line2', ScopeInterface::SCOPE_STORE, $order->getStoreId());
        $originCodeCity = $this->getCityCode->execute($regionId, $city);
        $shippingAddress = $order->getShippingAddress();
        $destinationCodeCity = $this->getCityCode->execute($shippingAddress->getRegionId(), $shippingAddress->getCity());
        if (is_null($order->getShippingAddress())) {
            return null;
        }
        $trackingInformationRequest = new TrackingInformationRequest();
        $trackingInformationRequest->setOriginName($order->getStore()->getName());
        $trackingInformationRequest->setOriginAddress(sprintf('%s %s', $originAddress1, $originAddress2));
        $trackingInformationRequest->setOriginPhone('');
        $trackingInformationRequest->setOriginRegion($regionId);// Pending search department name
        $trackingInformationRequest->setOriginCity($originCodeCity);
        $trackingInformationRequest->setOriginPostalCode('');
        $trackingInformationRequest->setReferenceNumber($order->getIncrementId());
        $trackingInformationRequest->setPayrollNumber('');
        $trackingInformationRequest->setDestinationCode('');
        $trackingInformationRequest->setDestinationName($shippingAddress->getName());
        $trackingInformationRequest->setDestinationAddress(implode(',', $shippingAddress->getStreet()));
        $trackingInformationRequest->setDestinationPhone($shippingAddress->getTelephone());
        $trackingInformationRequest->setDestinationRegion($shippingAddress->getRegion());
        $trackingInformationRequest->setDestinationCity($destinationCodeCity);
        $trackingInformationRequest->setDestinationPostalCode($shippingAddress->getPostcode());
        $trackingInformationRequest->setPacking('SOBRE');//Pending configuration
        $trackingInformationRequest->setSayContain('Pruebas');//Pending Configuration
        $trackingInformationRequest->setQty((int)$order->getTotalQtyOrdered());
        $trackingInformationRequest->setWeight(is_null($order->getWeight()) || $order->getWeight() < 1 ? 1 : $order->getWeight());
        $trackingInformationRequest->setValue($order->getGrandTotal());
        $trackingInformationRequest->setLong(0);
        $trackingInformationRequest->setHeight(0);
        $trackingInformationRequest->setWith(0);
        $trackingInformationRequest->setDescription($order->getShippingDescription());
        $trackingInformationRequest->setIsLetterCopy(0);
        return [$trackingInformationRequest];
    }
}
