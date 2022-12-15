<?php
    
        include "connectorUser.php";

        $idUser = $_POST['id_user'];
        $gambar = $_FILES['bukti_bayar']['name'];
        $file_tmp = $_FILES['bukti_bayar']['tmp_name'];

        $queryTransaksi = mysqli_query($connectionUser, "SELECT * FROM transaksi WHERE id_user = '$idUser'");
        $data = mysqli_fetch_assoc($queryTransaksi);
        $idTransaksi = $data['id_transaksi'];
        
        move_uploaded_file($file_tmp, '../asset_user/'.$gambar);
        $query = mysqli_query($connectionUser, "UPDATE transaksi SET bukti_bayar='$gambar' WHERE id_transaksi = '$idTransaksi' && id_user = '$idUser'");
        // $query = mysqli_query($connectionUser, "INSERT INTO transaksi(bukti_bayar) VALUES('$gambar') WHERE id_user = '$idUser'");

        if($query) {
            header('Location: ../index.php?page=dashboard-user');
        }
?>