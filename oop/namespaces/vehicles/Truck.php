<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:52
 */

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase{
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