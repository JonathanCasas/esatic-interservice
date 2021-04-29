<?php


namespace Esatic\Interservice\Model\Ws\Entities;


class GuideResponse
{

    private $shippingCode;
    private $customer;
    private $manifestCode;
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
    private $valid;
    private $message;
    private $inconsistencies;

    /**
     * @return mixed
     */
    public function getShippingCode()
    {
        return $this->shippingCode;
    }

    /**
     * @param mixed $shippingCode
     * @return GuideResponse
     */
    public function setShippingCode($shippingCode): GuideResponse
    {
        $this->shippingCode = $shippingCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     * @return GuideResponse
     */
    public function setCustomer($customer): GuideResponse
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManifestCode()
    {
        return $this->manifestCode;
    }

    /**
     * @param mixed $manifestCode
     * @return GuideResponse
     */
    public function setManifestCode($manifestCode): GuideResponse
    {
        $this->manifestCode = $manifestCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginCode()
    {
        return $this->originCode;
    }

    /**
     * @param mixed $originCode
     * @return GuideResponse
     */
    public function setOriginCode($originCode): GuideResponse
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
     * @return GuideResponse
     */
    public function setOriginName($originName): GuideResponse
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
     * @return GuideResponse
     */
    public function setOriginAddress($originAddress): GuideResponse
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
     * @return GuideResponse
     */
    public function setOriginPhone($originPhone): GuideResponse
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
     * @return GuideResponse
     */
    public function setOriginRegion($originRegion): GuideResponse
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
     * @return GuideResponse
     */
    public function setOriginCity($originCity): GuideResponse
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
     * @return GuideResponse
     */
    public function setOriginPostalCode($originPostalCode): GuideResponse
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
     * @return GuideResponse
     */
    public function setReferenceNumber($referenceNumber): GuideResponse
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
     * @return GuideResponse
     */
    public function setPayrollNumber($payrollNumber): GuideResponse
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
     * @return GuideResponse
     */
    public function setDestinationCode($destinationCode): GuideResponse
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
     * @return GuideResponse
     */
    public function setDestinationName($destinationName): GuideResponse
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
     * @return GuideResponse
     */
    public function setDestinationAddress($destinationAddress): GuideResponse
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
     * @return GuideResponse
     */
    public function setDestinationPhone($destinationPhone): GuideResponse
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
     * @return GuideResponse
     */
    public function setDestinationRegion($destinationRegion): GuideResponse
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
     * @return GuideResponse
     */
    public function setDestinationCity($destinationCity): GuideResponse
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
     * @return GuideResponse
     */
    public function setDestinationPostalCode($destinationPostalCode): GuideResponse
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
     * @return GuideResponse
     */
    public function setPacking($packing): GuideResponse
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
     * @return GuideResponse
     */
    public function setSayContain($sayContain): GuideResponse
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
     * @return GuideResponse
     */
    public function setQty($qty): GuideResponse
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
     * @return GuideResponse
     */
    public function setWeight($weight): GuideResponse
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
     * @return GuideResponse
     */
    public function setValue($value): GuideResponse
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
     * @return GuideResponse
     */
    public function setLong($long): GuideResponse
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
     * @return GuideResponse
     */
    public function setWith($with): GuideResponse
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
     * @return GuideResponse
     */
    public function setHeight($height): GuideResponse
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
     * @return GuideResponse
     */
    public function setDescription($description): GuideResponse
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
     * @return GuideResponse
     */
    public function setIsLetterCopy($isLetterCopy): GuideResponse
    {
        $this->isLetterCopy = $isLetterCopy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return GuideResponse
     */
    public function setMessage($message): GuideResponse
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInconsistencies()
    {
        return $this->inconsistencies;
    }

    /**
     * @param mixed $inconsistencies
     * @return GuideResponse
     */
    public function setInconsistencies($inconsistencies): GuideResponse
    {
        $this->inconsistencies = $inconsistencies;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * @param mixed $valid
     * @return GuideResponse
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }


    public static function createFromJsonResponse($data): GuideResponse
    {
        $guideResponse = new GuideResponse();
        if (isset($data->CodEnvio)) {
            $guideResponse->setShippingCode($data->CodEnvio);
        }
        if (isset($data->Cliente)) {
            $guideResponse->setCustomer($data->Cliente);
        }
        if (isset($data->CodManifiesto)) {
            $guideResponse->setManifestCode($data->CodManifiesto);
        }
        if (isset($data->CodOrigen)) {
            $guideResponse->setOriginCode($data->CodOrigen);
        }
        if (isset($data->NomOrigen)) {
            $guideResponse->setOriginName($data->NomOrigen);
        }
        if (isset($data->DirOrigen)) {
            $guideResponse->setOriginAddress($data->DirOrigen);
        }
        if (isset($data->TelOrigen)) {
            $guideResponse->setOriginPhone($data->TelOrigen);
        }
        if (isset($data->CiudadOrigen)) {
            $guideResponse->setOriginCity($data->CiudadOrigen);
        }
        if (isset($data->CodigoPostalOrigen)) {
            $guideResponse->setOriginPostalCode($data->CodigoPostalOrigen);
        }
        if (isset($data->NroReferencia)) {
            $guideResponse->setReferenceNumber($data->NroReferencia);
        }
        if (isset($data->NroPlanilla)) {
            $guideResponse->setPayrollNumber($data->NroPlanilla);
        }
        if (isset($data->CodDestino)) {
            $guideResponse->setDestinationCode($data->CodDestino);
        }
        if (isset($data->NomDestino)) {
            $guideResponse->setDestinationName($data->NomDestino);
        }
        if (isset($data->DirDestino)) {
            $guideResponse->setDestinationAddress($data->DirDestino);
        }
        if (isset($data->TelDestino)) {
            $guideResponse->setDestinationPhone($data->TelDestino);
        }
        if (isset($data->CiudadDestino)) {
            $guideResponse->setDestinationCity($data->CiudadDestino);
        }
        if (isset($data->CodigoPostalDestino)) {
            $guideResponse->setDestinationPostalCode($data->CodigoPostalDestino);
        }
        if (isset($data->Empaque)) {
            $guideResponse->setPacking($data->Empaque);
        }
        if (isset($data->DiceContener)) {
            $guideResponse->setSayContain($data->DiceContener);
        }
        if (isset($data->Cantidad)) {
            $guideResponse->setQty($data->Cantidad);
        }
        if (isset($data->Peso)) {
            $guideResponse->setWeight($data->Peso);
        }
        if (isset($data->Valor)) {
            $guideResponse->setValue($data->Valor);
        }
        if (isset($data->Largo)) {
            $guideResponse->setLong($data->Largo);
        }
        if (isset($data->Ancho)) {
            $guideResponse->setWith($data->Ancho);
        }
        if (isset($data->Descripcion)) {
            $guideResponse->setDescription($data->Descripcion);
        }
        if (isset($data->Es_CartaCopia)) {
            $guideResponse->setIsLetterCopy($data->Es_CartaCopia);
        }
        if (isset($data->Valid)) {
            $guideResponse->setValid($data->Valid);
        }
        if (isset($data->Mensaje)) {
            $guideResponse->setMessage($data->Mensaje);
        }
        if (isset($data->Inconsistencias)) {
            $guideResponse->setInconsistencies($data->Inconsistencias);
        }
        return $guideResponse;
    }
}
