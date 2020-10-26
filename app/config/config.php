<?php

define('ROOT', __DIR__ . '/../../');


define('APP', [
    'name' => 'SITRACOND',
    'logo' => '',
    'description' => ''
]);

define('MENU_ITEMS', [
    'Inicio',
    'Directiva',
    'General',
    'Cursos',
    'Reporte',
    'Usuario',
    'Salir'
]);

define('PAGES', [
    'home' => 'Inicio',
    'directive' => 'Directiva',
    'general' => 'General',
    'course' => 'Cursos',
    'reporting' => 'Reporte',
    'user' => 'Usuario',
    'exit' => 'Salir'
]);

define('DB', [
    'host' => 'localhost',
    'name' => 'sindicato',
    'user' => 'root',
    'pass' => ''
]);



// $conection = mysqli_connect(
//     DB['host'],
//     DB['user'],
//     DB['pass'],
//     DB['name']
// );

$pageTitle = 'Home';
