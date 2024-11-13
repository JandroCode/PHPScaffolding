<?php


// Requires
require_once 'dao/UsuarioDao.php';



class UsuarioController{

    private $usuarioDao;

    public function __construct(){
        $this->usuarioDao = new UsuarioDAO();
    }


    public function index(){
       $usuarios =  $this->usuarioDao->obtenerUsuarios();

       require_once 'views/usuarios/usuarios.php';
    }


    
}