<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil de Empleo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #fdfaf6; /* blanco roto */
        }
        header {
            background-color: #444; /* gris oscuro */
            color: white;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .perfil-card {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 900px;
            width: 100%;
            box-sizing: border-box;
        }
        .perfil-info {
            flex: 2;
            min-width: 250px;
            word-wrap: break-word;
        }
        .perfil-info p {
            margin-bottom: 12px;
        }
        .perfil-img {
            flex: 1;
            min-width: 200px;
            text-align: center;
        }
        .perfil-img img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
        }
        .volver-link {
            display: block;
            margin-top: 16px;
            text-decoration: underline;
            color: #007BFF;
            font-size: 14px;
        }
    </style>
</head>
<body>

<header>
    <h1>Confirmación de Perfil</h1>
</header>

<main>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imagen = "";
    $carpetaUploads = "uploads/";

    if (!is_dir($carpetaUploads)) {
        mkdir($carpetaUploads, 0777, true);
    }

    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
        $nombreArchivo = basename($_FILES["imagen"]["name"]);
        $rutaDestino = $carpetaUploads . $nombreArchivo;

        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino)) {
            $imagen = $rutaDestino;
        } else {
            echo "<p style='color:red;'>⚠️ No se pudo mover el archivo. Verifica permisos en la carpeta <code>uploads</code>.</p>";
        }
    }

    $nombre = $_POST["nombre"] ?? "No especificado";
    $correo = $_POST["correo"] ?? "No especificado";
    $experiencia = $_POST["experiencia"] ?? "No especificada";
    $habilidades = $_POST["habilidades"] ?? "No especificadas";

    echo "<div class='perfil-card'>";
        echo "<div class='perfil-info'>";
            echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
            echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($correo) . "</p>";
            echo "<p><strong>Experiencia Laboral:</strong><br>" . nl2br(htmlspecialchars($experiencia)) . "</p>";
            echo "<p><strong>Habilidades:</strong><br>" . nl2br(htmlspecialchars($habilidades)) . "</p>";
        echo "</div>";
        echo "<div class='perfil-img'>";
            if ($imagen) {
                echo "<img src='$imagen' alt='Imagen de perfil'>";
            }
            echo "<a class='volver-link' href='index.php'>Volver al Formulario</a>";
        echo "</div>";
    echo "</div>";
} else {
?>

<form method="POST" action="" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="experiencia">Experiencia Laboral:</label>
    <textarea id="experiencia" name="experiencia" rows="5" required></textarea>

    <label for="habilidades">Habilidades:</label>
    <textarea id="habilidades" name="habilidades" rows="4" required></textarea>

    <label for="imagen">Imagen de perfil:</label>
    <input type="file" id="imagen" name="imagen" accept="image/*">

    <input type="submit" value="Enviar">
</form>

<?php } ?>
</main>
</body>
</html>