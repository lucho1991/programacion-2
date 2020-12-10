<?php
class Conectar{
    public static function conexion(){
        $conexion=mysqli_connect("localhost", "root", "", "trabajo_final");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>