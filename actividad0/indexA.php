<?php

/**
 * Muestra por pantalla el primer y segundo elemento.
 * Muestra por pantalla el segundo y tercer elemento concatenado "Juan - Ana"
 */

$alumnos = ['Alex','Juan','Ana','Elena','Roberto'];

echo "<p>Primero elemento: $alumnos[0]</p>";
echo "<p>Segundo elemento: $alumnos[1]</p>";
echo "<p>Segundo y tercero concatenado: ".$alumnos[1].$alumnos[2]."</p>";
