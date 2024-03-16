<?php
//agregamos la conexion de la bd
require_once 'config/database.php';

class ModeloBase
{
    //conectamos la bd dentro d esta clase para heredarla a la demas clases

    //Creamos un Atributo
    public $bd;

    //creamos un metodo
    public function __construct()
    {
        $this->bd = database::conectar();
    }


    //Metodo para poder realizar una cualquier tipo de consulta a la bd
    public function conseguirTodos($tablas){
        $query = $this->bd->query("SELECT * FROM $tablas ORDER BY id DESC");
        return $query;
    }
}