<?php


namespace Esatic\Interservice\Model;


class GetCityCode implements GetCityCodeInterface
{


    /**
     * @param string $regionId
     * @param string $city
     * @return string|null
     */
    public function execute(string $regionId, string $city): ?string
    {
        return '11001';
    }
}
