<?php


namespace Esatic\Interservice\Model\Ws\Facade;


use Esatic\Interservice\Helper\Data;
use Esatic\Interservice\Model\Ws\Entities\GetTrackingInformationResponse;
use Esatic\Interservice\Model\Ws\RastreoEnvios2;
use Esatic\Interservice\Model\Ws\SrvClientes;
use Magento\Sales\Model\Order;

class GetTrackingInformationFacade
{

    /**
     * @var Data
     */
    private $data;

    /**
     * GetTrackingInformationFacade constructor.
     * @param Data $data
     */
    public function __construct(Data $data)
    {
        $this->data = $data;
    }


    public function execute($shippingId, Order $order)
    {
        $srvClient = new SrvClientes();
        $trackingShipping2 = new RastreoEnvios2(
            $shippingId,
            $this->data->username($order->getStoreId()),
            $this->data->password($order->getStoreId())
        );
        $response = $srvClient->RastreoEnvios2($trackingShipping2)->getRastreoEnvios2Result();
        return GetTrackingInformationResponse::createFromJsonResponse(json_decode($response));
    }

}
