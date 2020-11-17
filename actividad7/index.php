<?php
/**
 * IAW-UD2-A5 - Actividad 7
 *
 * Escribe un programa que realice las siguientes acciones:
 *  - Muestra por pantalla 10 palabras en inglés y su traducción. Sus valores deben estar almacenados en una variable de tipo array.
 *  - Muéstralas en una tabla con 2 columnas `<table>`.
 */

$listadoPalabras = [
    "Agua" => "Water",
    "Teclado" => "Keyboard",
    "Ordenador" => "Computer",
    "UCP" => "CPU",
    "Borrador" => "Board rubber",
    "Pizarra" => "White Board",
    "Pantalla" => "Monitor",
    "Casa" => "House",
    "Coche" => "Car",
    "Perro" => "Dog"
];

echo "<h2>Listado Palabras</h2>";

foreach ($listadoPalabras as $k => $v) {
    echo "<p>$k : $v</p>";
}

echo "<h2>Listado Palabras en tabla</h2>";

echo "<table>";
echo "<tr><th>Español</th><th>Inglés</th></tr>";
foreach ($listadoPalabras as $k => $v) {
    echo "<tr><td>$k</td><td>$v</td></tr>";
}
echo "</table>";