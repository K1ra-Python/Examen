<?php
session_start();
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
    <?php
    session_start();
    require_once "vendor/connect.php"; // Подразумевает, что connect.php содержит код для создания объекта $pdo
    
    // Подготавливаем и выполняем запрос к базе данных для получения заявлений
    $sql = $pdo->prepare("SELECT * FROM Complaints");
    $sql->execute();
    $complaints = $sql->fetchAll(PDO::FETCH_OBJ); // Получаем все заявления как массив объектов
    ?>
    <!-- Выводим все заявления -->
    <?php foreach ($complaints as $complaint): ?>
        <div class="complaint">
            <p>
                <?= htmlspecialchars($complaint->complaint_text) ?>
            </p>
            <form action="vendor/admin_script.php" method="post">
                <input type="hidden" name="complaint_id" value="<?= $complaint->complaint_id ?>">
                <input type="submit" name="action" value="Принять">
                <input type="submit" name="action" value="Отклонить">
            </form>
        </div>
    <?php endforeach; ?>

</body>

</html>