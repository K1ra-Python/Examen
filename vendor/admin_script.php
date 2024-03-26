<?php
require_once "connect.php";
session_start();

// Удостоверяемся, что пользователь аутентифицирован как администратор
if (!isset($_SESSION['is_admin'])) {
    header('Location: ../auto.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем ID заявления и действие из формы
    $complaint_id = $_POST['complaint_id'];
    $action = $_POST['action'];

    // Определяем статус на основе выбора администратора
    $status = ($action === 'Принять') ? 'принятые' : 'отклонённые';

    // Подготавливаем SQL запрос для обновления статуса заявления
    $sql = $pdo->prepare("UPDATE Complaints SET status = ? WHERE complaint_id = ?");
    $sql->execute([$status, $complaint_id]);

    // Перенаправляем обратно на админскую страницу
    header('Location: ../admin.php');
    exit();
}
