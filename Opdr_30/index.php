<?php

require_once 'vendor/autoload.php';

use Opdr_31\Car;
use Opdr_31\Motorcycle;
use Opdr_31\Truck;
use Opdr_31\Vehicle;

$car1 = new Car('Toyota', 'Corolla', 2021, 'red', 5);
$truck1 = new Truck('Mercedes', 'Actros', 2021, 'blue', 20000);
$motorcycle1 = new Motorcycle('Yamaha', 'YZF-R1', 2021, 'black', false);

var_dump($car1);
var_dump($truck1);
var_dump($motorcycle1);
