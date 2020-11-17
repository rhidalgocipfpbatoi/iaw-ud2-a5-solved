<?php

/**
  *  A partir de la siguiente variable: $url = 'http://username:password@hostname:9090/path?arg=value';
  *  Utiliza la función `parse_url` para extraer y mostrar por pantalla las siguientes partes:
  *  El queryString de la url. (En el ejemplo `arg=value`)
  *  El protocolo utilizado. (En el ejemplo `http`)
  *  El nombre del usuario. (En el ejemplo `username`)
  *  El path de la url. (En el ejemplo `/path)`
 **/

$url = 'http://username:password@hostname:9090/path?arg=value';

$queryString = parse_url($url, PHP_URL_QUERY);
$protocol = parse_url($url, PHP_URL_SCHEME);
$userName = parse_url($url,  PHP_URL_USER);
$urlPath = parse_url($url, PHP_URL_PATH);

echo "<table>";
echo "<tr><th>key</th><th>value</th></tr>";
echo "<tr><td>Query String</td><td>$queryString</td></tr>";
echo "<tr><td>Protocolo</td><td>$protocol</td></tr>";
echo "<tr><td>Nombre de Usuario</td><td>$userName</td></tr>";
echo "<tr><td>Path</td><td>$urlPath</td></tr>";

echo "</table>";