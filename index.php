<?php

session_start();
if(!isset($_SESSION['user_login'])){
    header("Location: auto.php");
}
$user_login = $_SESSION['user_login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <div class="header"><a href='vendor/logout.php'>Выйти</a></div>
        <div class="statement_status">
            <h1>hello,<?echo '<span>'.$_SESSION['user_login'].'</span>'?></h1>
            <div class="all_statement">
                <?php
                require_once 'vendor/index_script.php';
                ?>
            </div>
            <div class="to_make_statement">
                <a href="create_Statement.php">Написать жалобу</a>
            </div>
        </div>
    </div>
</body>
</html>