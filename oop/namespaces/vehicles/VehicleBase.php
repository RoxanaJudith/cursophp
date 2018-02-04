<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:51
 */

namespace Vehicles;

class VehicleBase
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