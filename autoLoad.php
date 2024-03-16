<?php

//Creamos la funcion auto carga le seteamos una variable que luego la vamos a usar con un include mas la extencion del archivo
function autoCargar($classname){

   include 'controllers/' .$classname. '.php';
}
spl_autoload_register('autoCargar');