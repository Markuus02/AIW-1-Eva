<?php
// Inicializar variables
$colores = [];
$error = '';
$mostrarResultado = false;

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $colores = $_POST['colores'] ?? [];

    if (empty($colores)) {
        $error = 'Por favor, selecciona al menos un color.';
    } else {
        $mostrarResultado = true;
    }
}
?>

<!-- FORMULARIO HTML -->
<h2 style="color:blue;">Formulario 5</h2>
<form method="post">
    <label for="colores">Colores Favoritos:</label><br>
    <select name="colores[]" id="colores" multiple size="4">
        <option value="Rojo" <?= in_array('Rojo', $colores) ? 'selected' : '' ?>>Rojo</option>
        <option value="Verde" <?= in_array('Verde', $colores) ? 'selected' : '' ?>>Verde</option>
        <option value="Azul" <?= in_array('Azul', $colores) ? 'selected' : '' ?>>Azul</option>
        <option value="Amarillo" <?= in_array('Amarillo', $colores) ? 'selected' : '' ?>>Amarillo</option>
    </select><br><br>
    <button type="submit">Enviar Colores</button>
</form>

<!-- MENSAJE DE ERROR -->
<?php if ($error): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<!-- RESULTADO -->
<?php if ($mostrarResultado): ?>
    <h3>Colores Seleccionados:</h3>
    <ul>
        <?php foreach ($colores as $color): ?>
            <li><?= htmlspecialchars($color) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>