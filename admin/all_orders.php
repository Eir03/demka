<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Music House</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
    include "../template/header.php";
    session_start();
    require_once '../scripts/connect.php';?>

    <div class="mt-5 text-center" style=" margin-left: 3rem">
            <div class="row">
              <div class="col">
                <p class="fw-bold" style="font-size: 50px;">Все заказы</p>
              </div>
            </div>
        </div>
        <!-- Начало вывода списка всех заказов -->
        <table class="table mt-5 container">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Таймстамп</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Статус</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $product = mysqli_query($connect, "SELECT * FROM orders");
                while ($row = mysqli_fetch_assoc($product)):
                    $comment = $row['comment'];
                    $status = $row['status'];
                    $id_order = $row['id'];
                    $id_user = $row['id_user'];
                    $timestamp = $row['date'];
                    $products = explode(";", $row['products_info']);
    
                    $user_name = mysqli_query($connect, "SELECT * FROM user WHERE id = '$id_user'");
                    while ($row1 = mysqli_fetch_assoc($user_name)){
                        $FIO = "". $row1['surname'] ." ". $row1['name'] ." ". $row1['patronymic'] ."";
                    }?>
                    <tr>
                        <th scope="row">
                            <td><?php echo $timestamp?></td>
                            <td><?php echo $FIO?></td>
                            <td><?php echo count($products)?></td>
                            <td><?php echo $status?></td>
                            <td><?php echo $comment?></td>
                            <td>
                                <a class="btn btn-danger" href="../scripts/del-to-order.php?id=<?php echo $id_order?>">Удалить заказ</a>
                            </td>
                        </th>
                    </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        <!-- Конец вывода списка заказов -->
    <?php include "../template/footer.php"?>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>