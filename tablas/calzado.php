<?php

use Ropa\Calzado;

$calzados = Calzado::showAll();
?>


<style>
    .section-tabla {
        position: absolute;
        width: 30rem;
        left: 60rem;
        top: 10%;
    }
</style>

<section class="section-tabla">
    <table class="table caption-top">
        <caption>Calzados</caption>
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
                    <td>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $calzado->id ?>">
                            <input class="btn btn-success mb-3" name="actualizar" type="submit" value="actualizar">
                        </form>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $calzado->id ?>">
                            <input class="btn btn-danger" type="submit" name="borrar" value="borrar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
