<?php

namespace Esatic\Interservice\Model\Ws\Entities;

class TrackingInformationResponse
{
    private $status;
    private $quantity;
    private $message;
    private $signatureSha256;
    private $urlList;
    /**
     * @var GuideResponse[]
     */
    private $guides;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return TrackingInformationResponse
     */
    public function setStatus($status): TrackingInformationResponse
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
     * @return TrackingInformationResponse
     */
    public function setQuantity($quantity): TrackingInformationResponse
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
     * @return TrackingInformationResponse
     */
    public function setMessage($message): TrackingInformationResponse
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
     * @return TrackingInformationResponse
     */
    public function setSignatureSha256($signatureSha256): TrackingInformationResponse
    {
        $this->signatureSha256 = $signatureSha256;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlList()
    {
        return $this->urlList;
    }

    /**
     * @param mixed $urlList
     * @return TrackingInformationResponse
     */
    public function setUrlList($urlList): TrackingInformationResponse
    {
        $this->urlList = $urlList;
        return $this;
    }

    /**
     * @return GuideResponse[]
     */
    public function getGuides(): array
    {
        return $this->guides;
    }

    /**
     * @param GuideResponse[] $guides
     * @return TrackingInformationResponse
     */
    public function setGuides(array $guides): TrackingInformationResponse
    {
        $this->guides = $guides;
        return $this;
    }

    public static function createFromJsonResponse($data): TrackingInformationResponse
    {
        $trackingInformationResponse = new TrackingInformationResponse();
        if (isset($data->Estado)) {
            $trackingInformationResponse->setStatus($data->Estado);
        }
        if (isset($data->Cantidad)) {
            $trackingInformationResponse->setQuantity($data->Cantidad);
        }
        if (isset($data->Mensaje)) {
            $trackingInformationResponse->setMessage($data->Mensaje);
        }
        if (isset($data->FirmaSha256)) {
            $trackingInformationResponse->setSignatureSha256($data->FirmaSha256);
        }
        if (isset($data->listaUrl)) {
            $trackingInformationResponse->setUrlList($data->listaUrl);
        }
        if (isset($data->listaGuias) && is_array($data->listaGuias)) {
            $guides = [];
            foreach ($data->listaGuias as $listaGuia) {
                $guides[] = GuideResponse::createFromJsonResponse($listaGuia);
            }
            $trackingInformationResponse->setGuides($guides);
        }
        return $trackingInformationResponse;
    }
}
