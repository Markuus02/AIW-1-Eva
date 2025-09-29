3️⃣ Generar nota aleatoria y mostrar calificación

<?php
// filepath: c:\xampp\htdocs\php\notaaleatorio.php

$nota = rand(1, 10); // Genera un número aleatorio entre 1 y 10 (inclusive) y lo asigna a la variable $nota.
echo "Nota obtenida: $nota<br>"; // Imprime la frase "Nota obtenida: " seguida del valor de la variable $nota y un salto de línea.

if ($nota < 5) { // Si la nota es menor que 5:
    echo "Calificación: Insuficiente"; // Imprime "Calificación: Insuficiente".
} elseif ($nota < 6) { // De lo contrario, si la nota es menor que 6:
    echo "Calificación: Suficiente"; // Imprime "Calificación: Suficiente".
} elseif ($nota < 7) { // De lo contrario, si la nota es menor que 7:
    echo "Calificación: Bien"; // Imprime "Calificación: Bien".
} elseif ($nota < 9) { // De lo contrario, si la nota es menor que 9:
    echo "Calificación: Notable"; // Imprime "Calificación: Notable".
} else { // De lo contrario (si la nota es 9 o 10):
    echo "Calificación: Sobresaliente"; // Imprime "Calificación: Sobresaliente".
}
?>