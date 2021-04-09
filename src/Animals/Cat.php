<?php

namespace Cettervescre\Animals;

class Cat extends Animal
{
    public function makeSound()
    {
        return 'Meow...';
    }

    public function run($destination)
    {
        return "Running in ${destination}. HAHAHAHA";
    }
}