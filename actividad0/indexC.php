<?php

 /*
  * Muestra en una tabla los nombre y aulas correspondientes de cada alumno
  */

$alumnos = [
    'Juan Perez' => 'Aula 221',
    'Ana García' => 'Aula 222',
    'Elena Soler' => 'Aula 223',
    'Josep Sanhís' => 'Aula 224'
];

echo "<table>";
echo "<tr>
         <th>Nombre</th><th>Aula</th>
      </tr>";
foreach ($alumnos as $k => $v) {
    echo "<tr>";
    echo "<td>$k</td><td>$v</td>";
    echo "</tr>";
}
echo "</table>";