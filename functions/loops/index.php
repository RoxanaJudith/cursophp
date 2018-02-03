<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 03/02/2018
 * Time: 16:33
 */
//for ($i = 0; $i <= 10; $i++) {
//    echo $i . '<br>';
//}

//$i = 1;
//while($i <= 10){
//    echo $i . '<br>';
//    $i++;
//}

//$i = 1;
//do {
//    echo $i . '<br>';
//    $i++;
//} while ($i <= 10);

$names = ['Alex', 'Elisa', 'Jose'];
foreach ($names as $key => $name){
    echo $key . '-' .$name . '<br>';
}