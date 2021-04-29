<?php

namespace Esatic\Interservice\Model\Ws;

class CotizarServicioResponse
{

    /**
     * @var string $CotizarServicioResult
     */
    protected $CotizarServicioResult = null;

    /**
     * @param string $CotizarServicioResult
     */
    public function __construct($CotizarServicioResult)
    {
      $this->CotizarServicioResult = $CotizarServicioResult;
    }

    /**
     * @return string
     */
    public function getCotizarServicioResult()
    {
      return $this->CotizarServicioResult;
    }

    /**
     * @param string $CotizarServicioResult
     * @return \Esatic\Interservice\Model\Ws\CotizarServicioResponse
     */
    public function setCotizarServicioResult($CotizarServicioResult)
    {
      $this->CotizarServicioResult = $CotizarServicioResult;
      return $this;
    }

}
