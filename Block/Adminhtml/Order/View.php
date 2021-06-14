<?php


namespace Esatic\Interservice\Block\Adminhtml\Order;


use Esatic\Interservice\Model\DocumentPdf;

class View extends \Magento\Sales\Block\Adminhtml\Order\AbstractOrder
{

    /**
     * @var \Esatic\Interservice\Model\ResourceModel\DocumentPdf\CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var \Magento\Sales\Model\Order
     */
    private $order;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Sales\Helper\Admin $adminHelper,
        \Esatic\Interservice\Model\ResourceModel\DocumentPdf\CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        parent::__construct($context, $registry, $adminHelper, $data);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Retrieve required options from parent
     *
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _beforeToHtml()
    {
        parent::_beforeToHtml();
    }

    /**
     * @return DocumentPdf[]
     */
    public function getDocumentPdf(): array
    {
        $collection = $this->collectionFactory->create();
        return $collection->addFieldToFilter('order_id', array('eq' => $this->getRequest()->getParam('order_id')))->load()->getItems();
    }

}
