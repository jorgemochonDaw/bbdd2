<style>
    .section-form {
        position: absolute;
        width: 30rem;
        left: 50rem;
        top: 50rem;
    }
</style>
<?php
require './tablas/persona.php';
?>
<section class="section-form">
    <form action="#" method="post">
        <label class="form-label" for="tallaPersona">Escriba el nombre de la persona:</label>
        <input class="form-control" type="text" name="tallaPersona" class="form-control">
        <input class="btn btn-outline-dark" type="submit" name="persona" value="Seleccionar">
    </form>
</section>
<?php
if (isset($_POST['persona'])) {
    $tallaPersona =  $_POST['tallaPersona'];
    $_SESSION['pers']  =
        array(
            $tallaPersona
        );
}