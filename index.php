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

use Ropa\Llevar;
use Ropa\Calzado;
use ActiveRecord\Ropa;

Ropa::connectBBDD($db);
?>

<body>
    <header>
        <h1>Base de datos Ropa</h1>
    </header>
    <aside id="aside">
        <h2>Manipular datos de las tablas</h2>
        <section>
            <?php
            require './formularios/verTablas.php';
            if ($isCalzado == 1) {
                require_once './tablas/calzado.php';
            } else if ($isCamiseta == 1) {
                require './tablas/camisetas.php';
            } else if ($isLlevar == 1) {
                require './tablas/estudio.php';
            } else if ($isMarca == 1) {
                require './tablas/marca.php';
            } else if ($isPantalon == 1) {
                require './tablas/pantalones.php';
            } else if ($isPersona == 1) {
                require './tablas/persona.php';
            }
            ?>
        </section>
        <section class="flex">
            <?php require './formularios/insertarPantalon.php';
            if ($isPantalon == 1) {
                require './tablas/pantalones.php';
            }
            ?>
        </section>
        <section>
            <?php require './formularios/buscarCamisetaTalla..php'; ?>
        </section>
        <section class="mt-3">
            <form action="index.php" method="post">
                <label for="vestir">¿Te vestimos?</label>
                <select class="form-control" name="siNo">
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                <input class="btn btn-primary mt-3" type="submit" name="vestir" value="Contestar">
            </form>
        </section>
    </aside>
</body>

</html>

<?php
if (isset($_POST['vestir'])) {
    $siNo = $_POST['siNo'];
    if ($siNo == 'si') {
        $routesTabla = 'persona';
        require './formularios/vestirPersona.php';
    }
}

session_start();
$ruta;
if (isset($_POST['actualizar'])) {
    $id =  $_POST['id'];
    $_SESSION['calzadoId']  =
        array(
            $id
        );
    $ruta = '1';
}

if (isset($_POST['borrar'])) {
    $id =  $_POST['id'];
    Calzado::eliminar($id);
    require_once './tablas/calzado.php';
}

if (isset($_POST['modificarCalzado'])) {
    $calzadoNuevo = new Calzado($_POST);
    $calzadoNuevo->actualizar();
    $ruta = '2';
}

if (isset($_POST['persona'])) {
    $tallaPersona =  $_POST['tallaPersona'];
    $_SESSION['pers']  =
        array(
            $tallaPersona
        );
    $ruta = '3';
}

if (isset($_POST['pantalon'])) {
    $tallaPantalon =  $_POST['tallaPantalon'];
    $_SESSION['pantalon']  =
        array(
            $tallaPantalon
        );
    $ruta = '4';
}

if (isset($_POST['camiseta'])) {
    $tallaCamiseta =  $_POST['tallaCamiseta'];
    $_SESSION['camiseta']  =
        array(
            $tallaCamiseta
        );
    $ruta = '5';
}

if (isset($_POST['calzado'])) {
    $tallaCalzado =  $_POST['tallaCalzado'];
    $_SESSION['calzado']  =
        array(
            $tallaCalzado
        );
    // $llevarNuevo = new Llevar(2019-06-06,$_SESSION['pers'][0], $_SESSION['pantalon'][0], $_SESSION['camiseta'][0], $_SESSION['calzado'][0]);
    $valores = [
        'fecha' =>  '2000-06-06',
        'pers' => $_SESSION['pers'][0],
        'pantalon' => $_SESSION['pantalon'][0],
        'camiseta' =>  $_SESSION['camiseta'][0],
        'calzado' => $_SESSION['calzado'][0],
    ];

    $llevarNuevo = new Llevar($valores);
    $llevarNuevo->insertar();
}



require './routes/routes.php';
