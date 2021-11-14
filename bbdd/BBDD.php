<?php
function conectarDb(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '', 'ropa');

    if (!$db) {
        echo "Error: No se pudo conectar a MySQL.";
        echo "errno de depuración: " . mysqli_connect_errno();
        exit;
    } 
    return $db;
}
