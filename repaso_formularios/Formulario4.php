<?php
// Inicializar variables
$numero = '';
$error = '';
$mostrarResultado = false;
$codigoOculto = 12345;

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'] ?? '';

    if (trim($numero) === '') {
        $error = 'El campo de número no puede estar vacío. Por favor, proporciona un número.';
    } elseif (!is_numeric($numero)) {
        $error = 'El valor introducido no es un número válido.';
    } else {
        $numero = (float)$numero;
        $mostrarResultado = true;
    }
}
?>

<!-- FORMULARIO HTML -->
<h2>Formulario 4</h2>
<form method="post">
    <label for="numero">Introduce un número:</label>
    <input type="number" name="numero" id="numero" value="<?= htmlspecialchars($numero) ?>">
    <button type="submit">Enviar</button>
</form>

<!-- MENSAJE DE ERROR -->
<?php if ($error): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<!-- RESULTADO -->
<?php if ($mostrarResultado): ?>
    <h3>Resultados:</h3>
    <p>El número introducido es: <strong><?= $numero ?></strong></p>
    <p>El código oculto es: <strong><?= $codigoOculto ?></strong></p>

    <h4>Operaciones básicas:</h4>
    <ul>
        <li><?= $numero ?> + <?= $codigoOculto ?> = <?= $numero + $codigoOculto ?></li>
        <li><?= $numero ?> - <?= $codigoOculto ?> = <?= $numero - $codigoOculto ?></li>
        <li><?= $numero ?> * <?= $codigoOculto ?> = <?= $numero * $codigoOculto ?></li>
        <li><?= $numero ?> / <?= $codigoOculto ?> = <?= $numero / $codigoOculto ?></li>
    </ul>
<?php endif; ?>