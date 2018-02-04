<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:03
 */

class Vehicle
{
    //public $owner;
    protected $owner;

    public function __construct($ownerName)
    {
        $this->owner=$ownerName;
        echo 'constructor<br>';
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

class Car2 extends Vehicle{
    public function move()
    {
        echo 'Car2: moving<br>';
    }
}

class Truck extends Vehicle{
    private $type;
    public function __construct($ownerName, $type)
    {
        $this ->type=$type;
        //parent::__construct($ownerName);
        $this ->owner =$ownerName;
    }

    public function move()
    {
        echo 'Truck ' . $this->type.': moving<br>';
    }
}
echo 'Class Car2<br>';
$car = new Car2('Alex');
$car -> move();
echo 'Owner car: ' . $car->getOwner().'<br>';

echo'<br>Class Truck<br>';
$truck = new Truck('Max','Pickup');
$truck ->move();
echo 'Owner truck: ' . $truck->getOwner();