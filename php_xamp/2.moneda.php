<?php
// filepath: c:\xampp\htdocs\php\moneda.php

/*
    ---------------------------------------------------------
    Simulación de lanzamiento de moneda (Cara o Cruz)
    ---------------------------------------------------------
    Este script genera un número aleatorio (0 o 1) 
    utilizando la función rand() de PHP, y en función 
    de ese valor muestra en pantalla "Cara" o "Cruz".
*/

// Generar un número aleatorio entre 0 y 1
// Si sale 0 → representará "Cara"
// Si sale 1 → representará "Cruz"
$moneda = rand(0, 1);

// Estructura condicional para decidir el resultado
if ($moneda == 0) {
    // Si la variable $moneda es igual a 0, mostrar "Cara"
    echo "Cara";
} else {
    // En caso contrario (cuando $moneda sea 1), mostrar "Cruz"
    echo "Cruz";
}
?>
