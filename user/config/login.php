<?php
    include "connectorUser.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($connectionUser, "SELECT * from `user` where email = '$email' && password = '$password'");
    $rows = mysqli_num_rows($query);

    if($rows) {
        $data = mysqli_fetch_assoc($query);
    
        if(isset($_POST['remember'])) {
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time()+86400*30, '/');
        } else {
            unset($_COOKIE['remember']);
            setcookie('remember', '', time() - 3600, '/');
        }

        session_start();
        $_SESSION['id_user'] = $data['id'];
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['nama'] = $data['nama'];
        ini_set('session.gc_maxlifetime', 86400);

        // setcookie('email', $email, time()+86400*30, '/');
        // setcookie('password', $password, time()+86400*30, '/');
        // setcookie('nama', $data['nama'], time()+86400*30, '/');
        header('Location: ../index.php');

    } else {
        echo "You entered a wrong email / password";
    }
?>