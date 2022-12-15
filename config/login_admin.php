<?php
    include "connectorUser.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($connectionUser, "SELECT * from `admin` where email = '$email' && password = '$password'");
    $rows = mysqli_num_rows($query);

    if($rows) {
        $data = mysqli_fetch_assoc($query);

        session_start();
        $_SESSION['id_admin'] = $data['id'];
        $_SESSION['username_admin'] = $data['username'];
        ini_set('session.gc_maxlifetime', 86400);

        // setcookie('email', $email, time()+86400*30, '/');
        // setcookie('password', $password, time()+86400*30, '/');
        // setcookie('nama', $data['nama'], time()+86400*30, '/');
        header('Location: ../index.php?page=dashboard-admin');

    } else {
        echo "You entered a wrong email / password";
    }
?>