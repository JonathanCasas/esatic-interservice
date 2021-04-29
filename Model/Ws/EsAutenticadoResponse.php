<?php

namespace Esatic\Interservice\Model\Ws;

class EsAutenticadoResponse
{

    /**
     * @var string $EsAutenticadoResult
     */
    protected $EsAutenticadoResult = null;

    /**
     * @param string $EsAutenticadoResult
     */
    public function __construct($EsAutenticadoResult)
    {
      $this->EsAutenticadoResult = $EsAutenticadoResult;
    }

    /**
     * @return string
     */
    public function getEsAutenticadoResult()
    {
      return $this->EsAutenticadoResult;
    }

    /**
     * @param string $EsAutenticadoResult
     * @return \Esatic\Interservice\Model\Ws\EsAutenticadoResponse
     */
    public function setEsAutenticadoResult($EsAutenticadoResult)
    {
      $this->EsAutenticadoResult = $EsAutenticadoResult;
      return $this;
    }

}
