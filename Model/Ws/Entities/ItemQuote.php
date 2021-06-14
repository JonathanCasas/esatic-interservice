<?php

namespace Esatic\Interservice\Model\Ws\Entities;

class ItemQuote implements \JsonSerializable
{
    private $origin;
    private $destination;
    private $weight;
    private $packing;
    private $value;
    private $qty;


    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     * @return ItemQuote
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     * @return ItemQuote
     */
    public function setDestination($destination): ItemQuote
    {
        $this->destination = $destination;
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
     * @return ItemQuote
     */
    public function setWeight($weight): ItemQuote
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
     * @return ItemQuote
     */
    public function setPacking($packing): ItemQuote
    {
        $this->packing = $packing;
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
     * @return ItemQuote
     */
    public function setValue($value): ItemQuote
    {
        $this->value = $value;
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
     * @return ItemQuote
     */
    public function setQty($qty): ItemQuote
    {
        $this->qty = $qty;
        return $this;
    }


    public function jsonSerialize(): array
    {
        return [
            'CodCiudadOrigen' => $this->origin,
            'CodCiudadDestino' => $this->destination,
            'Peso' => $this->weight,
            'Empaque' => $this->packing,
            'ValorDeclarado' => $this->value,
            'Cantidad' => $this->qty
        ];
    }
}
