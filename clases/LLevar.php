<?php

namespace Ropa;
use ActiveRecord\Ropa;

class Llevar extends Ropa
{
    protected static $tabla = 'llevar';
    protected static $columnasDB = ['fecha', 'pantalon', 'camiseta', 'calzado'];
    public $fecha;
    public $pers;
    public $pantalon;
    public $camiseta;
    public $calzado;

    public function __construct($tablas = [])
    {
        $this->fecha = $tablas['fecha'];
        $this->pantalon = $tablas['pantalon'] ?? '';
        $this->camiseta = $tablas['camiseta'] ?? '';
        $this->calzado = $tablas['calzado'] ?? '';
    }
}
