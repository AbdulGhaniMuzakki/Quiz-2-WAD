<section class="edit form-section">
    <?php 
        include 'config/connector.php';

        $id = $_GET['id'];

        $result = mysqli_query($connection, "SELECT * FROM daftar_mobil WHERE id_mobil=$id");
        $data = mysqli_fetch_assoc($result);
    ?>
    
    <div class="edit__header">
        <h1 class="edit__title form-title">Edit</h1>
        <p class="edit__desc form-desc">Edit Kelas <?= $data['nama_mobil'] ?></p>
    </div>
    <div class="edit__container">
    <img src="asset/<?= $data['foto_mobil'] ?>" alt="" class="edit__img">
        <form action="config/edit.php" method="POST" enctype="multipart/form-data" class="edit__form form-rent">
            <div class="mb-4">
                <label for="nama_mobil" class="form-label">Nama Kelas :</label>
                <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="<?= $data['nama_mobil'] ?>" >
            </div>
            <div class="mb-4">
                <label for="merk" class="form-label">Level :</label>
                <input type="text" name="merk" class="form-control bg-light" id="merk" value="<?= $data['merk_mobil'] ?>">
            </div>
            <div class="mb-4">
                <label for="thn_produksi" class="form-label">Tanggal Kelas :</label>
                <input type="date" name="thn_produksi" class="form-control" id="date" value="<?= $data['tahun_produksi']?>">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi :</label>
                <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" value="" placeholder="Masukkan deskripsi mobil.."><?= $data['deskripsi'] ?></textarea>
            </div>
            <div class="mb-4">
                <label for="harga" class="form-label">Harga :</label>
                <input type="number" min="1" step="any" name="harga" class="form-control bg-light" id="harga" value="<?= $data['harga_mobil'] ?>">
            </div>
            <div class="mb-4">
                <label for="gambar" class="form-label">Foto :</label>
                <input type="file" name="gambar" id="gambar" accept="image/*">
                <p class='form-img-detail'>current image: <span><?= $data['foto_mobil'] ?></span></p>
            </div>
            <input type="submit" class="form-rent-btn btn-primary" name="ubah" value="Simpan">
            <input type="hidden" name="id" value="<?= $data['id_mobil'] ?>">
            <!-- <button type="submit" class="form-rent-btn btn-primary">Simpan</button> -->
        </form>
    </div>
</section>