<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 04/02/2018
 * Time: 9:52
 */

namespace Vehicles4;

require_once 'VehicleBase.php';

class Truck extends VehicleBase{
    //propiedades estaticas
    //public static $count = 0;
    private static $count = 0;
    //
    private $type;
    public function __construct($ownerName, $type)
    {
        $this ->type=$type;
        //parent::__construct($ownerName);
        $this ->owner =$ownerName;
        //propiedades estaticas
        self:: $count++;
        //
    }

//    public function move()
//    {
//        echo 'Truck ' . $this->type.': moving<br>';
//    }

    //propiedades estaticas, propiedad private
    public static function getTotal(){
        return self::$count;
    }
    //
    //abstracción
    public function startEngine()
    {
        return 'Truck: start engine';
   }

}