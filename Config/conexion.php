<?php
class conexion{
    public static function conectar(){
        /*$mysqli = new mysqli("localhost", "root", "", "inventario");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }*/
        //echo $mysqli->host_info . "\n";
        
        $mysqli = new PDO("mysql: host=localhost; dbname=inventario; charset=utf8", "root", "");
        $mysqli->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $mysqli->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
        return $mysqli;
        //echo $mysqli->host_info . "\n";
    }
}
?>