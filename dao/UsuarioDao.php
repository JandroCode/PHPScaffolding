<?php

require_once 'database/config.php';

class UsuarioDao {

    
    public function obtenerUsuarios() {
       
        $conexion = Database::obtenerConexion();
        $sql = "SELECT * FROM usuarios";  
        $stmt = $conexion->query($sql);
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
    }
}
