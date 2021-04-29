<?php

namespace Esatic\Interservice\Model\Ws;

class CotizarServicio
{

    /**
     * @var string $CodProceso
     */
    protected $CodProceso = null;

    /**
     * @var string $StrDetalle
     */
    protected $StrDetalle = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param string $CodProceso
     * @param string $StrDetalle
     * @param string $UserName
     * @param string $Password
     */
    public function __construct($CodProceso, $StrDetalle, $UserName, $Password)
    {
      $this->CodProceso = $CodProceso;
      $this->StrDetalle = $StrDetalle;
      $this->UserName = $UserName;
      $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getCodProceso()
    {
      return $this->CodProceso;
    }

    /**
     * @param string $CodProceso
     * @return \Esatic\Interservice\Model\Ws\CotizarServicio
     */
    public function setCodProceso($CodProceso)
    {
      $this->CodProceso = $CodProceso;
      return $this;
    }

    /**
     * @return string
     */
    public function getStrDetalle()
    {
      return $this->StrDetalle;
    }

    /**
     * @param string $StrDetalle
     * @return \Esatic\Interservice\Model\Ws\CotizarServicio
     */
    public function setStrDetalle($StrDetalle)
    {
      $this->StrDetalle = $StrDetalle;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \Esatic\Interservice\Model\Ws\CotizarServicio
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Esatic\Interservice\Model\Ws\CotizarServicio
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
