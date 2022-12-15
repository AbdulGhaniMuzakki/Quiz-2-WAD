<?php 
    session_start();
    if(!isset($_COOKIE['remember'])) {
        unset($_SESSION["email"]);
        unset($_SESSION["password"]);
    }

    unset($_SESSION['id_user']);
    unset($_SESSION['no_hp']);
    unset($_SESSION['nama']);
    unset($_COOKIE['warna']);
    setcookie('warna', '', time() - 3600, '/');
    
    header('Location: ../index.php');
?>