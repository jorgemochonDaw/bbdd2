<style>
    .section-form {
        position: absolute;
        width: 30rem;
        left: 50rem;
        top: 50rem;
    }
</style>
<?php
require './tablas/camisetas.php';
?>
<section class="section-form">
    <form action="#" method="post">
        <label class="form-label" for="tallaCamiseta">Escriba la tall:</label>
        <input class="form-control" type="text" name="tallaCamiseta" class="form-control">
        <input class="btn btn-outline-dark" type="submit" name="camiseta" value="Seleccionar">
    </form>
</section>
