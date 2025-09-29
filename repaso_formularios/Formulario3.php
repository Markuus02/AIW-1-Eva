<?php
// Inicializar variables
$preferencias = [];
$sexo = '';
$error = '';
$mostrarResultado = false;

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $preferencias = $_POST['preferencias'] ?? [];
    $sexo = $_POST['sexo'] ?? '';

    // Validación: ambas selecciones deben estar presentes
    if (empty($preferencias) || $sexo === '') {
        $error = 'Por favor, completa todas las selecciones en el formulario.';
    } else {
        $mostrarResultado = true;
    }
}
?>

<!-- FORMULARIO HTML -->
<h2>FORMULARIO 3</h2>
<form method="post">
    <fieldset>
        <legend>Preferencias:</legend>
        <label><input type="checkbox" name="preferencias[]" value="Opción 1"
            <?= in_array('Opción 1', $preferencias) ? 'checked' : '' ?>> Opción 1</label><br>
        <label><input type="checkbox" name="preferencias[]" value="Opción 2"
            <?= in_array('Opción 2', $preferencias) ? 'checked' : '' ?>> Opción 2</label>
    </fieldset>

    <fieldset>
        <legend>Sexo:</legend>
        <label><input type="radio" name="sexo" value="Masculino"
            <?= $sexo === 'Masculino' ? 'checked' : '' ?>> Masculino</label><br>
        <label><input type="radio" name="sexo" value="Femenino"
            <?= $sexo === 'Femenino' ? 'checked' : '' ?>> Femenino</label>
    </fieldset>

    <button type="submit">Enviar Preferencias</button>
</form>

<!-- MENSAJE DE ERROR -->
<?php if ($error): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<!-- RESULTADO -->
<?php if ($mostrarResultado): ?>
    <h3>Preferencias Seleccionadas:</h3>
    <ul>
        <?php foreach ($preferencias as $opcion): ?>
            <li><?= htmlspecialchars($opcion) ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Género Seleccionado:</h3>
    <p><?= htmlspecialchars($sexo) ?></p>
<?php endif; ?>