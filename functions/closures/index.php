<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 03/02/2018
 * Time: 17:32
 */

//$var2 = 1;
//
//$var = function () use($var2){
//    echo 'This is a closure<br>';
//    echo 'Value: ' . $var2;
//};
//
//$var();

/*$x=3;
$numbers = [1, 2, 3, 4,5];

$result = array_map(function ($n) use($x){
    return $n * $x;
}, $numbers);

var_dump($result);*/

$x=3;
$numbers = [1, 2, 3, 4,5];
$closure =  function ($n) use($x){
    return $n * $x;
};

$x=4;
$result = array_map($closure, $numbers);

var_dump($result);

