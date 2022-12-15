<section class="admin form-section">
    <h1 class="admin__title form-title">Dashboard <?= $_SESSION['username_admin'] ?></h1>
    <div class="gutter gutter-normal"></div>
    <div class="admin__container">
        <?php
            include 'config/connectorUser.php';
            include 'config/connector.php';
            
            $result = mysqli_query($connectionUser, "SELECT * FROM transaksi");
            
            if($result) {
                while($data = mysqli_fetch_array($result)) {
                    ?>
                        <div class='admin__card'>
                            <?php
                                $idMobil = $data['id_mobil'];
                                $idUser = $data['id_user'];
                                $resultMobil = mysqli_query($connection, "SELECT * FROM daftar_mobil WHERE id_mobil='$idMobil'");
                                $resultUser = mysqli_query($connectionUser, "SELECT * FROM user WHERE id='$idUser'");
                                $dataMobil = mysqli_fetch_assoc($resultMobil);
                                $dataUser = mysqli_fetch_assoc($resultUser);
                            ?>

                            <div class="admin__box">
                                <img src='asset/<?= $dataMobil['foto_mobil'] ?>' alt='' class='admin__img'>
                                <div class="admin__gutter"></div>
                                <div class="admin__detail">
                                    <h1><?= $dataMobil['nama_mobil'] ?></h1>
                                    <h2><?= $data['unit_beli'] ?> Unit</h2>
                                    <h2>Rp<?= $dataMobil['harga_mobil'] ?></h2>
                                </div>
                            </div>

                            <div class="admin__status">
                                <h2><?= $data['alamat'] ?></h2>
                                <div class="admin__form">
                                    <h2>Status :</h2>
                                    <form action="config/updateTransaksi.php" method="post">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status1" value="On review" <?php echo $data['status_order'] == 'On Review' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="status1">
                                                On Review
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2" value="Approved" <?php echo $data['status_order'] == 'Approved' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="status2">
                                                Approved
                                            </label>
                                        </div>
                                        <input type="submit" class="admin__btn btn-primary" name="update" value="Update">
                                        <input type="hidden" name="id_transaksi" value="<?= $data['id_transaksi'] ?>">
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <div class="admin__gutter admin__gutter-card"></div>
                        <?php
                }
            }
            ?>
    </div>
    <div class="<?= mysqli_num_rows($result) ? 'hide-404' : 'admin__empty' ?>">
        <img src="asset_user/undraw.svg" alt="">
        <h1>There is no data</h1>
    </div>
</section>