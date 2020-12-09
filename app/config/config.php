<?php

// include __DIR__ . '/../../enviro.php';

define('ROOT', __DIR__ . '/../');


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

define('DB', [
    'host' => 'localhost',
    'name' => 'sindicato',
    'user' => 'root',
    'pass' => ''
]);

$pageTitle = $_GET['url'] ?? 'Login';
