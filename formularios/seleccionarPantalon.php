<?php
require './tablas/pantalones.php';
?>
<style>
    .section-form {
        position: absolute;
        width: 30rem;
        left: 50rem;
        top: 73rem;
    }
</style>
<section class="section-form">
    <form action="#" method="post">
        <label class="form-lable" for="tallaPantalon">Seleccione la talla:</label>
        <input class="form-control" type="number" name="tallaPantalon">
        <input class="btn btn-outline-dark" type="submit" name="pantalon" value="Seleccionar">
    </form>
</section>



