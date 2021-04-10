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

dd($gameDevCompany->createSoftware());