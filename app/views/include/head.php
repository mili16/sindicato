<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN <?= APP['name'] ?></title>
    <link rel="stylesheet/less" type="text/css" href="./assets/less/styles.less" />
</head>
<body>
<?php

if (isset($_GET['url'])) {
    if (is_file(__DIR__ . '/../pages/' . $_GET['url'] . '.php')) {
        require_once __DIR__ . '/../pages/' . $_GET['url'] . '.php';
    } else {
        require_once __DIR__ . '/../pages/404.php';
    }
} else {
    require_once __DIR__ . '/../../index.php';
}

?>

<script src="./assets/js/less.min.js"></script>
</body>
</html>
