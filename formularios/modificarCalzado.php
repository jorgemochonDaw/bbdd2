<?php

use Ropa\Calzado;

$calzadoUpdate = Calzado::findId($_SESSION['calzadoId'][0]);

?>

<style>
    .section-tabla {
        position: absolute;
        width: 30rem;
        left: 55rem;
        top: 10%;
    }
</style>
<section class="section-tabla">
    <h3>Modificar calzado: <?php echo $_SESSION['calzadoId'][0] ?></h3>
    <form action="#" method="post">
        <?php foreach ($calzadoUpdate as $calzado) : ?>
            <input type="hidden"  name="id" value="<?php echo $calzado->id ?>">
            <label for="talla" class="form-label">Talla:</label>
            <input type="number" name="talla" class="form-control" value="<?php echo $calzado->talla ?>">

            <label for="precio" class="form-label">Precio:</label>
            <input type="number" name="precio" class="form-control" value="<?php echo $calzado->precio ?>">

            <label for="color" class="form-label" class="form-label">Marca:</label>
            <input type="number" name="marca" class="form-control" value="<?php echo $calzado->marca ?>">

            <label for="color" class="form-label">Color:</label>
            <input type="text" name="color" class="form-control" value="<?php echo $calzado->marca ?>">

            <input class="btn btn-primary mt-3" type="submit" name="modificarCalzado" value="Modificar calzado">
        <?php endforeach; ?>
    </form>
</section>

