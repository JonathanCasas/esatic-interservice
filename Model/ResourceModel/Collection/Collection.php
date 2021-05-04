<?php


namespace Esatic\Interservice\Model\ResourceModel\Collection;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Esatic\Interservice\Model\Packaging::class, \Esatic\Interservice\Model\ResourceModel\Packaging::class);
    }
}
