<section class="showroom">
    <div class="showroom__header">
        <h1 class="showroom__title">Class</h1>
        <p class="showroom__desc">Icoursera</p>
    </div>

    <div class="showroom__container">
    <?php
        include 'config/connector.php';

        $result = mysqli_query($connection, "SELECT * FROM `daftar_mobil`");

        if($result) {
            while($data = mysqli_fetch_array($result)) {
    ?>
                <div class='card'>
                    <img src='asset/<?= $data['foto_mobil'] ?>' alt='' class='card__img'>
                    <h1 class='card__title'><?= $data['nama_mobil'] ?></h1>
                    <p class='card__desc'><?= strlen($data['deskripsi']) > 120 ? substr($data['deskripsi'], 0, 100).'...' : $data['deskripsi'] ?></p>
                    <div class='card__cta-container'>
                        <a href='config/delete.php?id=<?= $data['id_mobil'] ?>' class='card__delete-btn'>Delete</a>
                        <a href='index.php?page=detail&id=<?= $data['id_mobil'] ?>' class='card__detail-btn'>Detail</a>
                    </div>
                </div>
    <?php
            }
        }
    ?>

    </div>
    

    <div class="toast <?= $_GET['message'] != 'none' ? 'show' : '' ?>" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="1000">
        <div class="toast-header">
            <?php 
                $message = $_GET['message'];

                switch ($message) {
                    case 'add-item':
                        echo '<span class="add-item"></span>';
                        break;
                    case 'delete-item':
                        echo '<span class="delete-item"></span>';
                        break;
                    case 'update-item':
                        echo '<span class="update-item"></span>';
                    default:
                        break;
                }
            ?>
            <strong class="me-auto toast-alert">Alert</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php 
                $message = $_GET['message'];

                switch ($message) {
                    case 'add-item':
                        echo 'Data berhasil ditambahkan!';
                        break;
                    case 'delete-item':
                        echo 'Data berhasil dihapus!';
                        break;
                    case 'update-item':
                        echo 'Data berhasil diupdate!';
                        break;
                    default:
                        break;
                }
            ?>
        </div>
    </div>
    <div class="gutter gutter-normal gutter-admin"></div>
    <footer class="footer footer-gallery">
        <p>© 2022</p>
    </footer>
</section>