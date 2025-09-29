8️⃣ Array de 10 elementos aleatorios entre 1 y 30 + imprimir con `foreach`

<?php
// filepath: c:\xampp\htdocs\php\10_elementos.php
// Este script crea un array de 10 elementos con valores aleatorios entre 1 y 30,
// y luego imprime cada uno de estos valores en una línea separada utilizando un bucle foreach.

$numeros = []; // Inicializa un array vacío llamado $numeros. Este array almacenará los números aleatorios.

for ($i = 0; $i < 10; $i++) { // Este bucle for se ejecuta 10 veces.
    $numeros[] = rand(1, 30); // En cada iteración, genera un número aleatorio entre 1 y 30 (inclusive)
                                 // y lo agrega al final del array $numeros.
}

echo "Valores del array:<br>"; // Imprime una etiqueta HTML para indicar que los valores del array se mostrarán a continuación.
foreach ($numeros as $valor) { // Este bucle foreach itera sobre cada elemento del array $numeros.
    echo $valor . "<br>"; // En cada iteración, imprime el valor del elemento actual ($valor) seguido de una etiqueta HTML <br>
                           // para crear un salto de línea. Esto asegura que cada valor se muestre en una línea separada.
}
?>