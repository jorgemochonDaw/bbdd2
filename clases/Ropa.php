<?php

namespace ActiveRecord;

class Ropa
{
    protected static $db;
    protected static $tabla = '';
    protected static $columnasDB = [];

    public static function connectBBDD($database)
    {
        //Nos conectamos a la badse de datos
        self::$db = $database;
    }

    public static function consultarSql($query)
    {
        //Consultamos la base de datos
        $resultado = self::$db->query($query);
        //Iteramos los resultados
        $almacenarDatos = [];
        while ($registro = $resultado->fetch_assoc()) {
            $almacenarDatos[] = static::crearObj($registro);
        }
        //liberamos la memoria
        $resultado->free();
        //Retornamos los resultados
        return $almacenarDatos;
    }

    public static function crearObj($registro)
    {
        $objeto = new static;
        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    public static function findId($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id}";
        $resultado = self::consultarSql($query);
        return $resultado;
    }

    public static function showAll()
    {
        //Realizamos la consulta
        $query = "SELECT * FROM " . static::$tabla; //static hereda este metodo y busca este atributo en las clases hijas
        $resultado = self::consultarSql($query);
        return $resultado;
    }

    public function insertar()
    {
        $atributos = $this->santitizarAtributos();
        $query = "INSERT INTO " . static::$tabla . "(";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' ";
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";
        echo $query;
        self::$db->query($query);

    }

    public function actualizar()
    {
        $atributos = $this->santitizarAtributos();

        $valores = [];
        foreach ($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE id = '" . static::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1";
        $resultado = self::$db->query($query);
        var_dump($resultado);
        return $resultado;
    }

    public static function eliminar($id)
    {
        $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$db->escape_string($id) . "
        LIMIT 1 ";
        $query = self::$db->query($query);
    }

    public static function findByTallaCamiseta($talla)
    {
        $query = "SELECT * FROM camiseta " . " WHERE talla = ${talla}";
        $resultado = self::consultarSql($query);
        return $resultado;
    }

    public function atributos()
    {
        $atributos = [];
        foreach (static::$columnasDB as $col) {
            if ($col == 'id') continue;
            $atributos[$col] = $this->$col;
        }
        return $atributos;
    }

    public function santitizarAtributos()
    {
        $atributos = $this->atributos();
        $santizado = [];
        foreach ($atributos as $key => $value) {
            $santizado[$key] = self::$db->escape_string($value);
        }
        return $santizado;
    }
}
