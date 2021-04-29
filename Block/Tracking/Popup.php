<?php

namespace Esatic\Interservice\Block\Tracking;

use Magento\Framework\Stdlib\DateTime\DateTimeFormatterInterface;

class Popup extends \Magento\Shipping\Block\Tracking\Popup
{

    /**
     * @var \Magento\Shipping\Model\Tracking\Result\StatusFactory
     */
    private $trackingResultFactory;
    private $getTrackingInformation;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        DateTimeFormatterInterface $dateTimeFormatter,
        \Magento\Shipping\Model\Tracking\Result\StatusFactory $trackingResultFactory,
        array $data = []
    )
    {
        parent::__construct($context, $registry, $dateTimeFormatter, $data);
        $this->trackingResultFactory = $trackingResultFactory;
    }


    /**
     * Retrieve array of tracking info
     *
     * @return array
     */
    public function getTrackingInfo(): array
    {
        $results = parent::getTrackingInfo();
        foreach ($results as $shipping => $result) {
            foreach ($result as $key => $track) {
                if (!is_object($track)) {
                    continue;
                }
                $carrier = $track->getCarrier();
                $url = $this->getUrl('inteservice/result/index', [$carrier => trim($track->getTracking())]);
                $results[$shipping][$key] = $this->trackingResultFactory->create()->setData($track->getAllData())
                    ->setErrorMessage(null)
                    ->setUrl($url);
            }
        }
    }

    public function getInformation()
    {
        /* @var $info \Magento\Shipping\Model\Info */
        $info = $this->_registry->registry('current_shipping_info');
    }
}
