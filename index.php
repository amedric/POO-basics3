<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


/*------------------------------------------------------*/

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


/*-------------------------------------------------------*/

$truck = new Truck(500, 'blue', 3, 'fuel');

var_dump($truck);

echo $truck->forward() . "<br>";
echo $truck->brake() . "<br>";
echo $truck->currentLoading(400);

$truck2 = new Truck(1000, 'black', 3, 'fuel');
$truck3 = new Truck(250, 'white', 3, 'fuel');
