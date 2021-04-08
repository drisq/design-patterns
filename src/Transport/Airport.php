<?php

namespace Cettervescre\Transport;

use Cettervescre\Transport\FlyingTransport;

class Airport
{
    protected $vehicles = array();

    public function accept(FlyingTransport $vehicle)
    {
        $this->vehicles[] = $vehicle;
    }

    public function vehicles()
    {
        return $this->vehicles;
    }
}