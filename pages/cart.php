<?php
// Подключение к БД
    require_once '../scripts/connect.php';
?>
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
        include '../template/header.php';
    ?>
    <div class="container">
        <div class="mt-5 text-start" style=" margin-left: 3rem">
            <div class="row">
              <div class="col">
                <p class="fw-bold" style="font-size: 32px;">Корзина</p>
              </div>
            </div>
        </div>
        <!-- Начало корзины -->
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Цена</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(isset($_SESSION['basket'])):
                    $cost = 0;
                    // Вывод корзины
                    foreach($_SESSION['basket'] as $i):
                        $id = $i['id'];
                        $product = mysqli_query($connect, "SELECT * FROM products WHERE `id` = $id");
                        while ($row = mysqli_fetch_assoc($product)):?>
                            <tr>
                                <th scope="row"></th>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['about']?></td>
                                <td><?php echo $row['price']; $cost = $cost + (int) $row['price']?> руб.</td>
                                <td><a class="btn btn-danger" href="../scripts/del-to-cart.php?id=<?php echo $row['id']?>">Удалить товар</a></td>
                            </tr>
                    <?php $_SESSION['cost'] = $cost; endwhile; endforeach; endif;?>
                
                <thead>
                    <tr class="fw-bold" style="font-size: 20px;">
                        <th scope="row"></th>
                        <td colspan="2"></td>
                        <td>Итоговая цена: <?php echo $cost; ?> руб.</td>
                        <td></td>
                    </tr>
                 </thead>
            </tbody>
        </table>
        <!-- Конец корзины -->
        <div class="container text-end">
            <a class="btn btn-dark" href="confirm_order.php">Оформить заказ</a>
        </div>
    </div>
    <?php 
        include '../template/footer.php';
    ?>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>