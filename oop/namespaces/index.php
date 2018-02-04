<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:59
 */

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

//use Vehicles\Car;
//use Vehicles\Truck;
use Vehicles\{Car,Truck};  //Uso a partir de PHP 7


echo 'Class Car<br>';
$car = new Car('Alex');
$car -> move();
echo 'Owner car: ' . $car->getOwner().'<br>';

echo'<br>Class Truck<br>';
$truck = new Truck('Maximo','Pickup');
$truck ->move();
echo 'Owner truck: ' . $truck->getOwner();