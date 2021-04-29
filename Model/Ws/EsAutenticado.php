<?php

namespace Esatic\Interservice\Model\Ws;

class EsAutenticado
{

    /**
     * @var string $Endpoint
     */
    protected $Endpoint = null;

    /**
     * @var string $ServerName
     */
    protected $ServerName = null;

    /**
     * @var string $Domain
     */
    protected $Domain = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param string $Endpoint
     * @param string $ServerName
     * @param string $Domain
     * @param string $UserName
     * @param string $Password
     */
    public function __construct($Endpoint, $ServerName, $Domain, $UserName, $Password)
    {
      $this->Endpoint = $Endpoint;
      $this->ServerName = $ServerName;
      $this->Domain = $Domain;
      $this->UserName = $UserName;
      $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
      return $this->Endpoint;
    }

    /**
     * @param string $Endpoint
     * @return \Esatic\Interservice\Model\Ws\EsAutenticado
     */
    public function setEndpoint($Endpoint)
    {
      $this->Endpoint = $Endpoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getServerName()
    {
      return $this->ServerName;
    }

    /**
     * @param string $ServerName
     * @return \Esatic\Interservice\Model\Ws\EsAutenticado
     */
    public function setServerName($ServerName)
    {
      $this->ServerName = $ServerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
      return $this->Domain;
    }

    /**
     * @param string $Domain
     * @return \Esatic\Interservice\Model\Ws\EsAutenticado
     */
    public function setDomain($Domain)
    {
      $this->Domain = $Domain;
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
     * @return \Esatic\Interservice\Model\Ws\EsAutenticado
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
     * @return \Esatic\Interservice\Model\Ws\EsAutenticado
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
