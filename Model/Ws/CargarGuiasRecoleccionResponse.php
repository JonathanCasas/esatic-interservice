<?php

namespace Esatic\Interservice\Model\Ws;

class CargarGuiasRecoleccionResponse
{

    /**
     * @var string $CargarGuiasRecoleccionResult
     */
    protected $CargarGuiasRecoleccionResult = null;

    /**
     * @param string $CargarGuiasRecoleccionResult
     */
    public function __construct($CargarGuiasRecoleccionResult)
    {
      $this->CargarGuiasRecoleccionResult = $CargarGuiasRecoleccionResult;
    }

    /**
     * @return string
     */
    public function getCargarGuiasRecoleccionResult()
    {
      return $this->CargarGuiasRecoleccionResult;
    }

    /**
     * @param string $CargarGuiasRecoleccionResult
     * @return \Esatic\Interservice\Model\Ws\CargarGuiasRecoleccionResponse
     */
    public function setCargarGuiasRecoleccionResult($CargarGuiasRecoleccionResult)
    {
      $this->CargarGuiasRecoleccionResult = $CargarGuiasRecoleccionResult;
      return $this;
    }

}
