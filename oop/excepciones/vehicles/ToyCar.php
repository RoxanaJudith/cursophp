<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 16:06
 */
namespace Vehicles4;

require_once 'VehicleBase.php';

class ToyCar extends VehicleBase {
    public function move()
    {
        //abstract
        echo $this->startEngine();
        //
        echo '<br>';
        echo 'Car2: moving<br>';
    }

    public function startEngine()
    {
        throw new \Exception('Engine not found');
    }
}