<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Music House</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include "../template/header.php";
    require_once '../scripts/connect.php';?>

    <div class="mt-5 text-center" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Мои заказы</p>
          </div>
        </div>
    </div>
    <!-- Начало вывода списка заказов -->
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Количество</th>
                    <th scope="col">Названия</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Комментарий</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
    
                if(isset($_SESSION['user'])):
                    $id = $_SESSION['user']['id'];
                    $product = mysqli_query($connect, "SELECT * FROM orders WHERE `id_user` = $id");
                    while ($row = mysqli_fetch_assoc($product)):
                        $order = $row;
                        $array = [];
                        $products = explode(";", $row['products_info']);
                        foreach ($products as $key => $id) {
                            $product_name = mysqli_query($connect, "SELECT * FROM products WHERE id = '$id'");
                            while ($row = mysqli_fetch_assoc($product_name)){
                                array_push($array,$row['name']);
                            }
                        }?>
                        <tr>
                            <th scope="row"></th>
                            <td><?php echo count($products)?></td>
                            <td><?php echo implode(", ",$array)?></td>
                            <td><?php echo $order['status']?></td>
                            <td><?php echo $order['comment']?></td>
                            <td><a class="btn btn-danger" href="../scripts/del-to-order.php?id=<?php echo $order['id']?>">Удалить заказ</a></td>
                        </tr>
                    <?php endwhile; endif; ?>
            </tbody>
        </table>
        <!-- Конец вывода списка заказов -->
    </div>

    <?php include "../template/footer.php"?>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>