<?php
//CONTROLLERS
//CLASE
class UsuarioController{


    //METODOS
    //Funcion para la vista mostrar-todo.php
    public function mostrarTodos()
    {
        //cargamos modelo
        require_once 'models/usuario.php';

        //objeto
        $usuario = new Usuario();
        $todos_los_usuarios = $usuario->conseguirTodos('usuarios');

        //vamos a mostrar la view mostrarTodos
        require_once 'views/usuarios/mostrar-todos.php';
    }

    //METODO
    //Funcion para la vista de crear.php
    public function crear()
    {
        //vamos a mostrar la view crear
        require_once 'views/usuarios/crear.php';
    }
}