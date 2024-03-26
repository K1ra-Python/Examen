<?php
session_start();
$user_login = $_SESSION['user_login']; 
require_once 'connect.php';

$number_car = $_POST['number_car'];
$discrp = $_POST['discrp'];

$sql = $pdo->prepare('INSERT INTO `Complaints`(`user_login`, `complaint_text`, `status`) VALUES(?,?,?)');
$sql->execute([$user_login, $discrp, 'новые']);
if($sql){
    header('Location: ../index.php');
    exit();
}else{
    header('Location: ../create_Statement.php');
    exit();
}


