<?php
// Inicializar variables
$pais = '';
$preferencias = [];
$error = '';
$mostrarResultado = false;

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pais = $_POST['pais'] ?? '';
    $preferencias = $_POST['preferencias'] ?? [];

    // Validación
    if ($pais === '' || empty($preferencias)) {
        $error = 'Por favor, completa todas las selecciones en el formulario.';
    } else {
        $mostrarResultado = true;
    }
}
?>

<!-- FORMULARIO HTML -->
<h2 style="color:blue;">Formulario 6</h2>
<form method="post">
    <label for="pais">País de Residencia:</label><br>
    <select name="pais" id="pais">
        <option value="">-- Selecciona un país --</option>
        <option value="España" <?= $pais === 'España' ? 'selected' : '' ?>>España</option>
        <option value="México" <?= $pais === 'México' ? 'selected' : '' ?>>México</option>
        <option value="Argentina" <?= $pais === 'Argentina' ? 'selected' : '' ?>>Argentina</option>
        <option value="Colombia" <?= $pais === 'Colombia' ? 'selected' : '' ?>>Colombia</option>
    </select><br><br>

    <fieldset>
        <legend>Preferencias:</legend>
        <label><input type="checkbox" name="preferencias[]" value="Opción 1"
            <?= in_array('Opción 1', $preferencias) ? 'checked' : '' ?>> Opción 1</label><br>
        <label><input type="checkbox" name="preferencias[]" value="Opción 2"
            <?= in_array('Opción 2', $preferencias) ? 'checked' : '' ?>> Opción 2</label>
    </fieldset><br>

    <button type="submit">Enviar Datos</button>
</form>

<!-- MENSAJE DE ERROR -->
<?php if ($error): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<!-- RESULTADO -->
<?php if ($mostrarResultado): ?>
    <h3>País Seleccionado:</h3>
    <p><?= htmlspecialchars($pais) ?></p>

    <h3>Preferencias Seleccionadas:</h3>
    <ul>
        <?php foreach ($preferencias as $opcion): ?>
            <li><?= htmlspecialchars($opcion) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>