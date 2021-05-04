<?php

namespace Esatic\Interservice\Model;

class GetCityCode implements GetCityCodeInterface
{

    /**
     * @var \Eadesigndev\RomCity\Model\ResourceModel\Collection\CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * GetCityCode constructor.
     * @param \Eadesigndev\RomCity\Model\ResourceModel\Collection\CollectionFactory $collectionFactory
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Eadesigndev\RomCity\Model\ResourceModel\Collection\CollectionFactory $collectionFactory,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->logger = $logger;
    }

    /**
     * @param string $regionId
     * @param string $cityName
     * @return string|null
     * @throws \Exception
     */
    public function execute(string $regionId, string $cityName): ?string
    {
        $collection = $this->collectionFactory->create();
        /** @var \Esatic\DropdownCity\Model\RomCity $city */
        $city = $collection->addFieldToFilter('region_id', ['eq' => $regionId])->addFieldToFilter('city', ['eq' => $cityName])->getFirstItem();
        if (is_null($city)) {
            $this->logger->info(sprintf('the city %s of the region %s has not been found', $cityName, $regionId));
            throw new \Exception('Invalid City');
        }
        return $city->getCityCode();
    }
}
