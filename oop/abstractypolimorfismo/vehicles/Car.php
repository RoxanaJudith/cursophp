<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:50
 */

namespace Vehicles2;

require_once 'VehicleBase.php';

class Car extends VehicleBase{
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
}