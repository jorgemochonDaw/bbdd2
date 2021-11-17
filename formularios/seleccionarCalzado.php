<?php
require './tablas/calzado.php';
?>
<style>
    .section-form {
        position: absolute;
        width: 30rem;
        left: 50rem;
        top: 100rem;
    }
</style>
<section class="section-form">
    <form action="#" method="post">
        <label class="form-lable" for="tallaCalzado">Seleccione la talla:</label>
        <input class="form-control" type="number" name="tallaCalzado">
        <input class="btn btn-outline-dark" type="submit" name="calzado" value="Seleccionar">
    </form>
</section>
