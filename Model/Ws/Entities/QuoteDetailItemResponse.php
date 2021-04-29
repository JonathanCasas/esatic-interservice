<?php

namespace Esatic\Interservice\Model\Ws\Entities;

class QuoteDetailItemResponse implements \JsonSerializable
{
    private $num;
    private $codProcess;
    private $cityCodeOrigin;
    private $cityCodeDestination;
    private $weight;
    private $packing;
    private $declaredValue;
    private $qty;
    private $shippingValue;
    private $inconsistencies;
    private $valid;
    private $message;

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     * @return QuoteDetailItemResponse
     */
    public function setNum($num): QuoteDetailItemResponse
    {
        $this->num = $num;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodProcess()
    {
        return $this->codProcess;
    }

    /**
     * @param mixed $codProcess
     * @return QuoteDetailItemResponse
     */
    public function setCodProcess($codProcess): QuoteDetailItemResponse
    {
        $this->codProcess = $codProcess;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCityCodeOrigin()
    {
        return $this->cityCodeOrigin;
    }

    /**
     * @param mixed $cityCodeOrigin
     * @return QuoteDetailItemResponse
     */
    public function setCityCodeOrigin($cityCodeOrigin): QuoteDetailItemResponse
    {
        $this->cityCodeOrigin = $cityCodeOrigin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCityCodeDestination()
    {
        return $this->cityCodeDestination;
    }

    /**
     * @param mixed $cityCodeDestination
     * @return QuoteDetailItemResponse
     */
    public function setCityCodeDestination($cityCodeDestination): QuoteDetailItemResponse
    {
        $this->cityCodeDestination = $cityCodeDestination;
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
     * @return QuoteDetailItemResponse
     */
    public function setWeight($weight): QuoteDetailItemResponse
    {
        $this->weight = $weight;
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
     * @return QuoteDetailItemResponse
     */
    public function setPacking($packing): QuoteDetailItemResponse
    {
        $this->packing = $packing;
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
     * @return QuoteDetailItemResponse
     */
    public function setDeclaredValue($declaredValue): QuoteDetailItemResponse
    {
        $this->declaredValue = $declaredValue;
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
     * @return QuoteDetailItemResponse
     */
    public function setQty($qty): QuoteDetailItemResponse
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingValue()
    {
        return $this->shippingValue;
    }

    /**
     * @param mixed $shippingValue
     * @return QuoteDetailItemResponse
     */
    public function setShippingValue($shippingValue): QuoteDetailItemResponse
    {
        $this->shippingValue = $shippingValue;
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
     * @return QuoteDetailItemResponse
     */
    public function setInconsistencies($inconsistencies): QuoteDetailItemResponse
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
     * @return QuoteDetailItemResponse
     */
    public function setValid($valid): QuoteDetailItemResponse
    {
        $this->valid = $valid;
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
     * @return QuoteDetailItemResponse
     */
    public function setMessage($message): QuoteDetailItemResponse
    {
        $this->message = $message;
        return $this;
    }

    public static function createFromJsonResponse($data): QuoteDetailItemResponse
    {
        $quoteDetail = new QuoteDetailItemResponse();
        if (isset($data->Num)) {
            $quoteDetail->setNum($data->Num);
        }
        if (isset($data->CodProceso)) {
            $quoteDetail->setCodProcess($data->CodProceso);
        }
        if (isset($data->CodCiudadOrigen)) {
            $quoteDetail->setCityCodeOrigin($data->CodCiudadOrigen);
        }
        if (isset($data->CodCiudadDestino)) {
            $quoteDetail->setCityCodeDestination($data->CodCiudadDestino);
        }
        if (isset($data->Peso)) {
            $quoteDetail->setWeight($data->Peso);
        }
        if (isset($data->Empaque)) {
            $quoteDetail->setPacking($data->Empaque);
        }
        if (isset($data->ValorDeclarado)) {
            $quoteDetail->setDeclaredValue($data->ValorDeclarado);
        }
        if (isset($data->Cantidad)) {
            $quoteDetail->setQty($data->Cantidad);
        }
        if (isset($data->ValorEnvio)) {
            $quoteDetail->setShippingValue($data->ValorEnvio);
        }
        if (isset($data->Inconsistencias)) {
            $quoteDetail->setInconsistencies($data->Inconsistencias);
        }
        if (isset($data->Valid)) {
            $quoteDetail->setValid($data->Valid);
        }
        if (isset($data->Mensaje)) {
            $quoteDetail->setMessage($data->Mensaje);
        }
        return $quoteDetail;
    }

    public function jsonSerialize(): array
    {
        return [
            'num' => $this->num,
            'codProcess' => $this->codProcess,
            'cityCodeOrigin' => $this->cityCodeOrigin,
            'cityCodeDestination' => $this->cityCodeDestination,
            'weight' => $this->weight,
            'packing' => $this->packing,
            'declaredValue' => $this->declaredValue,
            'qty' => $this->qty,
            'shippingValue' => $this->shippingValue,
            'inconsistencies' => $this->inconsistencies,
            'valid' => $this->valid,
            'message' => $this->message,
        ];
    }
}
