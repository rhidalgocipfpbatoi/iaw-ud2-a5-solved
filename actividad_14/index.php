<?php

/** Crear un archivo php que a partir de la variable [$_SERVER](https://www.php.net/manual/es/reserved.variables.server.php) muestre por pantalla:
 * El nombre del archivo del script php que se está ejecutando.
 * El nombre del navegador userAgent desde el que se esta llevando a cabo la petición
 * El puerto utilizado en la petición
 * La URI que se utilizó para acceder a la página
 **/

echo "<p>El script ejecutado es: " . $_SERVER['SCRIPT_FILENAME'] . "</p>";

echo "<p>El navegador es: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";

echo "<p>El puerto utilizado en la petición es: local-> " . $_SERVER['SERVER_PORT'] . " remoto-> " . $_SERVER['REMOTE_PORT'] . "</p>";

echo "<p>La uri utilizada es: " . $_SERVER['REQUEST_URI'] . "</p>";