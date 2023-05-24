<!-- Админ панель -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Music House</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header class="p-3">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img class="bi me-2" width="40" height="32" alt="logo" src="../media/images/logo.png">
        <span class="fs-4" style="margin-right: 2.5rem;" >Админка</span>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/admin/all_orders.php" class="nav-link px-2 text-dark">Все заказы</a></li>
            <li><a href="/index.php" class="nav-link px-2 text-dark">Назад</a></li>
        </ul>
        </div>
    </div>
</header>
<div class="container text-center my-5">
    <img src="/media/images/logo.png" alt="">
</div>
<div class="container text-center mt-5">
    <a href="/admin/all_orders.php" class="btn btn-secondary">Все заказы</a>
</div>
    <?php include "template/footer.php"?>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>