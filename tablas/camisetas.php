<?php

use Ropa\Camiseta;

$camisetas = Camiseta::showAll();
?>

<style>
    .section-tabla {
        position: absolute;
        width: 30rem;
        left: 50rem;
        top: 10%;
    }
</style>

<section class="section-tabla">
    <table class="table caption-top">
        <caption>Camisetas</caption>
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
    </table>
</section>