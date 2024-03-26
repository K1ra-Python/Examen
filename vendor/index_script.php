<?php
require_once "connect.php";

// Предположим, что $user_login уже установлен и содержит логин текущего пользователя.
// Например, $user_login = $_SESSION['user_login'];

$sql = $pdo->prepare('SELECT * FROM Complaints WHERE user_login = ?');
$sql->execute([$user_login]);
$result = $sql->fetchAll(PDO::FETCH_OBJ);

foreach ($result as $res) {
    echo '<p>' . htmlspecialchars($res->complaint_text) . '</p>';
    echo '<p>' . htmlspecialchars($res->status) . '</p>';
}
