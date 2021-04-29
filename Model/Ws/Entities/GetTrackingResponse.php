<?php


namespace Esatic\Interservice\Model\Ws\Entities;


class GetTrackingResponse
{

    private $number;
    private $date;
    private $status;
    private $description;

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return GetTrackingResponse
     */
    public function setNumber($number): GetTrackingResponse
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return GetTrackingResponse
     */
    public function setDate($date): GetTrackingResponse
    {
        $this->date = $date;
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
     * @return GetTrackingResponse
     */
    public function setStatus($status): GetTrackingResponse
    {
        $this->status = $status;
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
     * @return GetTrackingResponse
     */
    public function setDescription($description): GetTrackingResponse
    {
        $this->description = $description;
        return $this;
    }

    public static function createFromJsonResponse($data): GetTrackingResponse
    {
        $getTrackingResponse = new GetTrackingResponse();
        if (isset($data->Estado)) {
            $getTrackingResponse->setStatus($data->Estado);
        }
        if (isset($data->Num)) {
            $getTrackingResponse->setNumber($data->Num);
        }
        if (isset($data->Descripcion)) {
            $getTrackingResponse->setDescription($data->Descripcion);
        }
        if (isset($data->Fecha)) {
            $getTrackingResponse->setDate($data->Fecha);
        }
        return $getTrackingResponse;
    }
}
