<?php

namespace Esatic\Interservice\Model\Ws;

class RastreoEnvios2
{

    /**
     * @var string $StrGuias
     */
    protected $StrGuias = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param string $StrGuias
     * @param string $UserName
     * @param string $Password
     */
    public function __construct($StrGuias, $UserName, $Password)
    {
      $this->StrGuias = $StrGuias;
      $this->UserName = $UserName;
      $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getStrGuias()
    {
      return $this->StrGuias;
    }

    /**
     * @param string $StrGuias
     * @return \Esatic\Interservice\Model\Ws\RastreoEnvios2
     */
    public function setStrGuias($StrGuias)
    {
      $this->StrGuias = $StrGuias;
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
     * @return \Esatic\Interservice\Model\Ws\RastreoEnvios2
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
     * @return \Esatic\Interservice\Model\Ws\RastreoEnvios2
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
