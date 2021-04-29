<?php

namespace Esatic\Interservice\Model\Ws;

class SrvClientes extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'EsAutenticado' => 'Esatic\\Interservice\\Model\\Ws\\EsAutenticado',
      'EsAutenticadoResponse' => 'Esatic\\Interservice\\Model\\Ws\\EsAutenticadoResponse',
      'RastreoEnvios' => 'Esatic\\Interservice\\Model\\Ws\\RastreoEnvios',
      'RastreoEnviosResponse' => 'Esatic\\Interservice\\Model\\Ws\\RastreoEnviosResponse',
      'RastreoEnvios2' => 'Esatic\\Interservice\\Model\\Ws\\RastreoEnvios2',
      'RastreoEnvios2Response' => 'Esatic\\Interservice\\Model\\Ws\\RastreoEnvios2Response',
      'CargarGuiasRecoleccion' => 'Esatic\\Interservice\\Model\\Ws\\CargarGuiasRecoleccion',
      'CargarGuiasRecoleccionResponse' => 'Esatic\\Interservice\\Model\\Ws\\CargarGuiasRecoleccionResponse',
      'GenerarPdf' => 'Esatic\\Interservice\\Model\\Ws\\GenerarPdf',
      'GenerarPdfResponse' => 'Esatic\\Interservice\\Model\\Ws\\GenerarPdfResponse',
      'CotizarServicio' => 'Esatic\\Interservice\\Model\\Ws\\CotizarServicio',
      'CotizarServicioResponse' => 'Esatic\\Interservice\\Model\\Ws\\CotizarServicioResponse',
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://aplicaciones.interserviciossas.com/SitePruebas/WcfInterServicios/Srv_Clientes.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param EsAutenticado $parameters
     * @return EsAutenticadoResponse
     */
    public function EsAutenticado(EsAutenticado $parameters)
    {
      return $this->__soapCall('EsAutenticado', array($parameters));
    }

    /**
     * @param RastreoEnvios $parameters
     * @return RastreoEnviosResponse
     */
    public function RastreoEnvios(RastreoEnvios $parameters)
    {
      return $this->__soapCall('RastreoEnvios', array($parameters));
    }

    /**
     * @param RastreoEnvios2 $parameters
     * @return RastreoEnvios2Response
     */
    public function RastreoEnvios2(RastreoEnvios2 $parameters)
    {
      return $this->__soapCall('RastreoEnvios2', array($parameters));
    }

    /**
     * @param CargarGuiasRecoleccion $parameters
     * @return CargarGuiasRecoleccionResponse
     */
    public function CargarGuiasRecoleccion(CargarGuiasRecoleccion $parameters)
    {
      return $this->__soapCall('CargarGuiasRecoleccion', array($parameters));
    }

    /**
     * @param GenerarPdf $parameters
     * @return GenerarPdfResponse
     */
    public function GenerarPdf(GenerarPdf $parameters)
    {
      return $this->__soapCall('GenerarPdf', array($parameters));
    }

    /**
     * @param CotizarServicio $parameters
     * @return CotizarServicioResponse
     */
    public function CotizarServicio(CotizarServicio $parameters)
    {
      return $this->__soapCall('CotizarServicio', array($parameters));
    }

}
