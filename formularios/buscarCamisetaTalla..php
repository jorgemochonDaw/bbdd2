<section>
    <h3>Buscar datos en la tabla camiseta por talla</h3>
    <form action="index.php" method="post">
        <label for="talla" class="form-label">Talla:</label>
        <input type="number" name="talla" class="form-control">
        <input class="btn btn-primary mt-3" type="submit" name="buscarCamiseta" value="Buscar camisetas">
    </form>
</section>
<?php

use Ropa\Camiseta;

if (isset($_POST['buscarCamiseta'])) {
    $talla = $_POST['talla'];
    $foundCamiseta = Camiseta::findByTallaCamiseta($talla);
    require_once './tablas/foundCamiseta.php';
}
?>