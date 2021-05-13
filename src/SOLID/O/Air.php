<?php

namespace Cettervescre\SOLID\O;

use Cettervescre\SOLID\O\Order;

class Air implements Shipping
{
    public function getCost(Order $order)
    {
        // $3 per kilogram, but $20 minimum.
        return max(20, $order->getTotalWeight() * 3);
    }

    public function getDate(Order $order)
    {
        
    }
}