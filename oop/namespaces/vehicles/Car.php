<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:50
 */

namespace Vehicles;

require_once 'VehicleBase.php';

class Car extends VehicleBase{
    public function move()
    {
        echo 'Car2: moving<br>';
    }
}