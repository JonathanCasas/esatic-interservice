<?php


namespace Esatic\Interservice\Model\Ws\Entities;


use Magento\Sales\Model\Order;

class TrackingInformationRequest implements \JsonSerializable
{
    private $originCode;
    private $originName;
    private $originAddress;
    private $originPhone;
    private $originRegion;
    private $originCity;
    private $originPostalCode;
    private $referenceNumber;
    private $payrollNumber;
    private $destinationCode;
    private $destinationName;
    private $destinationAddress;
    private $destinationPhone;
    private $destinationRegion;
    private $destinationCity;
    private $destinationPostalCode;
    private $packing;
    private $sayContain;
    private $qty;
    private $weight;
    private $value;
    private $long;
    private $with;
    private $height;
    private $description;
    private $isLetterCopy;

    /**
     * @return mixed
     */
    public function getOriginCode()
    {
        return $this->originCode;
    }

    /**
     * @param mixed $originCode
     * @return TrackingInformationRequest
     */
    public function setOriginCode($originCode): TrackingInformationRequest
    {
        $this->originCode = $originCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginName()
    {
        return $this->originName;
    }

    /**
     * @param mixed $originName
     * @return TrackingInformationRequest
     */
    public function setOriginName($originName): TrackingInformationRequest
    {
        $this->originName = $originName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * @param mixed $originAddress
     * @return TrackingInformationRequest
     */
    public function setOriginAddress($originAddress): TrackingInformationRequest
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginPhone()
    {
        return $this->originPhone;
    }

    /**
     * @param mixed $originPhone
     * @return TrackingInformationRequest
     */
    public function setOriginPhone($originPhone): TrackingInformationRequest
    {
        $this->originPhone = $originPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginRegion()
    {
        return $this->originRegion;
    }

    /**
     * @param mixed $originRegion
     * @return TrackingInformationRequest
     */
    public function setOriginRegion($originRegion): TrackingInformationRequest
    {
        $this->originRegion = $originRegion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginCity()
    {
        return $this->originCity;
    }

    /**
     * @param mixed $originCity
     * @return TrackingInformationRequest
     */
    public function setOriginCity($originCity): TrackingInformationRequest
    {
        $this->originCity = $originCity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginPostalCode()
    {
        return $this->originPostalCode;
    }

    /**
     * @param mixed $originPostalCode
     * @return TrackingInformationRequest
     */
    public function setOriginPostalCode($originPostalCode): TrackingInformationRequest
    {
        $this->originPostalCode = $originPostalCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * @param mixed $referenceNumber
     * @return TrackingInformationRequest
     */
    public function setReferenceNumber($referenceNumber): TrackingInformationRequest
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayrollNumber()
    {
        return $this->payrollNumber;
    }

    /**
     * @param mixed $payrollNumber
     * @return TrackingInformationRequest
     */
    public function setPayrollNumber($payrollNumber): TrackingInformationRequest
    {
        $this->payrollNumber = $payrollNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * @param mixed $destinationCode
     * @return TrackingInformationRequest
     */
    public function setDestinationCode($destinationCode): TrackingInformationRequest
    {
        $this->destinationCode = $destinationCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestinationName()
    {
        return $this->destinationName;
    }

    /**
     * @param mixed $destinationName
     * @return TrackingInformationRequest
     */
    public function setDestinationName($destinationName): TrackingInformationRequest
    {
        $this->destinationName = $destinationName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestinationAddress()
    {
        return $this->destinationAddress;
    }

    /**
     * @param mixed $destinationAddress
     * @return TrackingInformationRequest
     */
    public function setDestinationAddress($destinationAddress): TrackingInformationRequest
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestinationPhone()
    {
        return $this->destinationPhone;
    }

    /**
     * @param mixed $destinationPhone
     * @return TrackingInformationRequest
     */
    public function setDestinationPhone($destinationPhone): TrackingInformationRequest
    {
        $this->destinationPhone = $destinationPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestinationRegion()
    {
        return $this->destinationRegion;
    }

    /**
     * @param mixed $destinationRegion
     * @return TrackingInformationRequest
     */
    public function setDestinationRegion($destinationRegion): TrackingInformationRequest
    {
        $this->destinationRegion = $destinationRegion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestinationCity()
    {
        return $this->destinationCity;
    }

    /**
     * @param mixed $destinationCity
     * @return TrackingInformationRequest
     */
    public function setDestinationCity($destinationCity): TrackingInformationRequest
    {
        $this->destinationCity = $destinationCity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestinationPostalCode()
    {
        return $this->destinationPostalCode;
    }

    /**
     * @param mixed $destinationPostalCode
     * @return TrackingInformationRequest
     */
    public function setDestinationPostalCode($destinationPostalCode): TrackingInformationRequest
    {
        $this->destinationPostalCode = $destinationPostalCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPacking()
    {
        return $this->packing;
    }

    /**
     * @param mixed $packing
     * @return TrackingInformationRequest
     */
    public function setPacking($packing): TrackingInformationRequest
    {
        $this->packing = $packing;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSayContain()
    {
        return $this->sayContain;
    }

    /**
     * @param mixed $sayContain
     * @return TrackingInformationRequest
     */
    public function setSayContain($sayContain): TrackingInformationRequest
    {
        $this->sayContain = $sayContain;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     * @return TrackingInformationRequest
     */
    public function setQty($qty): TrackingInformationRequest
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     * @return TrackingInformationRequest
     */
    public function setWeight($weight): TrackingInformationRequest
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return TrackingInformationRequest
     */
    public function setValue($value): TrackingInformationRequest
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param mixed $long
     * @return TrackingInformationRequest
     */
    public function setLong($long): TrackingInformationRequest
    {
        $this->long = $long;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWith()
    {
        return $this->with;
    }

    /**
     * @param mixed $with
     * @return TrackingInformationRequest
     */
    public function setWith($with): TrackingInformationRequest
    {
        $this->with = $with;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return TrackingInformationRequest
     */
    public function setHeight($height): TrackingInformationRequest
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return TrackingInformationRequest
     */
    public function setDescription($description): TrackingInformationRequest
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsLetterCopy()
    {
        return $this->isLetterCopy;
    }

    /**
     * @param mixed $isLetterCopy
     * @return TrackingInformationRequest
     */
    public function setIsLetterCopy($isLetterCopy): TrackingInformationRequest
    {
        $this->isLetterCopy = $isLetterCopy;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'CodOrigen' => $this->originCode,
            'NomOrigen' => $this->originName,
            'DirOrigen' => $this->originAddress,
            'TelOrigen' => $this->originAddress,
            'DepartamentoOrigen' => $this->originRegion,
            'CiudadOrigen' => $this->originCity,
            'CodigoPostalOrigen' => $this->originPostalCode,
            'NroReferencia' => $this->referenceNumber,
            'NroPlanilla' => $this->payrollNumber,
            'CodDestino' => $this->destinationCode,
            'NomDestino' => $this->destinationName,
            'DirDestino' => $this->destinationAddress,
            'TelDestino' => $this->destinationPhone,
            'DepartamentoDestino' => $this->destinationRegion,
            'CiudadDestino' => $this->destinationCity,
            'CodigoPostalDestino' => $this->destinationPostalCode,
            'Empaque' => $this->packing,
            'DiceContener' => $this->sayContain,
            'Cantidad' => $this->qty,
            'Peso' => $this->weight,
            'Valor' => $this->value,
            'Largo' => $this->long,
            'Ancho' => $this->with,
            'Alto' => $this->height,
            'Descripcion' => $this->description,
            'Es_CartaCopia' => $this->isLetterCopy,
        ];
    }
}
