<?php

require './bootstrap.php';

use Cettervescre\Transport\Vehicle\Airplane;
use Cettervescre\Transport\Vehicle\Helicopter;
use Cettervescre\Transport\Airport;
use Cettervescre\Transport\SmallAirport;
use Cettervescre\Animals\Animal;
use Cettervescre\Animals\Cat;
use Cettervescre\Animals\Dog;
use Cettervescre\Company\Company;
use Cettervescre\Company\GameDevCompany;
use Cettervescre\Company\OutsourcingCompany;
use Cettervescre\Food\Sausage;
use Cettervescre\Food\Hotdog;
use Cettervescre\Food\Salad;
use Cettervescre\SOLID\L\Cat as LCat;
use Cettervescre\SOLID\L\CerealMachine;
use Cettervescre\SOLID\L\FishMachine;
use Cettervescre\SOLID\L\GeneralCerealMachine;
use Cettervescre\SOLID\L\JoeyCat;
use Cettervescre\SOLID\O\Air;
use Cettervescre\SOLID\O\Ground;
use Cettervescre\SOLID\O\Order;
use Cettervescre\SOLID\S\Employee;
use Cettervescre\SOLID\S\TimeSheetReport;
use Cettervescre\Transport\Driver\Human;
use Cettervescre\Transport\Driver\Robot;
use Cettervescre\Transport\Engine\CombustionEngine;
use Cettervescre\Transport\Engine\ElectricEngine;
use Cettervescre\Transport\Engine\TeslaEngine;
use Cettervescre\Transport\Transport;
use Cettervescre\University\Professor;
use Cettervescre\University\Course;
use Cettervescre\University\Student;

dump((new Helicopter())->fly('Manila', 'Puerto Galera', '222'));
dump((new Airplane())->fly('Manila', 'Caticlan', '268'));

$naia = new Airport();
$newAirport = new SmallAirport();
$newAirport->accept(new Airplane());

$naia->accept(new Helicopter());
$naia->accept(new Airplane());

$bags = [new Dog(), new Cat()];

foreach ($bags as $animal)
    dump($animal->makeSound());

$course = new Course('Introduction to Computing ...', 3);
$mathematics = new Course('Mathematics and its relation to the natural world', 6);
$student = new Student();
$professor = new Professor();

$professor->setStudent($student);
$professor->teach($course);
$professor->teach($mathematics);

$cat = new Cat();

$cat->eating(new Sausage());
$cat->eating(new Hotdog());
$cat->eating(new Salad());

$gameDevCompany = new GameDevCompany();
$outsourcingCompany = new OutsourcingCompany();

dump($gameDevCompany->createSoftware());

$transport = new Transport();

$engine = new TeslaEngine();
$driver = new Robot();

$transport->setEngine($engine);
$transport->setDriver($driver);

dump($transport);

$employee = new Employee();
$employee->setName('Janszen Kiel Jose');
$dtr = new TimeSheetReport();

dump($dtr->print($employee));

$order = new Order();
$order2 = new Order();

$order->setShippingType(new Air());
$order2->setShippingType(new Ground());

$order->setTotal(85.4);
$order->setWeight(55);

$order2->setTotal(67);
$order2->setWeight(49);

dump($order, $order2);
dump($order->getShippingCost(), $order2->getShippingCost());

$cat = new LCat;
$machine = new GeneralCerealMachine;

dump($machine->feed($cat));
dump($cat->eatingMachine());




