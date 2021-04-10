<?php

namespace Cettervescre\Animals;

use Cettervescre\Food\Food;

class Cat extends Animal
{
    private $energy;

    public function makeSound()
    {
        return 'Meow...';
    }

    public function run($destination)
    {
        return "Running in ${destination}. HAHAHAHA";
    }

    public function eating(Food $food)
    {
        $this->energy += $food->getNutrition();
    }
}