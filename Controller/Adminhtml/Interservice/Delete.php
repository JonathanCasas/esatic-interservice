<?php

namespace Esatic\Interservice\Controller\Adminhtml\Interservice;

use Magento\Framework\App\ResponseInterface;

class Delete extends \Magento\Backend\App\Action
{

    /**
     * @var \Esatic\Interservice\Model\ResourceModel\PackagingFactory
     */
    private $resourceModelFactory;
    /**
     * @var \Esatic\Interservice\Model\PackagingFactory
     */
    private $packagingFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Esatic\Interservice\Model\ResourceModel\PackagingFactory $resourceModelFactory,
        \Esatic\Interservice\Model\PackagingFactory $packagingFactory
    )
    {
        parent::__construct($context);
        $this->resourceModelFactory = $resourceModelFactory;
        $this->packagingFactory = $packagingFactory;
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Exception
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('entity_id');
        try {
            $resourceModel = $this->resourceModelFactory->create();
            $packaging = $this->packagingFactory->create();
            $resourceModel->load($packaging, $id);
            $resourceModel->delete($packaging);
            $this->messageManager->addSuccessMessage(__('Record deleted successfully'));
        } catch (\Exception $ex) {
            $this->messageManager->addErrorMessage(__('An error occurred deleting the record'));
        }
        $resultRedirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('*/*/index', ['back' => null, '_current' => true]);
        return $resultRedirect;
    }
}
