<?php 
    include "connector.php";

    $id = $_GET['id'];
    
    $gambar = mysqli_query($connection, "SELECT foto_mobil FROM daftar_mobil WHERE id_mobil=$id");
    $dataGambar = mysqli_fetch_assoc($gambar);

    //Menghapus file gambar dari direktori
    unlink('../asset/'.$dataGambar['foto_mobil']);
    
    $result = mysqli_query($connection, "DELETE FROM daftar_mobil WHERE id_mobil=$id");

    if($result) {
        header('Location: ../index.php?page=car-gallery&message=delete-item');
    }

?>