<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
    <title>Icourse</title>
</head>
<body>
    <div class="app">
        <?php
            include "config/connector.php";

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
                        <img class="logo" src="asset/logo2.png" alt="apiary" width="100">
                        <a class="nav-link" href="index.php?page=dashboard-admin">Dashboard</a>
                        <a class="nav-link" aria-current="page" href="index.php?page=car-gallery&message=none">class</a> 
                    </div>
                    <div class="nav-user">
                        <a id="<?= isset($_SESSION['username_admin']) ? 'hide' : '' ?>" class="nav-link nav-login" href="index.php?page=login">Login</a> 
                        <div class="dropdown" id="<?= !isset($_SESSION['username_admin']) ? 'hide' : '' ?>">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION['username_admin'] ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?page=additem">Add Item</a></li>
                                <li><a class="dropdown-item" href="index.php?page=dashboard-admin">Dashboard</a></li>
                                <li><a class="dropdown-item" href="config/logout_admin.php">Logout</a></li>
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
                        include "pages/DetailAdmin.php";
                        break;
                    case 'edit':
                        include "pages/Edit.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else if (isset($_GET['page']) && isset($_GET['message'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'car-gallery':
                        include "pages/ListCourseAdmin.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'additem':
                        include "pages/Add.php";
                        break;
                    case 'login-admin':
                        include "pages/LoginAdmin.php";
                        break;
                    case 'dashboard-admin':
                        include "pages/Dashboard-Admin.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }
	 ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>