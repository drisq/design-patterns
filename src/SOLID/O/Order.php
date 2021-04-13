<?php

namespace Cettervescre\SOLID\O;

class Order
{
    private $lineItems;

    private $shipping;

    public function getTotal()
    {
        return 78;
    }

    public function getTotalWeight()
    {
        return 19;
    }

    public function setShippingType($st)
    {
        $this->shipping = $st;
    }

    public function getShippingCost()
    {
        if ($this->shipping == 'ground') {
            // Free ground delivery for big orders.
            if ($this->getTotal() > 100) {
                return 0;
            }
            // $1.5 per kilogram, but $10 minimum.
            return max(10, $this->getTotalWeight() * 1.5);
        }

        if ($this->shipping == 'air') {
            // $3 per kilogram, but $20 minimum.
            return max(20, $this->getTotalWeight() * 3);
        }


    }

    public function getShippingDate()
    {
        
    }
}