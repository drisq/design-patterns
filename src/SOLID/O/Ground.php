<?php

namespace Cettervescre\SOLID\O;

use Cettervescre\SOLID\O\Order;

class Ground implements Shipping
{
    public function getCost(Order $order)
    {
        // Free ground delivery for big orders.
        if ($order->getTotal() > 100) {
            return 0;
        }
        // $1.5 per kilogram, but $10 minimum.
        return max(10, $order->getTotalWeight() * 1.5);
    }

    public function getDate(Order $order)
    {
        
    }
}