<?php

namespace Cettervescre\Transport\Engine;

use Cettervescre\Transport\Engine\Engine;

class CombustionEngine implements Engine
{
    public function move()
    {
        return "Moving using combustion engine ...";
    }
}