<section class="dokumen form-section">
    <?php 
        include '../config/connector.php';

        $id = $_GET['id'];

        $result = mysqli_query($connection, "SELECT * FROM daftar_mobil WHERE id_mobil=$id");
        $data = mysqli_fetch_assoc($result);
    ?>

    <div class="dokumen__header">
        <h1 class="dokumen__title form-title">Konfirmasi Pembelian</h1>
        <p class="dokumen__desc form-desc"><?= $data['nama_mobil'] ?></p>
    </div>
    <div class="dokumen__container">
        <div class="dokumen__detail-mobil">
            <img src="../asset/<?= $data['foto_mobil'] ?>" alt="" class="dokumen__img">
            <table class="dokumen__table">
                <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td><?= $data['nama_mobil'] ?></td>
                </tr>
                <tr>                    
                    <td>Kategori</td>
                    <td>:</td>
                    <td><?= $data['merk_mobil'] ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>Rp<?= $data['harga_mobil'] ?></td>
                </tr>
            </table>
        </div>
        <form action="config/dokumen.php" method="POST" enctype="multipart/form-data" class="dokumen__form form-rent">
            <div class="mb-4">
                <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                <input type="text" name="nama_pembeli" class="form-control bg-light" id="nama_pembeli" value="<?= $_SESSION['nama'] ?>" readOnly>
            </div>
        
            <div class="mb-4">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control bg-light" id="harga" value="Rp<?= $data['harga_mobil'] ?>" readOnly>
            </div>
            <input type="submit" class="form-rent-btn btn-primary" name="submit" value="Submit">
            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
            <input type="hidden" name="id_mobil" value="<?= $data['id_mobil'] ?>">
        </form>
    </div>
</section>