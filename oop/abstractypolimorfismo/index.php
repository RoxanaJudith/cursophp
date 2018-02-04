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
use Vehicles2\{
    Car, Truck
};  //Uso a partir de PHP 7


echo 'Class Car<br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br>';

echo '<br>Class Truck<br>';
$truck = new Truck('Maximo', 'Pickup');
$truck->move();
echo 'Owner truck: ' . $truck->getOwner() . '<br>';

//propiedades estaticas
echo '<br>Class Truck 1<br>';
$truck1 = new Truck('Maximo', 'Pickup');
$truck1->move();

echo '<br>Class Truck2<br>';
$truck2 = new Truck('Maximo', 'Pickup');
$truck2->move();

//echo '<br>Total Trucks: ' . Truck::$count . '<br>';   //propiedad publica
echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';   //propiedad privada, acceso a metodo publico

//abstracción
