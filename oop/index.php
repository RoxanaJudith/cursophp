<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 03/02/2018
 * Time: 17:53
 */

class Car
{
    //public $owner;
    private  $owner='Mike';

    public function __construct($ownerName)
    {
        $this->owner=$ownerName;
        echo 'constructor<br>';
    }

    public function __destruct()
    {
        echo '<br>destruct';
    }

    public function move()
    {
        echo 'moving<br>';
    }

    public function getOwner(){
        return $this ->owner;
    }

    public function setOwner($owner){
        $this->owner=$owner;
    }
}

echo 'Class Car<br>';

$car = new Car('Jose');
$car2 = new Car('Max');

$car->move();

//$car->owner = 'Alex';
//echo 'Owner: ' . $car->owner;
echo 'Owner car: ' . $car->getOwner().'<br>';
echo 'Owner car2: ' . $car2->getOwner();