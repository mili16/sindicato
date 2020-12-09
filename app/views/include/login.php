<?php

include_once __DIR__ . "/../../libs/conection.php";

function verificar_login($mysqli, $user, $password, &$result) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";
    $rec = mysqli_query($mysqli, $sql);
    $count = 0;

    while ($row = mysqli_fetch_object($rec)) {
        $count++;
        $result = $row;
    }

    if ($count == 1) {
        return true;
    }

    return false;
}

if (!isset($_SESSION['userid']) && !isset($_SESSION['user'])) {
    if (isset($_POST['login'])) {
        $verificar = verificar_login($con, $_POST['user'], $_POST['password'], $result);
        if ($verificar) {
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['userid'] = $result->idusuario;
            header("Location:/inicio");
        } else {
          echo '<div class="error"> usuario y/o contraseña es incorrecto, vuelva a intentar.</div>';
        }
    }
?>
<main>

    <div class="login-container">
        <div class="login">
            <h1 class="title"><?= APP['name'] ?></h1>
            <!-- <img class="logo-img" src=""> -->
            <!-- <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png" alt="user image"> -->
            <!-- <hr> -->
            <form action="" method="post" class="login-form">
                <div class="login-content">
                    <img
                        src="/img/usuario.png"
                        alt="Logo login"
                        class="login-img"
                    >
                </div>
                <div class="login-content">
                    <input
                        name="user"
                        type="text"
                        placeholder="USUARIO"
                        class="login-input"
                        autofocus
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
                    <!-- <button type="submit" class="boton login-button">
                        Login
                    </button> -->
                    <input
                        name="login"
                        type="submit"
                        value="login"
                        class="login-button"
                    >
                </div>
            </form>
        </div>
    </div>
</main>

<?php
} else {
    echo '¿Desea salir del sistema?';
    echo '<a href="/salir">Click aqui</a>';
    // echo $_SESSION['user'];
}
?>
