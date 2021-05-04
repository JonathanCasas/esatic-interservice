<?php

namespace Esatic\Interservice\Model\Packaging;

use Esatic\Interservice\Model\Packaging;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    private $loadedData;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param \Esatic\Interservice\Model\ResourceModel\Collection\CollectionFactory $packagingCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        string $name,
        string $primaryFieldName,
        string $requestFieldName,
        \Esatic\Interservice\Model\ResourceModel\Collection\CollectionFactory $packagingCollectionFactory,
        array $meta = [],
        array $data = []
    )
    {
        $this->collection = $packagingCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData(): array
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        $this->loadedData = [];
        /** @var Packaging $quote */
        foreach ($items as $quote) {
            $this->loadedData[$quote->getId()] = $quote->getData();
        }

        return $this->loadedData;
    }
}
