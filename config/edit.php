<?php

        include "connector.php";

        if(isset($_POST['ubah'])) {
            $id = $_POST['id'];
            $namaMobil = $_POST['nama_mobil'];
            $merk = $_POST['merk'];
            $thnProduksi = $_POST['thn_produksi'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];
            $gambar = $_FILES['gambar']['name'];
            $file_tmp = $_FILES['gambar']['tmp_name'];
            $statusBayar = $_POST['status_bayar'];
    
            if($file_tmp) {
                move_uploaded_file($file_tmp, '../asset/'.$gambar);
                $query = mysqli_query($connection, "UPDATE daftar_mobil SET nama_mobil='$namaMobil', harga_mobil='$harga', merk_mobil='$merk', tahun_produksi='$thnProduksi', deskripsi='$deskripsi', foto_mobil='$gambar' WHERE id_mobil=$id");
            } else {
               $query = mysqli_query($connection, "UPDATE daftar_mobil SET nama_mobil='$namaMobil', harga_mobil='$harga', merk_mobil='$merk', tahun_produksi='$thnProduksi', deskripsi='$deskripsi' WHERE id_mobil=$id");
            }       

            header('Location: ../index.php?page=car-gallery&message=update-item');
        }
    
?>