<h3>Elige la tabla que quieras ver</h3>
<form action="index.php" method="POST" class="form-label">
    <label for="tabla" class="form-label">Elige una tabla:</label>
    <select class="form-control" name="tabla">
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
if (isset($_POST['select'])) {
    switch ($_POST['tabla']) {
        case 'calzado':
            return $isCalzado = true;
            break;
        case 'camiseta':
            return $isCamiseta = true;
            break;
        case 'llevar':
            return $isLlevar = true;
            break;
        case 'marca':
            return $isMarca = true;
            break;
        case 'pantalon':
            return $isPantalon = true;
            break;
        case 'persona':
            return $isPersona = true;
            break;
    }
}
?>