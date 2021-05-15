<?php

namespace Cettervescre\SOLID\L;

use Cettervescre\Animals\Animal;

class Cat extends Animal
{
    public function eatingMachine()
    {
        return 'I am just a normal cat!!!';
    }

    public function makeSound()
    {
        return 'meow ...';
    }
}