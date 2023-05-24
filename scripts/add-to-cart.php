<?php 
//Добавление товара в корзину
if(isset($_GET['id'])){
    session_start();
    if(isset($_SESSION['basket'])){
        $oldarr = $_SESSION['basket'];
        $newarr = array(
                "id" => $_GET['id'] 
            );
        array_push($oldarr, $newarr);
        $_SESSION['basket'] = $oldarr;
    }
    else {
        $id = $_GET['id'];
        $array = array(
            1 => array(
                "id" => $id,
            )
        );
        $_SESSION['basket'] = $array;
    }
    header('Location: ../pages/cart.php');
}
?>