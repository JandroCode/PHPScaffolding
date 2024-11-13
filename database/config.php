<?php

class Database {

    private $host = "localhost";   
    private $dbName = "php-scaffolding"; 
    private $username = "root";   
    private $password = "";

   
    public static function obtenerConexion() {
     
        $db = new self();
        $conexionParams = "mysql:host=" . $db->host . ";dbname=" . $db->dbName;
        
        try {
            $pdo = new PDO($conexionParams, $db->username, $db->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo; 
        } catch (PDOException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }
}
