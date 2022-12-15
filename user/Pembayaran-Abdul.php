<?php 
    include 'config/connectorUser.php';

    $idUser = $_SESSION['id_user'];

    $result = mysqli_query($connectionUser, "SELECT * FROM user WHERE id=$idUser");
    $transaksi = mysqli_query($connectionUser, "SELECT * FROM transaksi WHERE id_user=$idUser");
    $data = mysqli_fetch_assoc($result);
    $dataTransaksi = mysqli_fetch_assoc($transaksi);

?>

<section class="pembayaran form-section">
    <div class="pembayaran__container">
        <div class="pembayaran__header">
            <h1 class="pembayaran__title form-title">Pembayaran a/n <?= $data['nama'] ?></h1>
            <p class="pembayaran__desc form-desc">Detail Pembayaran</p>
        </div>
        <div class="gutter gutter-normal"></div>
        <div class="pembayaran__user">
            <h1>Data Pembelian</h1>
            <table class="pembayaran__table">
                <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $data['nama'] ?></td>
                    </tr>
                </table>
        </div>

            <div class="gutter gutter-normal"></div>
            <div class="pembayaran__box">
                <div class="pembayaran__detail">
                    <h2>Via Bank BNI</h2>
                    <p>3275642921</p>
                </div>
                <div class="pembayaran__detail">
                    <h2>Via Bank Mandiri</h2>
                    <p>118242091832</p>
                </div>
                <div class="pembayaran__detail">
                    <h2>Via Paypal</h2>
                    <p>000342091832</p>
                </div>
                <div class="pembayaran__detail">
                    <h2>Total Bayar</h2>
                    <p><?= $dataTransaksi['total_bayar'] ?></p>
                </div>
                <form action="config/pembayaran.php" method='post' enctype="multipart/form-data" class="pembayaran__form">
                    <div class="mb-4">
                        <label for="bukti_bayar" class="form-label">Bukti Pembayaran</label>
                        <input type="file" name="bukti_bayar" id="bukti_bayar" accept="image/*" required>
                    </div>
                    <input type="submit" class="pembayaran__btn btn-primary" name="submit" value="Submit">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                </form>
            </div>

            <img class="transaksi_img" src="../asset/about.png" alt="transaksi">

        </div>
</section>