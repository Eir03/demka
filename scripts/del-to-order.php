<?php 
//Удаление заказа из БД
require_once 'connect.php';
if(isset($_GET['id'])){
    session_start();
    if(isset($_SESSION['user'])){
        $id = $_GET['id'];
        mysqli_query($connect, "DELETE FROM `orders` WHERE `id` = '$id'");
    }
    header('Location: ../pages/myorders.php');
}
?>