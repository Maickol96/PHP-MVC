<?php

//clase
class NotaController{


    //metodo
    public function listar()
    {
        //LLamamos el modelo
        require_once 'models/nota.php';

        //LOGICA DE LA ACCION DEL CONTROLLER
        //creamos un objeto y setemos el atributo nombre y contenido
        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola mundo PHP MVC");

        //Vamos a listar los datos del objeto para mostrar esos datos en la vista
        require_once 'views/nota/listar.php';
    }
    public function crear()
    {

    }
    public function borrar()
    {

    }
}

