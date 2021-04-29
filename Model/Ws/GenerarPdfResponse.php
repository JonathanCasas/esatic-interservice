<?php

namespace Esatic\Interservice\Model\Ws;

class GenerarPdfResponse
{

    /**
     * @var string $GenerarPdfResult
     */
    protected $GenerarPdfResult = null;

    /**
     * @param string $GenerarPdfResult
     */
    public function __construct($GenerarPdfResult)
    {
      $this->GenerarPdfResult = $GenerarPdfResult;
    }

    /**
     * @return string
     */
    public function getGenerarPdfResult()
    {
      return $this->GenerarPdfResult;
    }

    /**
     * @param string $GenerarPdfResult
     * @return \Esatic\Interservice\Model\Ws\GenerarPdfResponse
     */
    public function setGenerarPdfResult($GenerarPdfResult)
    {
      $this->GenerarPdfResult = $GenerarPdfResult;
      return $this;
    }

}
