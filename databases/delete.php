<?php
/**
 * Created by PhpStorm.
 * User: roxana
 * Date: 25/02/2018
 * Time: 18:37
 */

include_once  'config.php';
$id = $_GET['id'];

$sql = 'DELETE FROM users WHERE id=:id';
$query = $pdo->prepare($sql);
$query->execute([
   'id'=>$id
]);

header("Location: list.php");