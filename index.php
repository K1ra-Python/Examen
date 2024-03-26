<?php

session_start();
if(!isset($_SESSION['user_login'])){
    header("Location: auto.php");
}
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
        <div class="header"></div>
        <div class="statement_status">
            <h1>hello</h1>
        </div>
    </div>
</body>
</html>