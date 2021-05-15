<?php

namespace Cettervescre\SOLID\L;

use Cettervescre\Animals\Animal;

class GeneralCerealMachine extends CerealMachine
{
    public function feed(Animal $animal)
    {
        return 'Feeding cereal to all animals ...';
    }
}