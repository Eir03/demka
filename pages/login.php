<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Music House</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../template/header.php';
    require_once '../scripts/connect.php';?>
    <div class="container mt-5 text-center">
      <div class="row">
          <div class="col">
              <p class="fw-bold" style="font-size: 50px;">Авторизация</p>
          </div>
      </div>
      <!-- Начало формы авторизации -->
      <form action="../scripts/signin.php" method="post">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="login" name="login" placeholder="Логин" >
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
            <button class="btn btn-dark btn-lg button button-sign m-3" type="submit">Авторизация</button>
          </div>
        </div>
        <?php 
          session_start();
          if (isset($_SESSION['msg'])){
              echo '<p class="msg">' . $_SESSION['msg'] . '</p>';
          }
          unset($_SESSION['msg']);
        ?>
        <div class="en mt-3">
          <p class="text-danger">Вводите только латиницу, цифры и тире</p> 
        </div>
      </form>
        <!-- Конец формы авторизации -->
    </div> 
    <?php include "../template/footer.php"?>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="../js/jquery-3.7.0.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>