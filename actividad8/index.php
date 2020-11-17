<?php
/**
 * IAW-UD2-A5 - Actividad 8
 *
 * Escribe un programa que realice las siguientes acciones:
 *  - Crea un array de alumnos donde cada elemento sea otro array que contenga el DNI, nombre y edad de cada alumno.
 *  - Crear una tabla <html> en la que se muestran todos los datos de los alumnos.
 */

$alumno = [
    "dni" => "21666777Q",
    "nombre" => "21666777Q",
    "edad" => 27
];

$alumno["dni"];
$alumno["nombre"];

$listadoAlumnos = [
    [
        "dni" => "21666777Q",
        "nombre" => "Pepe",
        "edad" => 27
    ],
    [
        "dni" => "21666777Q",
        "nombre" => "Juan",
        "edad" => 27
    ]
];

echo "<table>";
echo "<tr><th>id</th><th>dni</th><th>nombre</th><th>edad</th></tr>";

foreach ($listadoAlumnos as $k => $alumno) {

    echo "<tr>";
        echo "<td>$k</td>";
        echo "<td>".$alumno["dni"]."</td>";
        echo "<td>".$alumno["nombre"]."</td>";
        echo "<td>".$alumno["edad"]."</td>";
    echo "</tr>";

}

echo "</table>";