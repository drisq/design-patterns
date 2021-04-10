<?php

namespace Cettervescre\Food;

use Cettervescre\Food\Food;

class Sausage implements Food
{
    public function getNutrition()
    {
        return 10;
    }
}