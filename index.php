<?php

require './bootstrap.php';

use Cettervescre\Transport\Vehicle\Airplane;
use Cettervescre\Transport\Vehicle\Helicopter;
use Cettervescre\Transport\Airport;

dump((new Helicopter())->fly('Manila', 'Puerto Galera', '222'));
dump((new Airplane())->fly('Manila', 'Caticlan', '268'));

$naia = new Airport();

$naia->accept(new Helicopter());
$naia->accept(new Airplane());

dump($naia);