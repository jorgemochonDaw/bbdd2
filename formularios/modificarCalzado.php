<h3>Elige el calzado a modificar</h3>
<form action="index.php" method="post" class="form-label">
    <label for="id" class="form-label">Id:</label>
    <input type="number" name="id" class="form-control">
    <input class="btn btn-primary mt-3" type="submit" name="modificarCalzado" value="insertar nuevo pantalon">
</form>

<?php
use Ropa\Pantalon;

if (isset($_POST['modificarCalzado'])) {
    $pantalonNuevo = new Pantalon($_POST);
    $pantalonNuevo->guardar();
}
?>