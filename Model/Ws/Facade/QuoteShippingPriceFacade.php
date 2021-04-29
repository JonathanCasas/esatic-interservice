<?php

namespace Esatic\Interservice\Model\Ws\Facade;

use Esatic\Interservice\Model\Ws\CotizarServicio;
use Esatic\Interservice\Model\Ws\Entities\QuoteResponse;
use Esatic\Interservice\Model\Ws\SrvClientes;
use Magento\Quote\Model\Quote\Address\RateRequest;

class QuoteShippingPriceFacade
{

    /**
     * @var \Esatic\Interservice\Model\Ws\Dto\QuoteShippingPriceDto
     */
    private $quoteShippingPriceDto;
    /**
     * @var \Esatic\Interservice\Helper\Data
     */
    private $data;

    /**
     * QuoteShippingPriceFacade constructor.
     * @param \Esatic\Interservice\Model\Ws\Dto\QuoteShippingPriceDto $quoteShippingPriceDto
     * @param \Esatic\Interservice\Helper\Data $data
     */
    public function __construct(
        \Esatic\Interservice\Model\Ws\Dto\QuoteShippingPriceDto $quoteShippingPriceDto,
        \Esatic\Interservice\Helper\Data $data
    ) {
        $this->quoteShippingPriceDto = $quoteShippingPriceDto;
        $this->data = $data;
    }

    public function query(RateRequest $request): ?QuoteResponse
    {
        $quote = json_encode($this->quoteShippingPriceDto->execute($request));
        if (is_null($quote)) {
            return null;
        }
        $srvClient = new SrvClientes();
        $quoteService = new CotizarServicio(
            $this->data->process($request->getStoreId()),
            $quote,
            $this->data->username($request->getStoreId()),
            $this->data->password($request->getStoreId())
        );
        $stringResult = $srvClient->CotizarServicio($quoteService)->getCotizarServicioResult();
        return QuoteResponse::createFromJsonResponse(json_decode($stringResult));
    }
}
