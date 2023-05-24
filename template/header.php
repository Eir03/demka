<!-- Начало шапки сайта -->
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="/media/images/logo.png" alt="logo" style="width: 25%">
      </a>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/pages/about_us.php" class="nav-link px-2 link-dark">О нас</a></li>
        <li><a href="/index.php" class="nav-link px-2 link-dark">Каталог</a></li>
        <li><a href="/pages/location.php" class="nav-link px-2 link-dark">Где нас найти?</a></li>
        <?php
            session_start();
            if (isset($_SESSION['user'])):
              if($_SESSION['user']['login'] == "admin"):?>
                 <li><a href="/admin.php" class="nav-link px-2 text-dark">Админ</a></li>
              <?php else:?>
                <li><a href="/pages/myorders.php" class="nav-link px-2 text-dark">Мои Заказы</a></li>
                <a href="/template/profile.php" class="nav-link px-2 text-dark">Профиль</a></li>
            <?php endif; endif;?>
      </ul>
      <?php
          if(!isset($_SESSION['user'])):?>
            <div class="text-end">
              <a href="/pages/login.php"class="btn btn-outline-dark me-2">Вход</a>
              <a href="/pages/registration.php"class="btn btn-dark">Регистрация</a>
            </div>
          <?php else:?>
            <div class="text-end">
              <p class="fw-bold"><?php echo $_SESSION['user']['login']?></p>
              <a href="/pages/cart.php" class="btn btn-outline-dark me-2">Корзина</a>
              <a href="/scripts/logout.php" class="btn btn-dark">Выйти</a>
            </div>
          <?php endif;?>
    </header>
</div>
<!-- Конец шапки сайта -->