<?php
    include "../private/define.php";
    class Conexion{
        public static function connect(){
            $conexion = new mysqli(DB_host, DB_user, DB_pass, DB_name);
            $conexion->set_charset('utf8');
            return $conexion;
        }
    }
?>