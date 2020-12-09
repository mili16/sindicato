<?php

    require_once __DIR__ . '/../config/config.php';
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
    <title><?= ucfirst($pageTitle) . ' | ' . APP['name'] ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">

<?php

    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        $path = __DIR__ . "/../views/pages/{$url}.php";
        $userid = $_SESSION['userid'] == null || $_SESSION['userid'] == '';

        if ($userid) {
            return header('Location:/');
        }

        if (is_file($path)) {
            return require_once $path;
        }

        return require_once __DIR__ . '/../views/pages/404.php';
    }

    require_once __DIR__ . '/../views/include/login.php';
?>

</div>
