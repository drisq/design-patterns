<?php

namespace Cettervescre\Transport\Vehicle;

use Cettervescre\Transport\FlyingTransport;

class Helicopter implements FlyingTransport
{
    protected $model;

    public function fly($origin, $destination, $passengers)
    {
        return "Helicoper flying from {$origin} to ${destination} with ${passengers} passengers on board ...";
    }
}