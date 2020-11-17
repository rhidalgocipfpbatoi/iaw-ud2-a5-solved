<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A5</title>
</head>
<!--
    Crea un programa que simule la tirada de los dados del juego del parchís. Para ello deberás:
    * Inicializar un array con los nombres de las imágenes y el valor de su tirada.
      Las imágenes están disponibles en `/assets/images/dados/`.
-->

<?php

    $imageList = [
            "dado_1.svg","dado_2.svg","dado_3.svg","dado_4.svg","dado_5.svg","dado_6.svg"
    ];
    $selectedDado = $imageList[mt_rand(0,6)];
?>
<body>
    <img src="../assets/images/dados/<?=$selectedDado?>">
</body>
</html>