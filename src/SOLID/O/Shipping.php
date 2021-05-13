<?php

namespace Cettervescre\SOLID\O;

interface Shipping
{
    public function getCost(Order $order);
    public function getDate(Order $order);
}
