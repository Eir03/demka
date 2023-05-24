<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Music House</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include "../template/header.php";?>

    <div class="container mt-5 text-center">
      <div class="row">
            <div class="col">
                <p class="fw-bold" style="font-size: 50px;">Подтвердите заказ</p>
            </div>
        </div>
        <!-- Начало формы подтверждения заказа -->
        <form action="../scripts/create_order.php" method="post">
          <div class="row mt-3">
            <div class="col">
              <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
              <button class="btn btn-dark btn-lg btn-block; m-3" type="submit">Потвердить заказ</button>
            </div>
          </div>
          <?php 
        session_start();
        if (isset($_SESSION['msg'])){
            echo '<p class="msg">' . $_SESSION['msg'] . '</p>';
        }
        unset($_SESSION['msg']);
        ?>
        </form>
        <!-- Конец формы подтверждения заказа -->
    </div> 

      <?php include "../template/footer.php"?>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>