<?php 
    session_start();

    unset($_SESSION['id_admin']);
    unset($_SESSION['username_admin']);
    
    header('Location: ../user/index.php');
?>