<?php

namespace Esatic\Interservice\Helper;

class GetPackaging
{

    /**
     * @var Data
     */
    private $data;
    /**
     * @var \Esatic\Interservice\Model\PackagingFactory
     */
    private $packagingFactory;
    /**
     * @var \Esatic\Interservice\Model\ResourceModel\PackagingFactory
     */
    private $resourceModelFactory;

    /**
     * GetPackaging constructor.
     * @param Data $data
     * @param \Esatic\Interservice\Model\PackagingFactory $packagingFactory
     * @param \Esatic\Interservice\Model\ResourceModel\PackagingFactory $resourceModelFactory
     */
    public function __construct(
        Data $data,
        \Esatic\Interservice\Model\PackagingFactory $packagingFactory,
        \Esatic\Interservice\Model\ResourceModel\PackagingFactory $resourceModelFactory
    ) {
        $this->data = $data;
        $this->packagingFactory = $packagingFactory;
        $this->resourceModelFactory = $resourceModelFactory;
    }

    public function execute($storeId = null)
    {
        $packaging = $this->packagingFactory->create();
        $resourceModel = $this->resourceModelFactory->create();
        $resourceModel->load($packaging, $this->data->packaging($storeId));
        return $packaging->getName();
    }
}
