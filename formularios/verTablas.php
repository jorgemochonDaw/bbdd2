<h3>Elige la tabla que quieras ver</h3>
<form action="index.php" method="post" class="form-label">
    <label for="tabla">Elige una tabla:</label>
    <select name="tabla" multiple>
        <option value="calzado">Calzado</option>
        <option value="camiseta">Camiseta</option>
        <option value="llevar">Llevar</option>
        <option value="marca">Marca</option>
        <option value="pantalon">Pantalon</option>
        <option value="persona">Persona</option>
    </select>
    <input class="btn btn-primary mt-3" type="submit" name="select" value="Seleccionar tabla">
</form>

<?php

use Ropa\Pantalon;

if (isset($_POST['modificarCalzado'])) {
    $pantalonNuevo = new Pantalon($_POST);
    $pantalonNuevo->guardar();
}
?>