<?php 
        include "connectorUser.php";

        $email = $_POST['email'];
        $update_nama = $_POST['nama'];
        $update_noHP = $_POST['no_hp'];
        $update_password = $_POST['password'];
        $update_confirmPassword = $_POST['confirm_password'];
        $update_navbar = $_POST['warna'];
    
        if(!empty($update_password) && !empty($update_confirmPassword)) {
            if($update_password == $update_confirmPassword) {
                $query = mysqli_query($connectionUser, "UPDATE user SET nama='$update_nama', no_hp='$update_noHP', password='$update_password' WHERE email = '$email'");
                header('Location: ../index.php');
            } else {
                echo "Password doesn't match!";
            }
        } else {
            $query = mysqli_query($connectionUser, "UPDATE user SET nama='$update_nama', no_hp='$update_noHP' WHERE email = '$email'");
            header('Location: ../index.php');
        }

        $_SESSION['nama'] = $update_nama;
        $_SESSION['no_hp'] = $update_noHP;
        setcookie('warna', $update_navbar, time()+86400*30, '/');

?>