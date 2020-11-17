<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A5</title>
</head>
<body>
<!-- Escribe un programa que muestre la imagen de un animal al azar -->
<h1>Animales</h1>
<p>Actualice la página para mostrar un nuevo animal.</p>
<?php

$listadoAnimales = [
    'ballena.svg',
    'caballito-mar.svg',
    'camello.svg',
    'cebra.svg',
    'elefante.svg',
    'hipopotamo.svg',
    'jirafa.svg',
    'leon.svg',
    'leopardo.svg',
    'medusa.svg',
    'mono.svg',
    'oso.svg',
    'oso-blanco.svg',
    'pajaro.svg',
    'pinguino.svg',
    'rinoceronte.svg',
    'serpiente.svg',
    'tigre.svg',
    'tortuga.svg',
    'tortuga-marina.svg',
];

$selectedAnimal = $listadoAnimales[mt_rand(0,count($listadoAnimales-1))];

?>
<p><img src="../assets/images/animales/<?=$selectedAnimal?>" alt="Animal" height="250"></p>
</body>
</html>