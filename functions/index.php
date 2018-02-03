<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 03/02/2018
 * Time: 15:48
 */

//function hello($name){
//    echo 'Hello ' . $name;
//    echo '<br>';
//}
//
//hello('Rox');
//hello('Roxana');

$x = 100;

function sum($a, $b){
    $x = $a + $b;
    return $x;
}

$c = sum(5,6);
var_dump($c);
var_dump($x);


$c = sum(10,23);
var_dump($c);