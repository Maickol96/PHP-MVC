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
        //guardo mis notas del query del metodo
        $notas = $nota->conseguirTodos('notas');

        //Vamos a listar los datos del objeto para mostrar esos datos en la vista
        require_once 'views/nota/listar.php';
    }
    public function crear()
    {
        //LLamamos el modelo
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUsuarioId(2);
        $nota->setTitulo("Hola");
        $nota->setDescripcion("Descripcion de mi nota");
        // usamos el save para guardar todos los objetos
        $guardar = $nota->guardar();


        header("Location: index.php?controller=Nota&action=listar");
    }
    public function borrar()
    {

    }
}

