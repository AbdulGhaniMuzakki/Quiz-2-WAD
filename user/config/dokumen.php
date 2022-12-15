<?php
    
        include "connectorUser.php";

        $idUser = $_POST['id_user'];
        $idMobil = $_POST['id_mobil'];
        $namaPembeli = $_POST['nama_pembeli'];
        $alamat = $_POST['alamat'];
        $unit = $_POST['unit'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['ktp']['name'];
        $file_tmp = $_FILES['ktp']['tmp_name'];

        $statusOrder = 'On Review';
        
        move_uploaded_file($file_tmp, '../asset_user/'.$gambar);
        $query = mysqli_query($connectionUser, "INSERT INTO transaksi(id_user, id_mobil, alamat, foto_ktp, unit_beli, total_bayar, status_order) VALUES('$idUser', '$idMobil', '$alamat', '$gambar','$unit','$harga', '$statusOrder')");

        if($query) {
            header('Location: ../index.php?page=pembayaran');
        }
?>