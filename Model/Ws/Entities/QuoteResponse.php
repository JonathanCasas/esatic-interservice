<?php

namespace Esatic\Interservice\Model\Ws\Entities;

class QuoteResponse implements \JsonSerializable
{
    private $status;
    private $quantity;
    private $message;
    private $signatureSha256;
    /**
     * @var QuoteDetailItemResponse[]
     */
    private $quoteDetail;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return QuoteResponse
     */
    public function setStatus($status): QuoteResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return QuoteResponse
     */
    public function setQuantity($quantity): QuoteResponse
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return QuoteResponse
     */
    public function setMessage($message): QuoteResponse
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatureSha256()
    {
        return $this->signatureSha256;
    }

    /**
     * @param mixed $signatureSha256
     * @return QuoteResponse
     */
    public function setSignatureSha256($signatureSha256): QuoteResponse
    {
        $this->signatureSha256 = $signatureSha256;
        return $this;
    }

    /**
     * @return QuoteDetailItemResponse[]
     */
    public function getQuoteDetail(): array
    {
        return $this->quoteDetail;
    }

    /**
     * @param QuoteDetailItemResponse[] $quoteDetail
     * @return QuoteResponse
     */
    public function setQuoteDetail(array $quoteDetail): QuoteResponse
    {
        $this->quoteDetail = $quoteDetail;
        return $this;
    }

    public static function createFromJsonResponse($data): QuoteResponse
    {
        $quoteResponse = new QuoteResponse();
        if (isset($data->Mensaje)) {
            $quoteResponse->setMessage($data->Mensaje);
        }
        if (isset($data->Estado)) {
            $quoteResponse->setStatus($data->Estado);
        }
        if (isset($data->Cantidad)) {
            $quoteResponse->setQuantity($data->Cantidad);
        }
        if (isset($data->FirmaSha256)) {
            $quoteResponse->setSignatureSha256($data->FirmaSha256);
        }
        if (isset($data->detalleCotizacion) && is_array($data->detalleCotizacion)) {
            $items = [];
            foreach ($data->detalleCotizacion as $item) {
                $items[] = QuoteDetailItemResponse::createFromJsonResponse($item);
            }
            $quoteResponse->setQuoteDetail($items);
        }
        return $quoteResponse;
    }

    public function jsonSerialize(): array
    {
        return [
            'status' => $this->status,
            'quantity' => $this->quantity,
            'message' => $this->message,
            'signatureSha256' => $this->signatureSha256,
            'quoteDetail' => $this->quoteDetail,
        ];
    }
}
