<?php

namespace Esatic\Interservice\Model\Ws\Entities;

class GetTrackingGuideResponse
{
    private $guide;
    private $seal;
    private $payroll;
    private $status;
    private $statusName;
    private $managementStatus;
    private $managementStatusName;
    private $managementDate;
    private $shippingDate;
    private $packing;
    private $quantity;
    private $declaredValue;
    private $customerWeight;
    private $validatedWeight;
    private $detail;
    private $originPostalCode;
    private $originCity;
    private $originName;
    private $originPhone;
    private $originAddress;
    private $destinationPostalCode;
    private $destinationCity;
    private $destinationName;
    private $destinationPhone;
    private $destinationAddress;
    private $guideImage;
    /**
     * @var GetTrackingResponse[]
     */
    private $trackingList;

    /**
     * @return mixed
     */
    public function getGuide()
    {
        return $this->guide;
    }

    /**
     * @param mixed $guide
     * @return GetTrackingGuideResponse
     */
    public function setGuide($guide)
    {
        $this->guide = $guide;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeal()
    {
        return $this->seal;
    }

    /**
     * @param mixed $seal
     * @return GetTrackingGuideResponse
     */
    public function setSeal($seal)
    {
        $this->seal = $seal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayroll()
    {
        return $this->payroll;
    }

    /**
     * @param mixed $payroll
     * @return GetTrackingGuideResponse
     */
    public function setPayroll($payroll)
    {
        $this->payroll = $payroll;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return GetTrackingGuideResponse
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * @param mixed $statusName
     * @return GetTrackingGuideResponse
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManagementStatus()
    {
        return $this->managementStatus;
    }

    /**
     * @param mixed $managementStatus
     * @return GetTrackingGuideResponse
     */
    public function setManagementStatus($managementStatus)
    {
        $this->managementStatus = $managementStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManagementStatusName()
    {
        return $this->managementStatusName;
    }

    /**
     * @param mixed $managementStatusName
     * @return GetTrackingGuideResponse
     */
    public function setManagementStatusName($managementStatusName)
    {
        $this->managementStatusName = $managementStatusName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManagementDate()
    {
        return $this->managementDate;
    }

    /**
     * @param mixed $managementDate
     * @return GetTrackingGuideResponse
     */
    public function setManagementDate($managementDate)
    {
        $this->managementDate = $managementDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * @param mixed $shippingDate
     * @return GetTrackingGuideResponse
     */
    public function setShippingDate($shippingDate)
    {
        $this->shippingDate = $shippingDate;
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
     * @return GetTrackingGuideResponse
     */
    public function setPacking($packing)
    {
        $this->packing = $packing;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return GetTrackingGuideResponse
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * @param mixed $declaredValue
     * @return GetTrackingGuideResponse
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerWeight()
    {
        return $this->customerWeight;
    }

    /**
     * @param mixed $customerWeight
     * @return GetTrackingGuideResponse
     */
    public function setCustomerWeight($customerWeight)
    {
        $this->customerWeight = $customerWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidatedWeight()
    {
        return $this->validatedWeight;
    }

    /**
     * @param mixed $validatedWeight
     * @return GetTrackingGuideResponse
     */
    public function setValidatedWeight($validatedWeight)
    {
        $this->validatedWeight = $validatedWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param mixed $detail
     * @return GetTrackingGuideResponse
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
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
     * @return GetTrackingGuideResponse
     */
    public function setOriginPostalCode($originPostalCode)
    {
        $this->originPostalCode = $originPostalCode;
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
     * @return GetTrackingGuideResponse
     */
    public function setOriginCity($originCity)
    {
        $this->originCity = $originCity;
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
     * @return GetTrackingGuideResponse
     */
    public function setOriginName($originName)
    {
        $this->originName = $originName;
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
     * @return GetTrackingGuideResponse
     */
    public function setOriginPhone($originPhone)
    {
        $this->originPhone = $originPhone;
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
     * @return GetTrackingGuideResponse
     */
    public function setOriginAddress($originAddress)
    {
        $this->originAddress = $originAddress;
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
     * @return GetTrackingGuideResponse
     */
    public function setDestinationPostalCode($destinationPostalCode)
    {
        $this->destinationPostalCode = $destinationPostalCode;
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
     * @return GetTrackingGuideResponse
     */
    public function setDestinationCity($destinationCity)
    {
        $this->destinationCity = $destinationCity;
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
     * @return GetTrackingGuideResponse
     */
    public function setDestinationName($destinationName)
    {
        $this->destinationName = $destinationName;
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
     * @return GetTrackingGuideResponse
     */
    public function setDestinationPhone($destinationPhone)
    {
        $this->destinationPhone = $destinationPhone;
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
     * @return GetTrackingGuideResponse
     */
    public function setDestinationAddress($destinationAddress)
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGuideImage()
    {
        return $this->guideImage;
    }

    /**
     * @param mixed $guideImage
     * @return GetTrackingGuideResponse
     */
    public function setGuideImage($guideImage)
    {
        $this->guideImage = $guideImage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingList()
    {
        return $this->trackingList;
    }

    /**
     * @param mixed $trackingList
     * @return GetTrackingGuideResponse
     */
    public function setTrackingList($trackingList)
    {
        $this->trackingList = $trackingList;
        return $this;
    }

    public static function createFromJsonResponse($data): GetTrackingGuideResponse
    {
        $getTrackingGuideResponse = new GetTrackingGuideResponse();
        if (isset($data->Guia)) {
            $getTrackingGuideResponse->setGuide($data->Guia);
        }
        if (isset($data->Precinto)) {
            $getTrackingGuideResponse->setSeal($data->Precinto);
        }
        if (isset($data->Planilla)) {
            $getTrackingGuideResponse->setPayroll($data->Planilla);
        }
        if (isset($data->Estado)) {
            $getTrackingGuideResponse->setStatus($data->Estado);
        }
        if (isset($data->NombreEstado)) {
            $getTrackingGuideResponse->setStatusName($data->NombreEstado);
        }
        if (isset($data->EstadoGestion)) {
            $getTrackingGuideResponse->setManagementStatus($data->EstadoGestion);
        }
        if (isset($data->NombreEstadoGestion)) {
            $getTrackingGuideResponse->setManagementStatusName($data->NombreEstadoGestion);
        }
        if (isset($data->FechaGestion)) {
            $getTrackingGuideResponse->setManagementDate($data->FechaGestion);
        }
        if (isset($data->FechaEnvio)) {
            $getTrackingGuideResponse->setShippingDate($data->FechaEnvio);
        }
        if (isset($data->Empaque)) {
            $getTrackingGuideResponse->setPacking($data->Empaque);
        }
        if (isset($data->Unidades)) {
            $getTrackingGuideResponse->setQuantity($data->Unidades);
        }
        if (isset($data->ValorDeclarado)) {
            $getTrackingGuideResponse->setDeclaredValue($data->ValorDeclarado);
        }
        if (isset($data->PesoCliente)) {
            $getTrackingGuideResponse->setCustomerWeight($data->PesoCliente);
        }
        if (isset($data->PesoValidado)) {
            $getTrackingGuideResponse->setValidatedWeight($data->PesoValidado);
        }
        if (isset($data->Detalle)) {
            $getTrackingGuideResponse->setDetail($data->Detalle);
        }
        if (isset($data->CodPostalOrigen)) {
            $getTrackingGuideResponse->setOriginPostalCode($data->CodPostalOrigen);
        }
        if (isset($data->CiudadOrigen)) {
            $getTrackingGuideResponse->setOriginCity($data->CiudadOrigen);
        }
        if (isset($data->NombreOrigen)) {
            $getTrackingGuideResponse->setOriginName($data->NombreOrigen);
        }
        if (isset($data->TelefonoOrigen)) {
            $getTrackingGuideResponse->setOriginPhone($data->TelefonoOrigen);
        }
        if (isset($data->DireccionOrigen)) {
            $getTrackingGuideResponse->setOriginAddress($data->DireccionOrigen);
        }
        if (isset($data->CodPostalDestino)) {
            $getTrackingGuideResponse->setDestinationPostalCode($data->CodPostalDestino);
        }
        if (isset($data->CiudadDestino)) {
            $getTrackingGuideResponse->setDestinationCity($data->CiudadDestino);
        }
        if (isset($data->NombreDestino)) {
            $getTrackingGuideResponse->setDestinationName($data->NombreDestino);
        }
        if (isset($data->TelefonoDestino)) {
            $getTrackingGuideResponse->setDestinationPhone($data->TelefonoDestino);
        }
        if (isset($data->DireccionDestino)) {
            $getTrackingGuideResponse->setDestinationAddress($data->DireccionDestino);
        }
        if (isset($data->ImagenGuia)) {
            $getTrackingGuideResponse->setGuideImage($data->ImagenGuia);
        }
        if (isset($data->ListaSeguimientos)) {
            $items = [];
            foreach ($data->ListaSeguimientos as $item) {
                $items[] = GetTrackingResponse::createFromJsonResponse($item);
            }
            $getTrackingGuideResponse->setTrackingList($items);
        }
        return $getTrackingGuideResponse;
    }
}
