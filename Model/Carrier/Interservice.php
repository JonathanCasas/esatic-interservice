<?php

namespace Esatic\Interservice\Model\Carrier;

use Esatic\Interservice\Model\Ws\Entities\GetTrackingGuideResponse;
use Esatic\Interservice\Model\Ws\Entities\QuoteResponse;
use Magento\Framework\App\ObjectManager;
use Magento\Quote\Model\Quote\Address\RateRequest;
use Magento\Sales\Model\Order\Shipment\Track;
use Magento\Sales\Model\ResourceModel\Order\Shipment\CollectionFactory;
use Magento\Shipping\Model\Rate\Result;

class Interservice extends \Magento\Shipping\Model\Carrier\AbstractCarrier implements \Magento\Shipping\Model\Carrier\CarrierInterface
{
    const CODE = 'interservice';
    /**
     * @var string
     */
    protected $_code = self::CODE;

    /**
     * @var bool
     */
    protected $_isFixed = true;

    /**
     * @var \Magento\Shipping\Model\Rate\ResultFactory
     */
    private $rateResultFactory;

    /**
     * @var \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory
     */
    private $rateMethodFactory;
    /**
     * @var \Esatic\Interservice\Model\Ws\Facade\QuoteShippingPriceFacade
     */
    private $quoteShippingPriceFacade;
    /**
     * @var QuoteResponse
     */
    private $quoteResponse;
    /**
     * @var \Magento\Shipping\Model\Tracking\Result\StatusFactory
     */
    private $_trackStatusFactory;
    /**
     * @var \Esatic\Interservice\Model\Ws\Facade\GetTrackingInformationFacade
     */
    private $getTrackingInformationFacade;

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory $rateErrorFactory
     * @param \Esatic\Interservice\Logger\Logger $logger
     * @param \Magento\Shipping\Model\Rate\ResultFactory $rateResultFactory
     * @param \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory $rateMethodFactory
     * @param \Esatic\Interservice\Model\Ws\Facade\QuoteShippingPriceFacade $quoteShippingPriceFacade
     * @param \Magento\Shipping\Model\Tracking\Result\StatusFactory $_trackStatusFactory
     * @param \Esatic\Interservice\Model\Ws\Facade\GetTrackingInformationFacade $getTrackingInformationFacade
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory $rateErrorFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Shipping\Model\Rate\ResultFactory $rateResultFactory,
        \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory $rateMethodFactory,
        \Esatic\Interservice\Model\Ws\Facade\QuoteShippingPriceFacade $quoteShippingPriceFacade,
        \Magento\Shipping\Model\Tracking\Result\StatusFactory $_trackStatusFactory,
        \Esatic\Interservice\Model\Ws\Facade\GetTrackingInformationFacade $getTrackingInformationFacade,
        array $data = []
    )
    {
        parent::__construct($scopeConfig, $rateErrorFactory, $logger, $data);

        $this->rateResultFactory = $rateResultFactory;
        $this->rateMethodFactory = $rateMethodFactory;
        $this->quoteShippingPriceFacade = $quoteShippingPriceFacade;
        $this->_trackStatusFactory = $_trackStatusFactory;
        $this->getTrackingInformationFacade = $getTrackingInformationFacade;
    }

    /**
     * Custom Shipping Rates Collector
     *
     * @param RateRequest $request
     * @return \Magento\Shipping\Model\Rate\Result|bool
     */
    public function collectRates(RateRequest $request)
    {
        if (!$this->getConfigFlag('active')) {
            return false;
        }
        $this->_logger->info('Pruebas interservicios');
        $this->quoteResponse = $this->quoteShippingPriceFacade->query($request);
        if (is_null($this->quoteResponse)) {
            return false;
        }
        /** @var \Magento\Shipping\Model\Rate\Result $result */
        $result = $this->rateResultFactory->create();
        if ($this->quoteResponse->getQuantity() > 0) {
            foreach ($this->quoteResponse->getQuoteDetail() as $item) {
                /** @var \Magento\Quote\Model\Quote\Address\RateResult\Method $method */
                $method = $this->rateMethodFactory->create();
                $code = sprintf('%s_%s', $this->_code, $item->getCodProcess());
                $method->setCarrier($this->_code);
                $method->setCarrierTitle($this->getConfigData('title'));
                $method->setMethod($item->getCodProcess());
                $method->setMethodTitle($this->getConfigData('name'));
                $shippingCost = $item->getShippingValue();
                $method->setPrice($shippingCost);
                $method->setCost($shippingCost);
                $result->append($method);
            }
        }
        return $result;
    }

    /**
     * @return array
     */
    public function getAllowedMethods(): array
    {
        return [$this->_code => $this->getConfigData('name')];
    }

    public function isTrackingAvailable()
    {
        return true;
    }

    public function isCityRequired()
    {
        return true;
    }

    /**
     * Return Tracking Number
     *
     * @param array|object $trackingIds
     * @return string
     */
    private function getTrackingNumber($trackingIds): string
    {
        return is_array($trackingIds) ? array_map(
            function ($val) {
                return $val->TrackingNumber;
            },
            $trackingIds
        ) : $trackingIds->TrackingNumber;
    }

    /**
     * Get tracking
     *
     * @param string|string[] $trackings
     * @return \Magento\Shipping\Model\Tracking\Result
     */
    public function getTrackingInfo($trackingId)
    {
        $tracking = $this->_trackStatusFactory->create();
        $tracking->setCarrier(self::CODE);
        $tracking->setCarrierTitle($this->getConfigData('title'));
        $tracking->setTracking($trackingId);
        $progressdetail = [];
        try {
            $getTrackingInformation = $this->getTrackingInformation($trackingId);
            if ($getTrackingInformation->getQuantity() > 0) {
                /** @var GetTrackingGuideResponse $getTrackingGuideResponse */
                $getTrackingGuideResponse = count($getTrackingInformation->getShippingList()) > 0 ? $getTrackingInformation->getShippingList()[0] : [];
                foreach ($getTrackingGuideResponse->getTrackingList() as $item) {
                    $progressdetail[] = [
                        'activity' => $item->getDescription(),
                        'description' => $item->getDescription(),
                        'deliverylocation' => $item->getStatus(),
                        //'deliverydate' => $item->getDate(),
                        //'deliverytime' => $item->getDate()
                    ];
                }
            }
        } catch (\Exception $ex) {
            $this->_logger->info('Error Interservice gettting tracking: ' . $ex->getMessage());
        }
        $tracking->addData([
            'shippeddate' => null,
            'deliverydate' => null,
            'deliverytime' => null,
            'deliverylocation' => null,
            'weight' => null,
            'progressdetail' => $progressdetail,
        ]);
        return $tracking;
    }

    /**
     * @param $tracking
     * @return \Magento\Sales\Model\Order
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function getOrder($tracking): \Magento\Sales\Model\Order
    {
        $collection = ObjectManager::getInstance()->create(\Magento\Sales\Model\ResourceModel\Order\Shipment\Track\CollectionFactory::class)->create();
        /** @var Track $track */
        $track = $collection->addFieldToFilter('track_number', ['eq' => $tracking])->getFirstItem();
        return $track->getShipment()->getOrder();
    }

    /**
     * @param $tracking
     * @return \Esatic\Interservice\Model\Ws\Entities\GetTrackingInformationResponse
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function getTrackingInformation($tracking): \Esatic\Interservice\Model\Ws\Entities\GetTrackingInformationResponse
    {
        $order = $this->getOrder($tracking);
        return $this->getTrackingInformationFacade->execute($tracking, $order);
    }
}
