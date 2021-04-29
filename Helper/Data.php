<?php

namespace Esatic\Interservice\Helper;

use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const BASE_PATH = 'carriers/interservice/';

    public function name($storeId = null)
    {
        return $this->scopeConfig->getValue($this->getPath('name'), ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function username($storeId = null)
    {
        return $this->scopeConfig->getValue($this->getPath('username'), ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function password($storeId = null)
    {
        return $this->scopeConfig->getValue($this->getPath('password'), ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function autoCreation($storeId = null)
    {
        return (bool)$this->scopeConfig->getValue($this->getPath('auto_creation'), ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function createWithShipping($storeId = null)
    {
        return $this->scopeConfig->getValue($this->getPath('create_with_shipping'), ScopeInterface::SCOPE_STORE, $storeId);
    }

    public function process($storeId = null)
    {
        return $this->scopeConfig->getValue($this->getPath('process'), ScopeInterface::SCOPE_STORE, $storeId);
    }

    private function getPath(string $path): string
    {
        return sprintf('%s%s', self::BASE_PATH, $path);
    }
}
