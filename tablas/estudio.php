<?php

use Ropa\Llevar;

$estudio = Llevar::showAll();
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
        <caption>Estudio</caption>
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
    </table>
</section>