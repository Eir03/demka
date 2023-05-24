<?php
// Изменение статуса заказа
    session_start();
    require_once 'connect.php';
    
    $status = $_POST['status'];
    $comment = $_POST['comment'];
    $id = $_POST['id'];

    $check_order = mysqli_query($connect, "SELECT * FROM `orders` WHERE `id` = '$id'");
    if (mysqli_num_rows($check_order) > 0){
        $order = mysqli_fetch_assoc($check_order);
        if (isset($comment)) {
            mysqli_query($connect, "UPDATE orders SET `comment`='$comment', `status`='$status' WHERE `id` = '$id'");
        }
        else{
            mysqli_query($connect, "UPDATE orders SET `status`='$status' WHERE `id` = '$id'");
        }
    }
    header('Location: ../admin/all_orders.php');
?>

 
