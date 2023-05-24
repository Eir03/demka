<?php
    require_once '../scripts/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Music House</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include "../template/header.php"?>

    <div class="container text-center">
        <img src="../media/images/logo.png" alt="logo" style="width: 10%">
        <h5 class="m-5">На теплоходе музыка играет</h5>
    </div>

    <!-- Начало карусели -->
    <div class="container mt-1 text-center" style="width: 500px">
            <div id="carousel" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
                <div class="carousel-inner">
                <?php 
                    // Вывод последних 5 товаров из БД которые есть в наличии
                    $count = 0;
                    $product = mysqli_query($connect, "SELECT * FROM products WHERE `count` > 0 ORDER BY id LIMIT 5");
                    while ($row = mysqli_fetch_assoc($product)):
                        if($count == 0):?>
                            <div class="carousel-item active" data-bs-interval="1450">
                            <a href="../template/product.php?id=<?php echo $row['id']?>"><img class="img-carousel border border-dark" width="450" height="400" src="/media/images/<?php echo $row['image']?>.jpeg" class="d-block w-100 border border-dark " alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark"><?php echo $row['name'] ?></h5>
                                    <h6  class="text-dark"><?php echo $row['about'] ?></h6>
                                </div>
                            </div>
                        <?php endif;?>
                        <?if($count > 0):?>
                            <div class="carousel-item" data-bs-interval="1450">
                                <a href="../template/product.php?id=<?php echo $row['id']?>"><img class="img-carousel border border-dark" width="450" height="400" src="/media/images/<?php echo $row['image']?>.jpeg" class="d-block w-100 border border-dark" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark"><?php echo $row['name'] ?></h5>
                                    <h6 class="text-dark"><?php echo $row['about'] ?></h6>
                                </div>
                            </div>
                        <?php endif;?>
                    <?php $count++;  endwhile?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
                </button>
            </div>
    </div>
    <!-- Конец карусели -->

    <?php include "../template/footer.php"?>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>