<?php

$url = $_SERVER['REQUEST_URI'];
$dominio = '/mazer';

switch ($url) {
    case $dominio.'/auth/login':
        require_once 'views/login.php';
        break;

    default:
        require_once 'views/errors/404.php';
}

