<h1>Bienvenido a mi web con MVC</h1>
<?php
//CONTROLADOR FRONTAL
require_once 'controllers/usuarioControllers.php';
require_once 'controllers/notaController.php';


//Validacion de que existe el $_GET[controller]

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
    var_dump($nombre_controlador);
} else {
    echo "La pagina que buscas no existe1";
    exit();
}


//para llamar la funcion mostrarTodos()
//Condicion para recibir los datos de controller
if (class_exists($nombre_controlador)) {//Validamos que exista el dato controller por la url o por GET, y que la clase controller tambien existe
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {//si existe el parametro acction en la url por metodo get y en el controller existe el metodo get
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "La pagina que buscas no existe2";
    }

} else {
    echo "La pagina que buscas no existe3";
}

//Para no hace manualmente los objetos de conexion con el controller hacemos lo siguiente -> recibir por get en la url
