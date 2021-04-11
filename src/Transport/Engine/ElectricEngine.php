<?php

namespace Cettervescre\Transport\Engine;

use Cettervescre\Transport\Engine\Engine;

class ElectricEngine implements Engine
{
    public function move()
    {
        return "Moving using electric engine ...";
    }
}