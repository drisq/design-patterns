<?php

require './bootstrap.php';

use Cettervescre\Transport\Vehicle\Airplane;
use Cettervescre\Transport\Vehicle\Helicopter;
use Cettervescre\Transport\Airport;
use Cettervescre\Transport\SmallAirport;

dump((new Helicopter())->fly('Manila', 'Puerto Galera', '222'));
dump((new Airplane())->fly('Manila', 'Caticlan', '268'));

$naia = new Airport();
$newAirport = new SmallAirport();
$newAirport->accept(new Airplane());

$naia->accept(new Helicopter());
$naia->accept(new Airplane());

dump($newAirport->vehicles());