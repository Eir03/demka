<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Music House</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include "template/header.php";
    require_once 'scripts/connect.php';?>

    <?php
    // Алгоритм сортировки
        $query = mysqli_query($connect,"SELECT * FROM `products` WHERE `count` > 0");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'scripts/connect.php';
            if ($_POST["sortBy"] == "price1") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 ORDER BY `price` ASC");

           
            } elseif ($_POST["sortBy"] == "price2") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 ORDER BY `price` DESC");

                
            }elseif ($_POST["sortBy"] == "Name1") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 ORDER BY `name` ASC");


            }elseif ($_POST["sortBy"] == "Name2") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 ORDER BY `name` DESC");


            }elseif ($_POST["sortBy"] == "category1") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 AND `category` = 'Струнные'");


            }elseif ($_POST["sortBy"] == "category2") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 AND `category` = 'Клавишные'");


            }elseif ($_POST["sortBy"] == "category3") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 AND `category` = 'Смычковые'");


            }elseif ($_POST["sortBy"] == "Country1") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 ORDER BY `country` ASC");


            }elseif ($_POST["sortBy"] == "Country2") {
                $query = mysqli_query($connect,"SELECT * FROM `products`  WHERE `count` > 0 ORDER BY `country` DESC");
          } 
        }
  ?>
      <div class="container mt-5 text-center">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 42px;">Каталог товаров</p>
          </div>
        </div>
        <!-- Начало фильтрации -->
        <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <form method="post">
                            <select name="sortBy" class="form-select" aria-label="Default select example">
                                <option selected>Сортировать по:</option>
                                <option value="price1">Цене дешевле</option>
                                <option value="price2">Цене дороже</option>
                                <option value="Name1">Наименованию от А-Я</option>
                                <option value="Name2">Наименованию от Я-А</option>
                                <option value="Country1">Стране от А-Я</option>
                                <option value="Country2">Стране от Я-А</option>
                            </select>
                            <button class="mt-3 btn btn-dark">Применить</button>
                        </form>
                    </div>
                    <div class="col">
                        <form method="post">
                            <select name="sortBy" class="form-select" aria-label="Default select example">
                                <option selected>Фильтровать по категории:</option>
                                <option value="category1">Cтрунные</option>
                                <option value="category2">Клавишные</option>
                                <option value="category3">Смычковые</option>
                            </select>
                            <button class="mt-3 btn btn-dark">Применить</button>
                        </form>
                    </div>
                </div>
            </div>
                <!-- Конец фильтрации -->
          </div>
        </div>
      </div>

<!-- Начало каталога -->
    <div class="container mt-5 text-center">
        <div class="row row-cols">
        <?php
            $_GET['query'] = $query;
            while ($row = mysqli_fetch_assoc($query)):?>
                <div class="col mb-5">
                    <div class="card shadow-sm" style="width: 320px;">
                        <img class="border border-dark m-2" width="290" height="250" src="media/images/<?php echo $row['image']?>.jpeg" class="d-block w-100" alt="..." style="object-fit: contain;">
                        <div class="card-body">
                            <p class="text-start" class="card-text"><?php echo $row['name']?></p>
                            <p class="text-start" class="card-text"><?php echo $row['price']?> руб.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn">
                                    <a href="template/product.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                                    <?php if(isset($_SESSION["user"])){
                                        echo '<a href="scripts/add-to-cart.php?id=' . $row['id'] . '" class="btn btn-sm btn-dark">В корзину</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            <?php endwhile;?> 
        </div>
    </div>
    </div>
<!-- Конец каталога -->
    <?php include "template/footer.php"?>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>