<?php
/*
 *
 * IAW-UD2-A5 - Actividad 9
 *
 * Escribe un programa que dada la siguiente matriz, muestre la fila con el mayor número de elementos
 * y su contenido.
 * |1|2|3|4|
 * |5|6|7|
 * |9|10|11|12|5|
 * |9|10|
 */

$arrayMultidimensional = [
   [1,2,3,4],
   [5,6,7],
   [9,10,11,12,5],
   [9,10]
];

$maxValue = 0;
$selectedRow = 0;
foreach ($arrayMultidimensional as $index => $fila) {

    $numElements = count($fila);
    if ($numElements > $maxValue) {
        $selectedRow = $index;
        $maxValue = $numElements;
    }

}

echo "<h1>Selected row: $selectedRow</h1>";
echo "<p>";
foreach ($arrayMultidimensional[$selectedRow] as $value) {

    echo "$value,";

}
echo "</p>";