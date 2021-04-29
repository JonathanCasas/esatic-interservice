<?php

namespace Esatic\Interservice\Model\Ws\Entities;

class GetTrackingInformationResponse
{

    /**
     * @var GetTrackingGuideResponse[]
     */
    private $shippingList;
    private $status;
    private $quantity;
    private $message;
    private $signatureSha256;

    /**
     * @return array|GetTrackingGuideResponse[]
     */
    public function getShippingList(): array
    {
        if (is_null($this->shippingList) || empty($this->shippingList)) {
            return [];
        }
        return $this->shippingList;
    }

    /**
     * @param mixed $shippingList
     * @return GetTrackingInformationResponse
     */
    public function setShippingList($shippingList): GetTrackingInformationResponse
    {
        $this->shippingList = $shippingList;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return GetTrackingInformationResponse
     */
    public function setStatus($status): GetTrackingInformationResponse
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
     * @return GetTrackingInformationResponse
     */
    public function setQuantity($quantity): GetTrackingInformationResponse
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
     * @return GetTrackingInformationResponse
     */
    public function setMessage($message): GetTrackingInformationResponse
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
     * @return GetTrackingInformationResponse
     */
    public function setSignatureSha256($signatureSha256): GetTrackingInformationResponse
    {
        $this->signatureSha256 = $signatureSha256;
        return $this;
    }

    public static function createFromJsonResponse($data): GetTrackingInformationResponse
    {
        $getTrackingInformationResponse = new GetTrackingInformationResponse();
        if (isset($data->FirmaSha256)) {
            $getTrackingInformationResponse->setSignatureSha256($data->FirmaSha256);
        }
        if (isset($data->Mensaje)) {
            $getTrackingInformationResponse->setMessage($data->Mensaje);
        }
        if (isset($data->Cantidad)) {
            $getTrackingInformationResponse->setQuantity($data->Cantidad);
        }
        if (isset($data->Estado)) {
            $getTrackingInformationResponse->setStatus($data->Estado);
        }
        if (isset($data->listaEnvios)) {
            $items = [];
            foreach ($data->listaEnvios as $listaEnvio) {
                $items[] = GetTrackingGuideResponse::createFromJsonResponse($listaEnvio);
            }
            $getTrackingInformationResponse->setShippingList($items);
        }
        return $getTrackingInformationResponse;
    }
}
