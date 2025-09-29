4️⃣ Día de la semana según número aleatorio

<?php
echo "<br>";
// filepath: c:\xampp\htdocs\php\dia_semana.php
// Este script genera un número aleatorio entre 1 y 7, y muestra el día de la semana correspondiente.
$dia = rand(1, 7); // Genera un número aleatorio entre 1 y 7 (inclusive) y lo almacena en la variable $dia.

switch ($dia) { // La estructura switch evalúa el valor de la variable $dia.
    case 1: // Si $dia es igual a 1:
        echo "Lunes"; // Imprime "Lunes".
        break; // Sale de la estructura switch.
    case 2: // Si $dia es igual a 2:
        echo "Martes"; // Imprime "Martes".
        break; // Sale de la estructura switch.
    case 3: // Si $dia es igual a 3:
        echo "Miércoles"; // Imprime "Miércoles".
        break; // Sale de la estructura switch.
    case 4: // Si $dia es igual a 4:
        echo "Jueves"; // Imprime "Jueves".
        break; // Sale de la estructura switch.
    case 5: // Si $dia es igual a 5:
        echo "Viernes"; // Imprime "Viernes".
        break; // Sale de la estructura switch.
    case 6: // Si $dia es igual a 6:
        echo "Sábado"; // Imprime "Sábado".
        break; // Sale de la estructura switch.
    case 7: // Si $dia es igual a 7:
        echo "Domingo"; // Imprime "Domingo".
        break; // Sale de la estructura switch.
    default: // Si $dia no coincide con ninguno de los casos anteriores:
        echo "Número inválido"; // Imprime "Número inválido".
}
?>