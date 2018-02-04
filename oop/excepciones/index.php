<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:59
 */

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

//use Vehicles\Car;
//use Vehicles\Truck;
use Vehicles4\{Car, Truck, ToyCar};  //Uso a partir de PHP 7

try{
    echo 'Class ToyCar<br>';
    $toyCar = new ToyCar('Alex');
    //$toyCar->move();
}catch (Exception $e){
    echo 'This is a toy';
}finally{
    echo '<br>finally<br>';
}


echo '<br><br>Class Car<br>';
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

//interfaces
$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner().'<br>';
//
