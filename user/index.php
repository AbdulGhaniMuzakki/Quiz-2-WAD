<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
    <title>Icourse</title>
</head>
<body>
    <div class="app">
        <?php
            include "../config/connector.php";

            $result = mysqli_query($connection, "SELECT * FROM `daftar_mobil`");

            function handleNavbar($value) {
                echo $value;
            };
        ?>
        
        <nav class="navbar navbar-expand-lg bg-primary <?= isset($_COOKIE['warna']) ? handleNavbar($_COOKIE['warna']) : '' ?>" id="<?= isset($_GET['page']) && in_array($_GET['page'], ['register', 'login', 'login-admin']) ? 'hide' : '' ?>">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-container-auth" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <img class="logo" src="../asset/logo2.png" alt="apiary" width="100">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a> 
                        <a class="nav-link" href="index.php?page=car-gallery&message=none">Class</a>
                        <a class="nav-link" href="index.php?page=dashboard-user">Order</a>
                        
                    </div>
                    <div class="nav-user">
                        <a id="<?= isset($_SESSION['nama']) ? 'hide' : '' ?>" class="nav-link nav-login" href="index.php?page=login">Login</a> 
                        <div class="dropdown" id="<?= !isset($_SESSION['nama']) ? 'hide' : '' ?>">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION['nama'] ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <?php 
            if (isset($_GET['page']) && isset($_GET['id'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'detail':
                        include "Detail-Abdul.php";
                        break;
                    case 'dokumen':
                        include "Dokumen-Abdul.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else if (isset($_GET['page']) && isset($_GET['message'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'car-gallery':
                        include "ListCourse.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else if (isset($_GET['page']) && isset($_GET['user'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'profile':
                        include "Profile-Abdul.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'register':
                        include "Register-Abdul.php";
                        break;
                    case 'login':
                        include "Login.php";
                        break;
                    case 'pembayaran':
                        include "Pembayaran-Abdul.php";
                        break;
                    case 'dashboard-user':
                        include "Dashboard-User.php";
                        break;
                    case 'event':
                        include "event.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }
             else {
                include "Home.php";
            }
	 ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>