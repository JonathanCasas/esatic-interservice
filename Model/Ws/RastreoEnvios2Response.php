<?php

namespace Esatic\Interservice\Model\Ws;

class RastreoEnvios2Response
{

    /**
     * @var string $RastreoEnvios2Result
     */
    protected $RastreoEnvios2Result = null;

    /**
     * @param string $RastreoEnvios2Result
     */
    public function __construct($RastreoEnvios2Result)
    {
      $this->RastreoEnvios2Result = $RastreoEnvios2Result;
    }

    /**
     * @return string
     */
    public function getRastreoEnvios2Result()
    {
      return $this->RastreoEnvios2Result;
    }

    /**
     * @param string $RastreoEnvios2Result
     * @return \Esatic\Interservice\Model\Ws\RastreoEnvios2Response
     */
    public function setRastreoEnvios2Result($RastreoEnvios2Result)
    {
      $this->RastreoEnvios2Result = $RastreoEnvios2Result;
      return $this;
    }

}
