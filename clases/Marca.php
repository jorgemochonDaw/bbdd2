<?php

namespace Ropa;

use ActiveRecord\Ropa;

class Marca extends Ropa
{
    protected static $tabla = 'marca';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;

    public function __construct($tablas = [])
    {
        $this->id = $tablas['id'] ?? '';
        $this->nombre = $tablas['nombre'] ?? '';
    }
}
