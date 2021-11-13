<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>

<body>
    <?php
    require './vendor/autoload.php';
    require './bbdd/BBDD.php';
    require './funciones/helpers.php';

    $db = conectarDb();
    use Ropa\Calzado;

    Calzado::connectBBDD($db);
    $calzado = Calzado::showAll();
    echo $calzado;
    ?>
</body>

</html>