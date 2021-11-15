<?php

use Ropa\Pantalon;

$pantalones = Pantalon::showAll();
?>
<caption class="mt-7">Pantalones</caption>
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
</table>