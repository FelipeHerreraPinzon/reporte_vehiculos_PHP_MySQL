<?php
include ('datosConexion.php');
class Conexion{
    public static function conectar(){
        try {
            $conexion = new PDO("mysql:host=".SERVER.";dbname=".DBNAME, USER, PASSWORD);
            return $conexion;
        } catch (Exception $err) {
            die("el error es ". $err->getMessage());
        }
    }
}



?>