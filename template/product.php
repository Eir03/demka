<?php
    require_once('../scripts/connect.php');
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
        include 'header.php';
    ?>
    <!-- Вывод информации о товаре -->
    <?php 
        $id = $_GET['id'];
        $product = mysqli_query($connect, "SELECT * FROM products WHERE id = '$id'");
        while ($row = mysqli_fetch_assoc($product)):?>
        <div class="container mt-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <img class="border border-dark m-2" width="400" height="400" alt="..." src="/media/images/<?php echo $row['image']?>.jpeg">
                </div>
                <div class="col">
                    <p class="text-start"  style="font-size: 30px;"><b><?php echo $row['name']?></b></p>
                    <p class="text-start" style="font-size: 20px;"><?php echo $row['about']?></p>
                    <p class="text-start" style="font-size: 20px;"><b>Страна:</b> <?php echo $row['country']?></p>
                    <p class="text-start" style="font-size: 20px;"><b>Цена:</b> <?php echo $row['price']?> руб.</p>
                    <p class="text-start" style="font-size: 20px;"><b>Категория:</b> <?php echo $row['category']?></p>
                    <p class="text-start" style="font-size: 20px;"><b>Модель:</b> <?php echo $row['model']?></p>
                </div>
            </div>   
        </div>
        <?php endwhile;?>
    
    <?php 
        include 'footer.php';
    ?>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>