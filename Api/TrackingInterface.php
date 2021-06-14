<?php


namespace Esatic\Interservice\Api;


use Esatic\Interservice\Api\Data\CreateGuideResponseInterface;

interface TrackingInterface
{

    /**
     * @param int $orderId
     * @return CreateGuideResponseInterface
     * @api
     */
    public function createGuide(int $orderId): CreateGuideResponseInterface;

    /**
     * @param string $incrementId
     * @return CreateGuideResponseInterface
     * @api
     */
    public function createGuideIncrementId(string $incrementId): CreateGuideResponseInterface;

}
