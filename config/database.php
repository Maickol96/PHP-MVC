<?php
//Conexion a la base de datos
class database
{
    public static function conectar()
    {
//        usamos el objeto de  mysqli
        $conexion = new mysqli("localhost", "root", "", "notas_master");
        $conexion->query("SET NAMES 'utf8'");//Para codificar en español, para que lea tildes y ñ

        return $conexion;
    }
}