<section class="add form-section">
    <div class="add__header">
        <h1 class="add__title form-title">Tambah Kelas</h1>
        <p class="add__desc form-desc">Tambah kelas Courses</p>
    </div>
    <form action="config/insert.php" method="POST" enctype="multipart/form-data" class="add__form form-rent">
        <div class="mb-4">
            <label for="nama_mobil" class="form-label">Nama Kelas</label>
            <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="" placeholder="Masukkan nama mobil" required>
        </div>
        <div class="mb-4">
            <label for="merk" class="form-label">Kategori</label>
            <input type="text" name="merk" class="form-control bg-light" id="merk" value="" placeholder="Masukkan merk mobil" required>
        </div>
        <div class="mb-4">
            <label for="thn_produksi" class="form-label">Tanggal Kelas</label>
            <input type="date" name="thn_produksi" class="form-control" id="date" value="" required>
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" value="" placeholder="Masukkan deskripsi mobil.." required></textarea>
        </div>
        <div class="mb-4">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" min="1" step="any" name="harga" class="form-control bg-light" id="harga" value="" required>
        </div>
        <div class="mb-4">
            <label for="gambar" class="form-label">Foto</label>
            <input type="file" name="gambar" id="gambar" accept="image/*" required>
        </div>
        <input type="submit" class="form-rent-btn btn-primary" name="submit" value="Selesai">
        <!-- <button type="submit" class="form-rent-btn btn-primary">Selesai</button> -->
    </form>
</section>