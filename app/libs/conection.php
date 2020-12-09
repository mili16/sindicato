<?php

define('DB_SERVER', $_SERVER['DB_SERVER'] ?? 'localhost');
define('DB_NAME', $_SERVER['DB_NAME'] ?? 'sindicato');
define('DB_USER', $_SERVER['DB_USER'] ?? 'root');
define('DB_PASS', $_SERVER['DB_PASS'] ?? '');

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
