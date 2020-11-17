<?php
/*
 * IAW-UD2-A5 - Actividad 3
 *
 * Escribe un programa que realice las siguientes acciones:
 *   - Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
 *   - Una vez inicializado el array, imprime todos los valores almacenados.
 *   - Calcular y mostrar el valor medio de todos los valores del array.
 *
 */


$listado = [];

for ($i = 0; $i < 10; $i++) {
    $listado[] = mt_rand(1,30);
}

$sumaElementos = 0;
foreach ($listado as $value) {

    echo $value;
    $sumaElementos = $sumaElementos + $value;

}

echo "<p>La media es: ".$sumaElementos / count($listado)."</p>";