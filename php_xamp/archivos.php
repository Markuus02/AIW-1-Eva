
1️⃣ Mostrar información de configuración de PHP
```php
<?php
phpinfo();
?>

2️⃣ Simular lanzamiento de moneda (cara o cruz)

<?php
$moneda = rand(0, 1);

if ($moneda == 0) {
    echo "Cara";
} else {
    echo "Cruz";
}
?>


3️⃣ Generar nota aleatoria y mostrar calificación

<?php
$nota = rand(1, 10);
echo "Nota obtenida: $nota<br>";

if ($nota < 5) {
    echo "Calificación: Insuficiente";
} elseif ($nota < 6) {
    echo "Calificación: Suficiente";
} elseif ($nota < 7) {
    echo "Calificación: Bien";
} elseif ($nota < 9) {
    echo "Calificación: Notable";
} else {
    echo "Calificación: Sobresaliente";
}
?>


4️⃣ Día de la semana según número aleatorio

<?php
$dia = rand(1, 7);

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Número inválido";
}
?>


5️⃣ Mostrar números del 1 al 10 con `for`

<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>
```

---

6️⃣ Mostrar números del 10 al 1 con `while`

<?php
$i = 10;
while ($i >= 1) {
    echo $i . "<br>";
    $i--;
}
?>


7️⃣ Mostrar números del 1 al 10 con `do while`

<?php
$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);
?>


8️⃣ Array de 10 elementos aleatorios entre 1 y 30 + imprimir con `foreach`

<?php
$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 30);
}

echo "Valores del array:<br>";
foreach ($numeros as $valor) {
    echo $valor . "<br>";
}
?>

