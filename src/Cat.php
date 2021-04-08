<?php

namespace Cettervescre;

class Cat extends Animal
{
    public function meow()
    {
        return 'Meow...';
    }

    public function run($destination)
    {
        return "Running in ${destination}. HAHAHAHA";
    }
}