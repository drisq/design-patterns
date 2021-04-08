<?php

namespace Cettervescre;

class Animal
{
    public $name;
    public $sex;
    public $age;
    public $weight;
    public $color;

    public function breathe()
    {
        return 'Breathing...';
    }

    public function eat($food)
    {
        return "Eating {$food}...";
    }

    public function run($destination)
    {
        return "Running in ${destination}...";
    }

    public function sleep($hours)
    {
        return "Sleeping for {$hours} hours...";
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}