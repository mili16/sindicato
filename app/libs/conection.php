<?php
// datos para la conexion a mysql

define('DB_SERVER','localhost');
define('DB_NAME','sindicato');
define('DB_USER','root');
define('DB_PASS','');

$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS, DB_NAME);
