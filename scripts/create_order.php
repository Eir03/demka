<?php
    session_start();
    require_once 'connect.php';

    $login = $_SESSION['user']['login'];
    $password = $_POST['password'];

    //Создание заказа
    $check_user = mysqli_query($connect, "SELECT * FROM user WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        $user_id = $user['id'];
        if(isset($_SESSION['basket'])){
            $basket = $_SESSION['basket'];
            $array = [];

            foreach ($basket as $value) {
                array_push($array, $value['id']);
            }       
            $arrayProduct = implode(";",$array);
            $cost = $_SESSION['cost'];
            mysqli_query($connect, "INSERT INTO `orders`(`id`, `id_user`, `date`, `status`, `products_info`, `cost`, `comment`) VALUES (NULL,'$user_id', now(), 'Новый','$arrayProduct', '$cost', NULL)");

            unset($_SESSION["basket"]);
            unset($_SESSION["cost"]);

            header('Location: ../pages/myorders.php');
        }
    }
    else{
        $_SESSION['msg'] = 'Неверный пароль';
        header('Location: ../pages/confirm_order.php');
    }
  ?>
