<?php

/*
 * Muestra por pantalla el tercer y cuarto elemento.
 * Muestra por pantalla la suma del tercer y cuarto elemento
 */

$alumnos = [1,2,10,30,50];

echo "<p>Tercer elemento: $alumnos[2]</p>";
echo "<p>Cuarto elemento: $alumnos[3]</p>";
echo "<p>Suma del tercer y cuarto: ".($alumnos[2]+$alumnos[3])."</p>";
