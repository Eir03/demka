<?php
    //Подключение к БД
    $connect = mysqli_connect('127.0.0.1', 'root','', 'music');
    if (!$connect){
        die('Ошибка');
    }
?>