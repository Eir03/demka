<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Music House</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include 'header.php';
    require_once '../scripts/connect.php';?>
    
    <?php
    // Вывод данных о пользователе
        session_start();    
        $login = $_SESSION['user']['login'];
        $query = "SELECT * FROM `user` WHERE `login` = '$login'";
        $result = $connect->query($query);
        $row = $result->fetch_assoc();?>
        <div class="card container">
            <div class="card-header">
                <h3>Профиль</h3>
            </div>
            <div class="card-body">
                <p class="card-text">Фамилия: <?php echo $row['surname'] ?></p>
                <p class="card-text">Имя: <?php echo $row['name'] ?></p>
                <p class="card-text">Отчество: <?php echo $row['patronymic'] ?></p>
                <p class="card-text">Логин: <?php echo $row['login'] ?></p>
                <p class="card-text">Почта: <?php echo $row['email'] ?></p>
            </div>
        </div>
    </div>

    <?php include "footer.php"?>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>