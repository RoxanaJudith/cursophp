<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 03/02/2018
 * Time: 17:24
 */

$value = $_COOKIE['count'];
$value ++;

setcookie('count', $value);
echo '<p>Adding 1</p>';