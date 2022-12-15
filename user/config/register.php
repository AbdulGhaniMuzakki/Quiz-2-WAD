<?php
    include "connectorUser.php";

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $noHP = $_POST['no_hp'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    $query = mysqli_query($connectionUser, "SELECT * from `user` where email = '$email'");
    $rows = mysqli_num_rows($query);

    if($rows) {
        echo "Account already exist! Try another account.";
    } else {
        if($password == $confirmPassword) {
            $query = mysqli_query($connectionUser, "INSERT INTO user(nama, email, password, no_hp) VALUES('$nama','$email','$password','$noHP')");
    
            if($query) {
                // $queryId = mysqli_query($connection, "SELECT * FROM `user_usein` WHERE email = '$email'");
                // $idUser = mysqli_fetch_assoc($queryId);
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['nama'] = $nama;
                $_SESSION['no_hp'] = $noHP;
                ini_set('session.gc_maxlifetime', 86400);
    
                header('Location: ../index.php?page=login');
            }
        } else {
            echo "Password doesn't match";
        }
    }

?>