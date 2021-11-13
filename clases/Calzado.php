<?php

namespace Ropa;

require './../funciones/helpers.php';

class Calzado
{
    protected static $db;
    public $id;
    public $talla;
    public $precio;
    public $marca;
    public $color;

    public function __construct($tablasCalzado = [])
    {
        $this->id = $tablasCalzado['id'] ?? '';
        $this->talla = $tablasCalzado['talla'] ?? '';
        $this->precio = $tablasCalzado['precio'] ?? '';
        $this->marca = $tablasCalzado['marca'] ?? '';
        $this->color = $tablasCalzado['color'] ?? '';
    }

    public static function connectBBDD($database)
    {
        self::$db = $database;
    }

    public static function showAll()
    {
        echo 's';
        $query = "SELECT * FROM calzado";
        self::consultarSql($query);
    }

    public static function consultarSql($query)
    {
        echo '2';
        $resultado = self::$db->query($query);
        $arrayCalzado = [];
        while ($registro = $resultado->fetch_assoc()) {
            $arrayCalzado = $registro['titulo'];
        }

        echo $resultado->fetch_assoc();

        debbugear($arrayCalzado);
        
    }
}
