<section class="user form-section">
    <h1 class="user__title form-title">Dashboard <?= $_SESSION['nama'] ?></h1>
    <div class="gutter gutter-normal"></div>
    <?php
        include '../config/connectorUser.php';
        include '../config/connector.php';
        
        $idUser = $_SESSION['id_user'];
        $result = mysqli_query($connectionUser, "SELECT * FROM transaksi WHERE id_user='$idUser'");
        
                
        if($result) {
            while($data = mysqli_fetch_array($result)) {
                ?>
                <div class="user__container">
                    <div class='user__card'>
                        <?php
                            $idMobil = $data['id_mobil'];
                            $resultMobil = mysqli_query($connection, "SELECT * FROM daftar_mobil WHERE id_mobil='$idMobil'");
                            $dataMobil = mysqli_fetch_assoc($resultMobil);
                        ?>
                        <img src='../asset/<?= $dataMobil['foto_mobil'] ?>' alt='' class='user__img'>
                        <div class="user__gutter"></div>
                        <div class="user__detail">
                            <h1><?= $dataMobil['nama_mobil'] ?></h1>
                            <h2><?= $data['unit_beli'] ?> Unit</h2>
                            <h2>Rp<?= $dataMobil['harga_mobil'] ?></h2>
                            <p>Status : <span><?= $data['status_order'] ?></span></p>
                        </div>
                    </div>
                </div>
    <?php
            }
        }
    ?>
    <div class="<?= mysqli_num_rows($result) ? 'hide-404' : 'user__empty' ?>">
        <img src="asset_user/undraw.svg" alt="">
        <h1>There is no data</h1>
    </div>
</section>