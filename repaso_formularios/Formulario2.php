<?php
// Inicializar variables
$comentario = '';
$error = '';
$mostrarResultado = false;

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comentario = $_POST['comentario'] ?? '';

    if (trim($comentario) === '') {
        $error = 'El campo de comentario no puede estar vacío. Por favor, proporciona un comentario.';
    } else {
        $mostrarResultado = true;
    }
}
?>

<!-- FORMULARIO HTML -->
<h2>FORMULARIO 2</h2>
<form method="post">
    <label for="comentario">Comentario:</label>
    <input type="text" name="comentario" id="comentario" value="<?= htmlspecialchars($comentario) ?>">
    <button type="submit">Enviar Comentario</button>
</form>

<!-- MENSAJE DE ERROR -->
<?php if ($error): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<!-- RESULTADO -->
<?php if ($mostrarResultado): ?>
    <h2>Gracias por tu comentario:</h2>
    <?php
    // Mostrar cada carácter en vertical
    for ($i = 0; $i < strlen($comentario); $i++) {
        echo htmlspecialchars($comentario[$i]) . "<br>";
    }
    ?>
<?php endif; ?>