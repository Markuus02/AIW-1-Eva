<?php
// Lista de usuarios válidos
$usuarios = [
    "admin" => "Admin",
    "user1" => "pass1",
    "user2" => "pass2"
];

// Variables de estado
$mensaje = "";
$color = "red";
$mostrarFormulario = true;

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $clave = $_POST["clave"] ?? "";

    if (empty($usuario) || empty($clave)) {
        $mensaje = "Por favor introduzca un nombre de usuario y contraseña";
    } elseif (isset($usuarios[$usuario]) && $usuarios[$usuario] === $clave) {
        $mensaje = "Bienvenido $usuario";
        $color = "green";
        $mostrarFormulario = false; // Ocultar el formulario
    } else {
        $mensaje = "Por favor introduzca un nombre de usuario y contraseña";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FORMULARIO 1</title>
</head>
<body>
    <h2>FORMULARIO 1</h2>

    <?php if ($mensaje): ?>
        <p style="color: <?= $color ?>; font-size: <?= $color === 'green' ? '18px' : '14px' ?>; font-weight: <?= $color === 'green' ? 'bold' : 'normal' ?>">
            <?= $mensaje ?>
        </p>
    <?php endif; ?>

    <?php if ($mostrarFormulario): ?>
        <form method="post" action="">
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" name="usuario" id="usuario"><br><br>

            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave"><br><br>

            <input type="submit" value="Registrarse">
        </form>
    <?php endif; ?>
</body>
</html>