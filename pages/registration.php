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
    <!-- Форма регистрации -->
    <div class="container mt-5 text-center">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 38px;">Регистрация</p>
          </div>
        </div>
        <form action="../scripts/signup.php" method="post" class="mb-5">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Фамилия" value="" required="">
                    
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="surename" name="surename" placeholder="Имя" value="" required="">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Отчество" value="" required=""> 
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Логин" value="" required=""> 
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Почта">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" value="" required="">
                </div>
            </div>
            <div class="col mt-3">
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Повторите пароль" value="" required="">
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="confirm" name="confirm">
                        <label class="form-check-label" for="confirm">Я согласен с условиями пользовательского соглашения</label>
                    </div>
                        <button class="btn btn-dark btn-lg btn-block mt-3 button button-reg" type="submit">Зарегистрироваться</button>
                </div>
            </div>
            <div class="ru mt-3">
                <p class="text-danger">Вводите только кириллицу, пробел и тире</p> 
            </div>
            <div class="en mt-3">
                <p class="text-danger">Вводите только латиницу, цифры и тире</p> 
            </div>
            <div class="pass mt-3">
                <p class="text-danger">Пароль должен быть не менее 6 символов</p> 
            </div>
            <?php 
                session_start();
                if (isset($_SESSION['msg'])){
                    echo '<p class="msg mt-1">' . $_SESSION['msg'] . '</p>';
                }
                unset($_SESSION['msg']);
            ?>
        </form>
    </div>  
<!-- Конец формы регистрации -->
    <?php include "../template/footer.php"?>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="../js/jquery-3.7.0.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>