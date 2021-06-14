<?php

namespace Esatic\Interservice\Model\Config\Source;

class Packaging implements \Magento\Framework\Data\OptionSourceInterface
{

    /**
     * @var \Esatic\Interservice\Model\ResourceModel\Collection\CollectionFactory
     */
    private $collectionFactory;

    /**
     * Packaging constructor.
     * @param \Esatic\Interservice\Model\ResourceModel\Collection\CollectionFactory $collectionFactory
     */
    public function __construct(\Esatic\Interservice\Model\ResourceModel\Collection\CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function toOptionArray(): array
    {
        $data = [['value' => '', 'label' => __('Seleccionar tipo de paquete por defecto')]];
        /** @var \Esatic\Interservice\Model\Packaging[] $collection */
        $collection = $this->collectionFactory->create()->getItems();
        foreach ($collection as $item) {
            $data[] = ['value' => $item->getId(), 'label' => $item->getName()];
        }
        return $data;
    }
}
