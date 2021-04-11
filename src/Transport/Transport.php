<?php

namespace Cettervescre\Transport;

use Cettervescre\Transport\Engine\Engine;
use Cettervescre\Transport\Driver\Driver;

class Transport
{
    private $engine;
    private $driver;

    public function deliver($destination, $cargo)
    {
        return "Delivering ${cargo} to ${destination}...";
    }

    public function setEngine(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getDriver()
    {
        return $this->driver;
    }
}