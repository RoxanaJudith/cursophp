<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:50
 */

namespace Vehicles3;

require_once 'VehicleBase.php';

class Car extends VehicleBase implements \Serializable {
    public function move()
    {
        //abstract
        echo $this->startEngine();
        //
        echo '<br>';
        echo 'Car2: moving<br>';
    }

    //abstract
    public function startEngine()
    {
        return 'Car: start engine';
    }

    //interfaces
    public function serialize()
    {
        echo 'Serialize<br>';
        return $this->owner;
    }

    public function unserialize($serialized)
    {
        echo 'Unserialize<br>';
        $this->owner=$serialized;
    }
    //
}