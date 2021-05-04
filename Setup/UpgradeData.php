<?php

namespace Esatic\Interservice\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    private $data = [
        [
            'name' => 'CAJA',
            'description' => 'CAJA'
        ],
        [
            'name' => 'BOLSA',
            'description' => 'BOLSA'
        ],
        [
            'name' => 'BOLSA DE SEGURIDAD',
            'description' => 'BOLSA DE SEGURIDAD'
        ],
        [
            'name' => 'PAQUETE',
            'description' => 'PAQUETE'
        ],
        [
            'name' => 'SOBRE',
            'description' => 'SOBRE'
        ],
        [
            'name' => 'TULA',
            'description' => 'TULA'
        ],
    ];

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setupData = $setup->startSetup();
        foreach ($this->data as $item) {
            $setup->getConnection()->insertForce(
                $setup->getTable('esatic_interservice_packaging'),
                $item
            );
        }
        $setupData->endSetup();
    }
}
