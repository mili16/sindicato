<?php require_once __DIR__ . '/config.php'; ?>
<?php require_once __DIR__ . '/views/include/head.php'; ?>

<div class="login-container">
    <h1 class="title"><?= APP['name'] ?></h1>
    <img class="logo-img" src="<?= APP['logo'] ?>">
</div>
<hr>
<form action="" method="post" class="login">
    <div class="login-content">
        <img
            src="<?= APP['logo'] ?>"
            alt="Logo login"
            class="logo-img"
        >
    </div>
    <div class="login-content">
        <input
            name="user"
            type="text"
            placeholder="USUARIO"
            class="login-input"
        >
    </div>
    <div class="login-content">
        <input
            name="password"
            type="password"
            placeholder="CONTRASEÑA"
            class="login-input"
        >
    </div>
    <div class="login-content">
        <input
            name="login"
            type="submit"
            value="login"
            class="login-button"
        >
    </div>
</form>
<?php require_once __DIR__ . '/views/include/footer.php'; ?>
