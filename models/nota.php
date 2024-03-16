<?php

require_once 'modeloBase.php';

class Nota extends ModeloBase
{
    public $usuario_id;
    public $titulo;
    public $descripcion;


//   conesto heredo del padre
    public function __construct()
    {
        parent::__construct();
    }

    //Getter Ans Setter

    /**
     * @return mixed
     */
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * @param mixed $usuario_id
     */
    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function guardar()
    {
        $sql = "INSERT INTO notas(usuario_id, titulo, descripcion, fecha) VALUES($usuario_id, '{$titulo}', '$descripcion', CURDATE());";//pasamos por interpolacion de variables
        $guardado = $this->bd->query($sql);
        return $guardado;
    }


}