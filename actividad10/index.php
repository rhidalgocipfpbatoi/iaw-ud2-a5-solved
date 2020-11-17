<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IAW-UD2-A5</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style_a7.css">
</head>
<body>
<!--
 Escribe un programa que realice las siguientes acciones:
  * Inicialice un array con los datos del perfil de una red social de un usuario; `nombre, apellidos y saludo de bienvenida`.
  * Muestre por pantalla los datos a través del widget facilitado.
 -->
<?php

$alumno = [
        "nombre" => "Pepito",
        "apellidos" => "Perez Juan",
        "saludo" => "Hola a todos"
];

?>

<div class="content">
    <figure class="snip1559">
        <div class="profile-image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample7.jpg" alt="profile-sample7" /></div>
        <figcaption>
            <h3><?=$alumno["nombre"]?></h3>
            <h5><?=$alumno["apellidos"]?></h5>
            <p><?=$alumno["saludo"]?></p>
            <div class="icons"><a href="#"><i class="ion-social-reddit"></i></a>
                <a href="#"> <i class="ion-social-twitter"></i></a>
                <a href="#"> <i class="ion-social-vimeo"></i></a>
            </div>
        </figcaption>
    </figure>
</div>
</body>
</html>