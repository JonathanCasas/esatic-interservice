<?php

namespace Esatic\Interservice\Model\Ws\Dto;

use Esatic\Interservice\Model\GetCityCodeInterface;
use Esatic\Interservice\Model\Ws\Entities\ItemQuote;
use Magento\Quote\Model\Quote\Item;
use Magento\Store\Model\ScopeInterface;

class QuoteShippingPriceDto
{

    /**
     * @var GetCityCodeInterface
     */
    private $getCityCode;
    /**
     * @var \Magento\Checkout\Model\Session
     */
    private $session;
    /**
     * @var \Esatic\Interservice\Logger\Logger
     */
    private $logger;
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;
    /**
     * @var \Esatic\Interservice\Helper\GetPackaging
     */
    private $getPackaging;
    /**
     * @var \Esatic\Interservice\Helper\Data
     */
    private $data;

    public function __construct(
        \Esatic\Interservice\Model\GetCityCodeInterface $getCityCode,
        \Magento\Checkout\Model\Session $session,
        \Esatic\Interservice\Logger\Logger $logger,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Esatic\Interservice\Helper\GetPackaging $getPackaging,
        \Esatic\Interservice\Helper\Data $data
    )
    {
        $this->getCityCode = $getCityCode;
        $this->session = $session;
        $this->logger = $logger;
        $this->scopeConfig = $scopeConfig;
        $this->getPackaging = $getPackaging;
        $this->data = $data;
    }

    /**
     * @param \Magento\Quote\Model\Quote\Address\RateRequest $request
     * @return ItemQuote[]|null
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Exception
     */
    public function execute(\Magento\Quote\Model\Quote\Address\RateRequest $request): ?array
    {
        $country = $this->scopeConfig->getValue('shipping/origin/country_id', ScopeInterface::SCOPE_STORE, $request->getStoreId());
        $regionId = $this->scopeConfig->getValue('shipping/origin/region_id', ScopeInterface::SCOPE_STORE, $request->getStoreId());
        $city = $this->scopeConfig->getValue('shipping/origin/city', ScopeInterface::SCOPE_STORE, $request->getStoreId());
        if (!is_null($request->getDestRegionId()) && !is_null($request->getDestCity())) {
            $originCodeCity = $this->getCityCode->execute($regionId, $city);
            $destCityCode = $this->getCityCode->execute($request->getDestRegionId(), $request->getDestCity());
            $quote = $this->session->getQuote();
            $weight = 0;
            /** @var Item $allItem */
            foreach ($request->getAllItems() as $allItem) {
                $weight = $allItem->getWeight();
            }
            $itemQuote = new ItemQuote();
            $itemQuote->setDestination($destCityCode);
            $itemQuote->setOrigin($originCodeCity);
            $itemQuote->setPacking($this->getPackaging->execute($request->getStoreId()));
            $itemQuote->setQty((int)$quote->getItemsQty());
            $itemQuote->setValue($quote->getSubtotal());
            $itemQuote->setWeight(is_null($weight) ? $this->getDefaultWeight($request) : $weight);
            $this->logger->info(json_encode([$itemQuote]));
            return [$itemQuote];
        }
        return null;
    }

    /**
     * @param \Magento\Quote\Model\Quote\Address\RateRequest $request
     * @return string
     */
    private function getDefaultWeight(\Magento\Quote\Model\Quote\Address\RateRequest $request): string
    {
        $weight = $this->data->getWeight($request->getStoreId());
        return !is_null($weight) && !empty($weight) ? $weight : 1;
    }
}
