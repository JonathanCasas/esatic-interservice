<?php


namespace Esatic\Interservice\Api\Data;


interface CreateGuideResponseInterface
{

    /**
     * @return int
     */
    public function getOrderId(): int;

    /**
     * @param int $orderId
     * @return $this
     */
    public function setOrderId(int $orderId);

    /**
     * @return string
     */
    public function getOrderIncrementId(): string;

    /**
     * @param string $orderIncrementId
     * @return $this
     */
    public function setOrderIncrementId(string $orderIncrementId);

    /**
     * @return int
     */
    public function getShipmentId(): int;

    /**
     * @param int $shipmentId
     * @return $this
     */
    public function setShipmentId(int $shipmentId);

    /**
     * @return string
     */
    public function getShipmentIncrementId(): string;

    /**
     * @param string $shipmentIncrementId
     * @return $this
     */
    public function setShipmentIncrementId(string $shipmentIncrementId);

    /**
     * @return string
     */
    public function getTrackingNumber(): string;

    /**
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber(string $trackingNumber);

    /**
     * @return string[]
     */
    public function getUrlPdfs(): array;

    /**
     * @param array $urlPdfs
     * @return $this
     */
    public function setUrlPdfs(array $urlPdfs);

}
