<?php

/**
 * Crear un archivo php y escribe un programa que realice las siguientes acciones:
 * Crea una variable con la siguiente cadena $aux="  Tratamiento de cadenas en php   "
 * Elimina los caracteres en blanco del principio y del final. Función [trim()](https://www.php.net/manual/es/function.trim.php)
 * Muestra la longitud de la cadena. Función [str_len()](https://www.php.net/manual/es/function.strlen.php)
 * Muéstrala mayúsculas. [strtoupper()](https://www.php.net/manual/es/function.strtoupper.php)
 * Muéstrala en minúsculas [strtolower()](https://www.php.net/manual/es/function.strtolower.php)
 * Muéstrala sustituyendo las letras 'o' por el número 0 (sea mayúscula o minúscula).[str_ireplace](https://www.php.net/manual/es/function.str-ireplace.php)
 */

$aux = "  Tratamiento de cadenas en php   ";
echo "<p>Cadena inicial : " . $aux . "</p>";

$aux = trim($aux);
echo "<p>La longitud de la cadena es : ". strlen($aux) . "</p>";

$aux = strtoupper($aux);
echo "<p>La cadena en mayúsculas es : ". $aux . "</p>";

$aux = strtolower($aux);
echo "<p>La cadena en minúsculas es : ". $aux . "</p>";


$aux = str_ireplace("o", 0, $aux);
echo "La cadena con reemplazo de o -> 0 es: ". $aux;