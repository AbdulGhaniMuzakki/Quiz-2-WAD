<section class="showroom">
    <div class="showroom__header">
        <h1 class="showroom__title">Icourses</h1>
        <p class="showroom__desc">MyCourses</p>
    </div>

    <div class="showroom__container">
    <?php
        include '../config/connector.php';

        $result = mysqli_query($connection, "SELECT * FROM `daftar_mobil`");

        if($result) {
            while($data = mysqli_fetch_array($result)) {
    ?>
                <div class='card'>
                    <img src='../asset/<?= $data['foto_mobil'] ?>' alt='' class='card__img'>
                    <h1 class='card__title'><?= $data['nama_mobil'] ?></h1>
                    <p class='card__desc'><?= strlen($data['deskripsi']) > 120 ? substr($data['deskripsi'], 0, 100).'...' : $data['deskripsi'] ?></p>
                    <div class='card__cta-container'>
                        <a href='index.php?page=detail&id=<?= $data['id_mobil'] ?>' class='card__detail-btn'>Detail</a>
                    </div>
                </div>
    <?php
            }
        }
    ?>

    </div>
    
    <div class="gutter gutter-gallery gutter-normal"></div>
    <footer class="footer footer-gallery">
        <p>© 2022</p>
    </footer>
</section>