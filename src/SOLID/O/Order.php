<?php

namespace Cettervescre\SOLID\O;

use Cettervescre\SOLID\O\Shipping;

class Order
{
    private $lineItems;

    private Shipping $shipping;

    public function getTotal()
    {
        return 78;
    }

    public function getTotalWeight()
    {
        return 19;
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