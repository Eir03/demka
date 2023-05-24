<?php 
//Удаление товара из корзины
if(isset($_GET['id'])){
    session_start();
    if(isset($_SESSION['basket'])){
        $oldarr = $_SESSION['basket'];
        $key = array_search(array("id" => $_GET['id'],),$oldarr);
        unset($oldarr[$key]);
        $_SESSION['basket'] = $oldarr;
    }
    header('Location: ../pages/cart.php');
}
?>