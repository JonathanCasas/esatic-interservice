<?php

namespace Esatic\Interservice\Controller\Adminhtml\Interservice;

class Save extends \Magento\Backend\App\Action
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
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function execute()
    {
        $entityId = $this->getRequest()->getParam('entity_id');
        $packaging = $this->packagingFactory->create();
        $resourceModel = $this->resourceModelFactory->create();
        if (!is_null($entityId) && !empty($entityId) && $entityId > 0) {
            $resourceModel->load($packaging, $entityId);
        }
        $packaging->setDescription($this->getRequest()->getParam('description'));
        $packaging->setName($this->getRequest()->getParam('name'));
        $resourceModel->save($packaging);
        $this->messageManager->addSuccessMessage(__('The Packaging has been saved'));
        $resultRedirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('*/*/edit', ['id' => $packaging->getEntityId(), 'back' => null, '_current' => true]);
        return $resultRedirect;
    }
}
