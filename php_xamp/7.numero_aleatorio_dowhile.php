7️⃣ Mostrar números del 1 al 10 con `do while`

<?php
// filepath: c:\xampp\htdocs\php\numero_aleatorio_dowhile.php
echo "<br>";
$i = 1; // Inicializa la variable $i en 1. Esta variable actuará como contador.
do {
    echo $i . "<br>"; // Imprime el valor actual de $i seguido de un salto de línea (<br>).
    $i++; // Incrementa el valor de $i en 1 para la siguiente iteración.
} while ($i <= 10); // La condición del bucle do-while: el bucle continuará ejecutándose mientras $i sea menor o igual a 10.
?>