<?php

use Ropa\Marca;

$marcas = Marca::showAll();
?>

<style>
    .section-tabla {
        position: absolute;
        width: 30rem;
        left: 40rem;
        top: 10%;
    }
</style>

<section class="section-tabla">
    <table class="table caption-top">
        <caption>Marcas</caption>
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
    </table>
</section>