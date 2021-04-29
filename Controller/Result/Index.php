<?php


namespace Esatic\Interservice\Controller\Result;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class Index extends Action
{

    public function execute()
    {
        echo 'Hola Mundo';
    }
}
