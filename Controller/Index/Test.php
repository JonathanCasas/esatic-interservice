<?php


namespace Esatic\Interservice\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\ResponseInterface;
use Magento\Sales\Model\Order;

class Test extends Action
{

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $objectManager = ObjectManager::getInstance();
        $createTracking = $objectManager->create(\Esatic\Interservice\Model\Ws\Facade\CreateTrackingInformationFacade::class);
        $resourceModel = $objectManager->get(\Magento\Sales\Model\ResourceModel\Order::class);
        $order = $objectManager->get(Order::class);
        $resourceModel->load($order, 5);
        var_dump($createTracking->execute($order, 'LAFTI'));
        //echo 'Hola Mundo';
    }
}
