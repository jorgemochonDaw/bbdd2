<?php

use Ropa\Llevar;

$llevarNuevo = new Llevar($_SESSION['pers'][0],$_SESSION['pantalon'][0],$_SESSION['camiseta'][0],$_SESSION['calzado'][0]);
echo $llevarNuevo->guardar();