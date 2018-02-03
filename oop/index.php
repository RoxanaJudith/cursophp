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

$car = new Car();
$car2 = new Car();

$car->move();
$car->setOwner('Alex');

$car2->setOwner('Max');

//$car->owner = 'Alex';
//echo 'Owner: ' . $car->owner;
echo 'Owner car: ' . $car->getOwner().'<br>';
echo 'Owner car2: ' . $car->getOwner();