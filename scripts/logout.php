<?php 
//Выход пользователя из системы
session_start();
unset($_SESSION["user"]);
unset($_SESSION["basket"]);
unset($_SESSION["cost"]);
unset($_SESSION["msg"]);
header("Location: ../pages/about_us.php");
?>