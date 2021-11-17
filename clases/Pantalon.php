<?php

namespace Ropa;
use ActiveRecord\Ropa;

class Pantalon extends Ropa
{
    protected static $tabla = 'pantalon';
    protected static $columnasDB = ['id', 'talla', 'precio', 'marca', 'color'];

    public $id;
    public $talla;
    public $precio;
    public $marca;
    public $color;

    public function __construct($tablas = [])
    {
        $this->id = $tablas['id'] ?? null;
        $this->talla = $tablas['talla'] ?? '';
        $this->precio = $tablas['precio'] ?? '';
        $this->marca = $tablas['marca'] ?? '';
        $this->color = $tablas['color'] ?? '';
    }
}
