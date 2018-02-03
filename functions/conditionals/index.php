<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 03/02/2018
 * Time: 16:17
 */

//$color = 'red';
//if($color == 'black'){
//    echo 'Color is Black';
//}elseif($color == 'white'){
//    echo 'Color is White';
//}else{
//    echo 'Color ...';
//
//}

$color = 'green';

switch($color){
    case 'blue':
        echo 'Color is blue';
        break;
    case 'red':
        echo 'Color is red';
        break;
    default:
        echo 'Other';
        break;
}