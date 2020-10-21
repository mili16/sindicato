
<?php require_once __DIR__ . '/views/include/head.php'; ?>

<?php
session_start();
include_once __DIR__ . "/libs/conection.php";

function verificar_login($mysqli, $user, $password, &$result) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";
    $rec = mysqli_query($mysqli, $sql);
    $count = 0;

    while ($row = mysqli_fetch_object($rec)) {
        $count++;
        $result = $row;
    }

    if ($count == 1) {
        return 1;
    } else {
        return 0;
    }
}

if(!isset($_SESSION['userid'])) {
    if(isset($_POST['login'])) {
        if(verificar_login($con, $_POST['user'], $_POST['password'], $result) == 1) {
            $_SESSION['userid'] = $result->idusuario;
            header("location:/home");
        } else {
            echo '<div class="error"> usuario y/o contraseña es incorrecto, vuelva a intentar.</div>';
        }
    }
?>

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

<?php
} else {
    echo '¿Desea salir del sistema?';
    echo '<a href="/libs/logout.php">Click aqui</a>';
}
?>





<?php require_once __DIR__ . '/views/include/footer.php'; ?>
