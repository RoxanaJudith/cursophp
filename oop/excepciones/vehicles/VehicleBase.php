<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:51
 */

namespace Vehicles4;

abstract class VehicleBase
{
    //public $owner;
    protected $owner;

    public function __construct($ownerName)
    {
        $this->owner = $ownerName;
        echo 'constructor<br>';
    }


    public function move()
    {
        //abstract
        echo $this->startEngine();
        //
        echo '<br>';
        echo 'moving<br>';
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    //abstract
    public abstract function startEngine();
    //
}
