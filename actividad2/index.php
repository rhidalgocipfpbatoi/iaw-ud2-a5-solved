<?php
/**
 * IAW-UD2-A5 - Actividad 2
 *
 * Crea un programa que realice las siguientes acciones:
 *  - Crear un array que contenga 10 nombres de personas que conozcas y el tuyo.
 *  - Muestra por pantalla cada uno de ellos mediante el acceso directo
 *  - Muestra el número de elementos que tiene el array. Utiliza la función [count()](https://www.php.net/manual/es/function.count.php)
 *  - Imprime de forma aleatoria 1 nombre cada vez que se recargue la página.
 */

$listadoPersonas = ["Alex", "Juan", "Perez", "Ivan", "Belen", "Ernesto", "Alvaro","Tatiana","Pepa","Elena"];

echo "<p>Miembros</p>";
echo "<ul>";

for ($i = 0; $i < 10; $i++) {

    echo "<li>".$listadoPersonas[$i]."</li>";

}

echo "</ul>";

echo "<p>Num Elementos: ".count($listadoPersonas)."</p>";

echo "<p>Nombre Aleatorio: ".$listadoPersonas[rand(0,9)]."</p>";