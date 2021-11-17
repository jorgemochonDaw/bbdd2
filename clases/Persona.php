<?php

namespace Ropa;

use ActiveRecord\Ropa;

class Persona extends Ropa
{
    protected static $tabla = 'persona';
    protected static $columnasDB = ['id', 'nombre', 'fnac'];

    public $id;
    public $nombre;
    public $fnac;

    public function __construct($tablas = [])
    {
        $this->id = $tablas['id'] ?? '';
        $this->nombre = $tablas['nombre'] ?? '';
        $this->fnac = $tablas['fnac'] ?? '';
    }
}
