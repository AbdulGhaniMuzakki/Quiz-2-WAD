<?php
        include "connectorUser.php";

        if(isset($_POST['update'])) {
            $idTransaksi = $_POST['id_transaksi'];
            $status = $_POST['status'];

            $queryUpdate = mysqli_query($connectionUser, "UPDATE transaksi SET status_order='$status' WHERE id_transaksi = '$idTransaksi'");

            if($queryUpdate) {
                header('Location: ../index.php?page=dashboard-admin');
            }
        }
    
?>