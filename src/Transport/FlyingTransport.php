<?php

namespace Cettervescre\Transport;

interface FlyingTransport
{
    public function fly($origin, $destination, $passengers);
}