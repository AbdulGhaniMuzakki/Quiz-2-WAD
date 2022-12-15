<section class="login">
    <a href="index.php" class="redirect-home">< back to home</a>
    <form action="config/login_admin.php" method="post" class="login__form auth-form">
        <h1 class="login__title auth-title">Login <span>as admin</span></h1>
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control bg-light" id="email" value="" placeholder="Masukkan email" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" name="password" class="form-control bg-light" id="password" value="" placeholder="Masukkan kata sandi" required>
        </div>
        <input type="submit" class="regis__btn auth-btn" name="login_admin" value="Login">
        <!-- <button type="submit" class="login__btn auth-btn">Login</button> -->
        <p class="auth-redirect">Login sebagai <a href="./user/index.php?page=login">User</a></p>
    </form>
</section>