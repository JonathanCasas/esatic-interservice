<?php


namespace Esatic\Interservice\Model;


use Esatic\Interservice\Api\Data\CreateGuideResponseInterface;

class CreateGuideResponse implements CreateGuideResponseInterface
{

    private $orderId;
    private $orderIncrementId;
    private $shipmentId;
    private $shipmentIncrementId;
    private $trackingNumber;
    private $urlPdfs;


    public function getOrderId(): int
    {
        return $this->orderId;
    }

    public function setOrderId(int $orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderIncrementId(): string
    {
        return $this->orderIncrementId;
    }

    public function setOrderIncrementId(string $orderIncrementId)
    {
        $this->orderIncrementId = $orderIncrementId;
        return $this;
    }

    public function getShipmentId(): int
    {
        return $this->shipmentId;
    }

    public function setShipmentId(int $shipmentId)
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }

    public function getShipmentIncrementId(): string
    {
        return $this->shipmentIncrementId;
    }

    public function setShipmentIncrementId(string $shipmentIncrementId)
    {
        $this->shipmentIncrementId = $shipmentIncrementId;
        return $this;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(string $trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function getUrlPdfs(): array
    {
        return $this->urlPdfs;
    }

    public function setUrlPdfs(array $urlPdfs)
    {
        $this->urlPdfs = $urlPdfs;
        return $this;
    }
}
