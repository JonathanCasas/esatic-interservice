<?php


namespace Esatic\Interservice\Model;


use Magento\Framework\Model\AbstractModel;

class DocumentPdf extends AbstractModel
{

    protected function _construct()
    {
        $this->_init(ResourceModel\DocumentPdf::class);
    }

    public function getOrderId()
    {
        return $this->getData('order_id');
    }

    public function setOrderId(int $orderId)
    {
        return $this->setData('order_id', $orderId);
    }

    public function getShipmentId()
    {
        return $this->getData('shipment_id');
    }

    public function setShipmentId(int $shipmentId)
    {
        return $this->setData('shipment_id', $shipmentId);
    }

    public function getInvoiceId()
    {
        return $this->getData('invoice_id');
    }

    public function setInvoiceId(int $invoiceId)
    {
        return $this->setData('invoice_id', $invoiceId);
    }

    public function getUrlDocument()
    {
        return $this->getData('url_document');
    }

    public function setUrlDocument(string $urlDocument)
    {
        return $this->setData('url_document', $urlDocument);
    }

}
