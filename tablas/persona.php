<?php

use Ropa\Persona;

$personas = Persona::showAll();
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
        <caption>Personas</caption>
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
    </table>
</section>