<?php


namespace Esatic\Interservice\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Packaging extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('esatic_interservice_packaging', 'entity_id');
    }
}
