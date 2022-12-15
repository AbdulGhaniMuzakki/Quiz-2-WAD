<section class="detail form-section">
    <?php 
        include 'config/connector.php';

        $id = $_GET['id'];

        $result = mysqli_query($connection, "SELECT * FROM daftar_mobil WHERE id_mobil=$id");
        $data = mysqli_fetch_assoc($result);
    ?>

    <div class="detail__header">
        <h1 class="detail__title form-title"><?= $data['nama_mobil'] ?></h1>
        <p class="detail__desc form-desc">Detail Kelas <?= $data['nama_mobil'] ?></p>
    </div>
    <div class="detail__container">
        <img src="asset/<?= $data['foto_mobil'] ?>" alt="" class="detail__img">
        <form action="" method="POST" class="detail__form form-rent">
            <div class="mb-4">
                <label for="nama_mobil" class="form-label">Nama Kelas</label>
                <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="<?= $data['nama_mobil'] ?>" readOnly>
            </div>
            <div class="mb-4">
                <label for="merk" class="form-label">Level</label>
                <input type="text" name="merk" class="form-control bg-light" id="merk" value="<?= $data['merk_mobil'] ?>" readOnly>
            </div>
            <div class="mb-4">
                <label for="thn_produksi" class="form-label">Tanggal Kelas</label>
                <input type="date" name="thn_produksi" class="form-control" id="thn_produksi" value="<?= $data['tahun_produksi']?>" readOnly>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" placeholder="Masukkan deskripsi mobil.." readOnly><?= $data['deskripsi'] ?></textarea>
            </div>
            <div class="mb-4">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" min="1" step="any" name="harga" class="form-control bg-light" id="harga" value="<?= $data['harga_mobil'] ?>" readOnly>
            </div>
            <a href="index.php?page=edit&id=<?= $data['id_mobil'] ?>" class="form-rent-btn btn-primary">Edit</a>
        </form>
    </div>
</section>