<?php


namespace Esatic\Interservice\Model;


use Magento\Framework\Model\AbstractModel;

class Packaging extends AbstractModel
{

    public function _construct()
    {
        $this->_init(ResourceModel\Packaging::class);
    }

    public function getName()
    {
        return $this->getData('name');
    }

    public function setName($name)
    {
        $this->setData('name', $name);
    }

    public function getDescription()
    {
        return $this->getData('description');
    }

    public function setDescription($description)
    {
        $this->setData('description', $description);
    }

}
