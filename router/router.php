<?php


// requires
require_once 'controllers/LoginController.php';

// instancias
$loginController = new LoginController();

$url = $_SERVER['REQUEST_URI'];
$dominio = '/mazer';

switch ($url) {
    case $dominio.'/auth/login':
        $loginController ->loginForm();
        break;

    case $dominio.'/admin':
        require_once 'views/admin.php';
        break;

    case $dominio.'/index.php':
        header("Location: {$dominio}/auth/login");
        exit();
        break;

    default:
        require_once 'views/errors/404.php';
}

