<?php

namespace Cettervescre\SOLID\O;

use Cettervescre\SOLID\O\Shipping;

class Order
{
    private $lineItems;

    private Shipping $shipping;

    private $total;

    private $weight;

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getTotalWeight()
    {
        return $this->weight;
    }

    public function setShippingType(Shipping $shipping)
    {
        $this->shipping = $shipping;
    }

    public function getShippingCost()
    {
        return $this->shipping->getCost($this);
    }

    public function getShippingDate()
    {
        
    }
}