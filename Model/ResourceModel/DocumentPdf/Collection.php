<?php


namespace Esatic\Interservice\Model\ResourceModel\DocumentPdf;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected function _construct()
    {
        $this->_init(\Esatic\Interservice\Model\DocumentPdf::class, \Esatic\Interservice\Model\ResourceModel\DocumentPdf::class);
    }

}
