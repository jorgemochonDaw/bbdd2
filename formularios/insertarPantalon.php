<h3>Insertar nuevos datos en la tabla pantalon</h3>
<form action="index.php" method="post" class="form-label">
    <label for="talla" class="form-label">Talla:</label>
    <input type="number" name="talla" class="form-control">
    <label for="precio" class="form-label">Precio:</label>
    <input type="number" name="precio" class="form-control">
    <label for="color" class="form-label" class="form-label">Marca:</label>
    <input type="number" name="marca" class="form-control">
    <label for="color" class="form-label">Color:</label>
    <input type="text" name="color" class="form-control">
    <input class="btn btn-primary mt-3" type="submit" name="insertarPantalon" value="insertar nuevo pantalon">
</form>

<?php
use Ropa\Pantalon;

if (isset($_POST['insertarPantalon'])) {
    $pantalonNuevo = new Pantalon($_POST);
    $pantalonNuevo->guardar();
}
?>