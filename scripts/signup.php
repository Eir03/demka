<?php
// Регистрация пользователя
    session_start();
    require_once 'connect.php';

    $surname = $_POST['surname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $confirm = $_POST['confirm'];
    
    if($confirm == "on"){
        if ($password === $password_confirm) {
            $check_user = mysqli_query($connect, "SELECT * FROM user WHERE `login` = '$login'");
            if (mysqli_num_rows($check_user) < 1){
                mysqli_query($connect, "INSERT INTO User (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`) 
                VALUES (NULL, '$surname', '$lastname', '$middlename', '$login', '$email', '$password')");
                $_SESSION['msg'] = "Вы успешно зарегистрировались, теперь войдите в систему";
                header('Location: ../pages/login.php');
            }
            else{
                $_SESSION['msg'] = 'Пользователь с таким логином уже существует';
                header('Location: ../pages/registration.php'); 
            }
        }else{
            $_SESSION['msg'] = 'Пароли не совпадают';
            header('Location: ../pages/registration.php'); 
        }
    }else{
        $_SESSION['msg'] = 'Вы должны согласиться с условиями пользовательского соглашения';
        header('Location: ../pages/registration.php'); 
    }
?>

 
