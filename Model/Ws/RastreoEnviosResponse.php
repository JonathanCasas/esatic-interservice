<?php

namespace Esatic\Interservice\Model\Ws;

class RastreoEnviosResponse
{

    /**
     * @var string $RastreoEnviosResult
     */
    protected $RastreoEnviosResult = null;

    /**
     * @param string $RastreoEnviosResult
     */
    public function __construct($RastreoEnviosResult)
    {
      $this->RastreoEnviosResult = $RastreoEnviosResult;
    }

    /**
     * @return string
     */
    public function getRastreoEnviosResult()
    {
      return $this->RastreoEnviosResult;
    }

    /**
     * @param string $RastreoEnviosResult
     * @return \Esatic\Interservice\Model\Ws\RastreoEnviosResponse
     */
    public function setRastreoEnviosResult($RastreoEnviosResult)
    {
      $this->RastreoEnviosResult = $RastreoEnviosResult;
      return $this;
    }

}
