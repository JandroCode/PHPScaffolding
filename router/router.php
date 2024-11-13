<?php


// requires
require_once 'controllers/LoginController.php';
require_once 'controllers/AdminController.php';
require_once 'controllers/UsuarioController.php';

// instancias
$loginController = new LoginController();
$adminController = new AdminController();
$usuarioController = new UsuarioController();

$url = $_SERVER['REQUEST_URI'];
$dominio = '/mazer';

switch ($url) {
    case $dominio.'/auth/login':
        $loginController ->loginForm();
        break;

    case $dominio.'/admin':
        $adminController ->index();
        break;

    case $dominio.'/usuarios':
        $usuarioController->index();
        break;

    case $dominio.'/index.php':
        header("Location: {$dominio}/auth/login");
        exit();
        break;

    default:
        require_once 'views/errors/404.php';
}

