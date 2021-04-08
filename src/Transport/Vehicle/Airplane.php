<?php

namespace Cettervescre\Transport\Vehicle;

use Cettervescre\Transport\FlyingTransport;

class Airplane implements FlyingTransport
{
    protected $model;
    
    public function fly($origin, $destination, $passengers)
    {
        return "Airplane flying from {$origin} to ${destination} with ${passengers} passengers on board ...";
    }
}