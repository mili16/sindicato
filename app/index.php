<?php

require_once __DIR__ . '/config/config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN <?= APP['name'] ?></title>
    <link rel="stylesheet" href="http://app.test/assets/css/styles.css">
</head>
<body>

<?php

if (isset($_GET['url'])) {
    $url = str_replace('/', '', $_GET['url']);
    $path = __DIR__ . "/views/pages/{$url}.php";
    $userid = $_SESSION['userid'] == null || $_SESSION['userid'] == '';
    echo(str_replace('/', '', $url));
    if ($userid) {
        return header('Location:/');
    }

    if (is_file($path)) {
        // return require_once $path;
        return require_once __DIR__ . "/views/pages/".str_replace('/', '', $url).".php";;
    }

    // if ($_GET['url'] === $url) {
    //     return require_once __DIR__ . '/views/pages/404.php';
    // }

    return require_once __DIR__ . '/views/pages/404.php';
}

require_once __DIR__ . '/views/include/login.php';


?>

</body>
</html>
