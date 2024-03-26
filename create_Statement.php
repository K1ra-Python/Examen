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
        <div class="header"></div>
        <div class="statement_status">
            <h1>hello,<?echo '<span>'.$_SESSION['user_login'].'</span>'?></h1>
            <div class="all_statement">
            </div>
            <div class="make_statement">
                <form action="vendor/statement_script.php" method="post">
                    <input type="text" name="number_car" placeholder="Введите номер машины" />
                    <label for='number_car'>Номер машины</label>
                    <textarea name='discrp' maxlength="600" minlength="10"></textarea>
                    <label for='discrp'>Опишите проблему</label>
                    <button type="submit">Отправить жалобу</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>