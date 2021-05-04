<?php


namespace Esatic\Interservice\Model;


interface GetCityCodeInterface
{


    /**
     * Get city code for use in shipping method
     * @param string $regionId
     * @param string $city the city name for search
     * @return string|null
     * @throws \Exception if the city has not been found
     */
    public function execute(string $regionId, string $city): ?string;

}
