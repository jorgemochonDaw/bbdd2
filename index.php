<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Base de datos</title>
</head>
<?php
require './vendor/autoload.php';
require './bbdd/BBDD.php';
require_once './funciones/helpers.php';
$db = conectarDb();

use ActiveRecord\Ropa;
use Ropa\Calzado;
use Ropa\Pantalon;
use Ropa\Camiseta;
use Ropa\Llevar;
use Ropa\Marca;
use Ropa\Persona;

Ropa::connectBBDD($db);
$calzados = Calzado::showAll();
$pantalones = Pantalon::showAll();
$camisetas = Camiseta::showAll();
$estudio = Llevar::showAll();
$marcas = Marca::showAll();
$personas = Persona::showAll();
?>

<body>
    <header>
        <h1>Base de datos Ropa</h1>
    </header>
    <main class="grid">
        <section>
            <caption>Calzados</caption>
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Marca</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($calzados as $calzado) : ?>
                        <tr>
                            <td><?php echo $calzado->id ?></td>
                            <td><?php echo $calzado->talla ?></td>
                            <td><?php echo $calzado->precio ?></td>
                            <td><?php echo $calzado->marca ?></td>
                            <td><?php echo $calzado->color ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        <section>
            <caption>Pantalones</caption>
            <table class="table caption-top">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Marca</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pantalones as $pantalon) : ?>
                        <tr>
                            <td><?php echo $pantalon->id ?></td>
                            <td><?php echo $pantalon->talla ?></td>
                            <td><?php echo $pantalon->precio ?></td>
                            <td><?php echo $pantalon->marca ?></td>
                            <td><?php echo $pantalon->color ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table class="table table-dark">
        </section>
        <section>
            <caption>Camisetas</caption>
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Marca</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($camisetas as $camiseta) : ?>
                        <tr>
                            <td><?php echo $camiseta->id ?></td>
                            <td><?php echo $camiseta->talla ?></td>
                            <td><?php echo $camiseta->precio ?></td>
                            <td><?php echo $camiseta->marca ?></td>
                            <td><?php echo $camiseta->color ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table class="table table-dark">
        </section>
        <section>
            <caption>Marcas</caption>
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($marcas as $marca) : ?>
                        <tr>
                            <td><?php echo $marca->id ?></td>
                            <td><?php echo $marca->nombre ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table class="table table-dark">
        </section>
        <section>
            <caption>Personas</caption>
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Fnac</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($personas as $persona) : ?>
                        <tr>
                            <td><?php echo $persona->id ?></td>
                            <td><?php echo $persona->nombre ?></td>
                            <td><?php echo $persona->fnac ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table class="table table-dark">
        </section>
        <section>
            <caption>Estudio</caption>
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Pers</th>
                        <th>Pantalon</th>
                        <th>Camiseta</th>
                        <th>Calzado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($estudio as $r) : ?>
                        <tr>
                            <td><?php echo $r->fecha ?></td>
                            <td><?php echo $r->pers ?></td>
                            <td><?php echo $r->pantalon ?></td>
                            <td><?php echo $r->camiseta ?></td>
                            <td><?php echo $r->calzado ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table class="table table-dark">
        </section>
    </main>

    <aside id="aside">
        <h2>Manipular datos de las tablas</h2>
        <section class="flex">
            <?php require './formularios/insertarPantalon.php' ?>
        </section>
    </aside>
</body>

</html>