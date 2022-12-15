<?php
    
        include "connector.php";

        $namaMobil = $_POST['nama_mobil'];
        $merk = $_POST['merk'];
        $thnProduksi = $_POST['thn_produksi'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        
        move_uploaded_file($file_tmp, '../asset/'.$gambar);
        $query = mysqli_query($connection, "INSERT INTO daftar_mobil(nama_mobil, harga_mobil, merk_mobil, tahun_produksi, deskripsi, foto_mobil) VALUES('$namaMobil', '$harga', '$merk','$thnProduksi','$deskripsi', '$gambar')");

        if($query) {
            header('Location: ../index.php?page=car-gallery&message=add-item');
        }
?>