# Manejo de arrays y cadenas (Cheat Sheet)

## Arrays y la estructura `foreach`
Un array es una estructura de datos que nos permite almacenar varios valores en una única variable.

### Arrays escalares

Para crear un array es suficiente con hacer:
```php
$productos = array();
Existen dos formas de inicializar los valores de un array indexado:

$productos = array("Disco SSD", "Memoria RAM", "Monitor");
o también asignando los valores posición a posición:

$productos = ["Disco SSD","Memoria RAM", "Monitor"];
```

Tenga en cuenta que los arrays siempre empiezan por la posición 0.

### Consultar su contenido con print_r o var_dump()

```php
print_r($productos);

var_dump($producto);
```

### Conocer el tamaño de un array con count

```php
$productos = array("Disco SSD", "Memoria RAM", "Monitor");
echo count($productos);
```

### Recorrer un array indexado con for

```php
$productos = array("Disco SSD", "Memoria RAM", "Monitor");
$numero_de_elementos = count($productos);

for ($i = 0; $i < $numero_de_elementos; $i++ ) {
    echo $productos[$i];
    echo "<br>";
}
```

### Arrays asociativos

Los arrays asociativos nos permiten usar claves en lugar de índices, para acceder a los valores del array.
Existen dos formas de inicializar los valores de un array asociativo:

```php
$edades = array("Juan" => "25", "María" => "28", "Paco" => "27");
o también asignando los valores a cada clave:

$edades["Juan" => "35" , 
        "María" => "35" , 
        "Paco" => "35"];
```

### Recorrer un array asociativo con foreach

```php
$edades = array("Juan" => "25", "María" => "28", "Paco" => "27");

foreach ($edades as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
}
```

### Arrays multinivel

Los arrays multinivel nos permiten que un array pueda alberdad otros arrays.

```php
$listadoPersonas = array(
        array( "nombre" => "Juan"
               "edad" => 27
               "dni" => "21654452Q"),
        array( "nombre" => "Elena"
               "edad" => 40
               "dni" => "21345243"),       
    );

$listadoPersonas = [
              [
               "nombre" => "Juan",
               "edad" => 27,
               "dni" => "21654452Q",
               "imagenes" => ["foto_juan_1.jpeg","foto_juan_2.jpeg"]
              ],
              [
               "nombre" => "Elena",
               "edad" => 40,
               "imagenes" =>  ["foto_elena_1.jpeg","foto_elena_2.jpeg"]
              ]       
          ]; 
```

### Acceso a arrays multinivel

El acceso a las arrays multinivel se llevara a cabo mediante la especificación de cada uno de los índices desde
los más externos al más interno.
```php

print_r($listadoPersonas[0]) // Array ( [0] => Array ( [nombre] => Juan [edad] => 27 [dni] => 21654452Q ) [1] => Array ( [nombre] => Elena [edad] => 40 [dni] => 21345243 ) ) 

$listadoPersonas[0]['nombre'] // Juan
$listadoPersonas[0]['edad'] // 27
$listadoPersonas[1]['nombre'] // Elena
$listadoPersonas[1]['imagenes'][0] // foto_elena_1.jpeg
$listadoPersonas[0]['imagenes'][0] // foto_juan_1.jpeg

```

### Recorrido de arrays multinivel

El recorrido de los arrays multinivel se llevará a cabo teniendiendo en cuenta si el subarray al que se quiere acceder
es asociativo o escalar

No es necesario que los arrays internos sean del mismo tipo

```php
foreach ($listadoPersonas as $persona) {

    $persona["nombre"]; //Muestra todos los nombres de personas
    
}

foreach ($listadoPersonas[0]['imagenes'] as $imagesPersona) {

    echo $imagesPersona; //Muestra todas las imágenes

}
```

[**Documentacion oficial arrays**](https://www.php.net/manual/es/language.types.array.php)