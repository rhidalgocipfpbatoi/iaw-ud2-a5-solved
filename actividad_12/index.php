<?php

/** Crear un archivo php y escribe un programa que realice las siguientes acciones:
  * Crear un array llamado marcasCoches que contenga varias marcas y muestra por pantalla cada una de ellas mediante el acceso directo.
  * Muestra el array ordenado alfabéticamente. Utiliza la función [sort()](https://www.php.net/manual/es/function.sort.php)
  * Muestra el array en el orden inverso al que se creó. Utiliza la función  [array_reverse()](https://www.php.net/manual/es/function.array-reverse.php)
  * Muestra la posición de la marca Ferrari en el array, si no está añádela. Utiliza la función [array_search()](https://www.php.net/manual/es/function.array-search.php)
  **/

$marcasCoches = ["Ferrari", "Seat", "Volskwagen", "Ford"];

echo "<h1>Marcas de Coches</h1>";
echo "<ul>";
for ($i=0; $i < count($marcasCoches); $i++) {
    echo "<li>".$marcasCoches[$i]."</li>";
}
echo "</ul>";

echo "<h1>Marcas de Coches ordenadas</h1>";
echo "<ul>";
sort($marcasCoches);
foreach ($marcasCoches as $value){
    echo "<li>".$value."</li>";
}
echo "</ul>";

echo "<h1>Marcas de Coches invertidas</h1>";
echo "<ul>";
$marcasDeCochesInvertidas = array_reverse($marcasCoches);
foreach ($marcasDeCochesInvertidas as $value){
    echo "<li>".$value."</li>";
}
echo "</ul>";

$posicion = array_search("Ferrari", $marcasCoches);
echo "<p> La posición de Ferrari en el array inicial es: $posicion</p>";

?>
