# Conociendo el Lenguaje Php (IV)
####  Manejo de Arrays y cadenas 
[Resumen arrays](cheatSheetArrays.md)

#### Actividad Previas
Crea un fichero `indexA.php' y realiza las siguientes acciones.
  * Declara e inicializa el siguiente array
  ```php
      $alumnos = ['Alex','Juan','Ana','Elena','Roberto'];
  ```
  * Muestra por pantalla el primer y segundo elemento.
  * Muestra por pantalla el segundo y tercer elemento concatenado "Juan - Ana"

Crea un fichero `indexB.php' y realiza las siguientes acciones.
  * Declara e inicializa el siguiente array
  ```php
      $alumnos = [1,2,10,30,50];
  ```
  * Muestra por pantalla el tercer y cuarto elemento.
  * Muestra por pantalla la suma del tercer y cuarto elemento
  
Crea un fichero `indexC.php' y realiza las siguientes acciones.
  * Declara e inicializa el siguiente array
  ```php
      $alumnos = [
          'Juan Perez' => 'Aula 221'
          'Ana García' => 'Aula 222'
          'Elena Soler' => 'Aula 223'
          'Josep Sanhís' => 'Aula 224'
      ];
  ```
  * Muestra en una tabla los nombre y aulas correspondientes de cada alumno
  
#### Actividad 1
Crea un programa que realice las siguientes acciones:
  * Crear un array que contenga 10 valores del 1 al 10
  * Imprimir todos los valores utilizando la estructura `foreach`

#### Actividad 2
Crea un programa que realice las siguientes acciones:
  * Crear un array que contenga 10 nombres de personas que conozcas y el tuyo.
  * Muestra por pantalla cada uno de ellos mediante el acceso directo.
  * Muestra el número de elementos que tiene el array. Utiliza la función [count()](https://www.php.net/manual/es/function.count.php).
  * Imprime de forma aleatoria 1 nombre cada vez que se recargue la página.

#### Actividad 3
Escribe un programa que realice las siguientes acciones:
  * Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
  * Una vez inicializado el array, imprime todos los valores almacenados.
  * Calcular y mostrar el valor medio de todos los valores del array.

#### Actividad 4
Crea un array con 10 numeros enteros y utiliza la función [array_sum](https://www.php.net/manual/es/function.array-sum.php) 
para obtener la suma de los 10 elementos.

#### Actividad 5
Escribe un programa que simule la tirada de los dados del juego del parchís. Para ello deberás:
  * Inicializar un array con los nombres de las imágenes y el valor de su tirada.
    ```php
        $listadoDados = [ 'dado_1.svg'];
    ```
    Puedes encontrar las imágenes en `/assets/images/dados/`.

#### Actividad 6
Escribe un programa que muestre la imagen de un animal al azar. Estas deberán estar almacenadas en un array.
Puedes encontrar las imagenes de los animales en `/assets/images/animales`
  
#### Actividad 7
Escribe un programa que realice las siguientes acciones:
  * Muestra por pantalla 10 palabras en inglés y su traducción. Sus valores deben estar almacenados en una variable de tipo array.
  * Muéstralas en una tabla con 2 columnas `<table>`.
  
#### Actividad 8
Escribe un programa que realice las siguientes acciones:
  * Crea un array de alumnos donde cada elemento sea otro array que contenga el DNI, nombre y edad de cada alumno. 
  * Crear una tabla <html> en la que se muestran todos los datos de los alumnos.
 
#### Actividad 9 
Escribe un programa que dada la siguiente matriz, muestre la fila con el mayor número de elementos y su contenido
```php
    $matriz = [
          [1,2,3,4),
          [5,6,7],
          [9,10,11,12,5],
          [9,10]
        ];
```
Nota: Deberás utilizar la funcion [count()](https://www.php.net/manual/es/function.count.php)

#### Actividad 10 
Escribe un programa que realice las siguientes acciones:
  * Inicialice un array con los datos del perfil de una red social de un usuario; `nombre, apellidos y saludo de bienvenida`.
  * Muestre por pantalla los datos a través del widget facilitado.

#### Actividad 11
Repite la **actividad 6** pero en este caso debe aparecer la imagen junto al nombre del animal. Deberas utilizar un array
asociativo en el que guardes tanto el nombre de la imagen como el del animal.

```php
    $animales = [
          [ 
            nombre => 'jirafa'
            imagen => 'jirafa.svg'
          ],
          [ 
             nombre => 'medusa'
             imagen => 'medusa.svg'
          ]
          ....
        ];
```

#### Actividad 12
Crear un archivo php y escribe un programa que realice las siguientes acciones:
  * Crear un array llamado marcasCoches que contenga varias marcas y muestra por pantalla cada una de ellas mediante el acceso directo. 
  * Muestra el array ordenado alfabéticamente. Utiliza la función [sort()](https://www.php.net/manual/es/function.sort.php)
  * Muestra el array en el orden inverso al que se creó. Utiliza la función  [array_reverse()](https://www.php.net/manual/es/function.array-reverse.php)
  * Muestra la posición de la marca **Ferrari** en el array, si no está añadela. Utiliza la función [array_search()](https://www.php.net/manual/es/function.array-search.php)
  
#### Actividad 13
Crear un archivo php y escribe un programa que realice las siguientes acciones:
   * Crea una variable con la siguiente cadena ``$aux="  Tratamiento de cadenas en php   "``
   * Elimina los caracteres en blanco del principio y del final. Función [trim()](https://www.php.net/manual/es/function.trim.php)
   * Muestra la longitud de la cadena. Función [str_len()](https://www.php.net/manual/es/function.strlen.php)
   * Muéstrala en mayúsculas. [strtoupper()](https://www.php.net/manual/es/function.strtoupper.php)
   * Muéstrala en minúsculas [strtolower()](https://www.php.net/manual/es/function.strtolower.php)
   * Muéstrala sustituyendo las letras 'o' por el número 0 (sea mayúscula o minúscula).[str_ireplace](https://www.php.net/manual/es/function.str-ireplace.php)

#### Actividad 14
Crear un archivo php que a partir de la variable [$_SERVER](https://www.php.net/manual/es/reserved.variables.server.php) muestre por pantalla:
   * El nombre del archivo del script ``php``que se está ejecutando.
   * El nombre del navegador `userAgent` desde el que se esta llevando a cabo la petición
   * El puerto utilizado en la petición
   * La URI que se utilizó para acceder a la página

#### Actividad 15
La función [parse_url](https://www.php.net/manual/es/function.parse-url.php) nos permite extraer diferentes partes de una url.
A partir de la siguiente variable:
```php
$url = 'http://username:password@hostname:9090/path?arg=value';
```
Utiliza la función `parse_url` para extraer y mostrar por pantalla las siguientes partes:
   * El queryString de la url. (En el ejemplo `arg=value`)
   * El protocolo utilizado. (En el ejemplo `http`)
   * El nombre del usuario. (En el ejemplo `username`)
   * El path de la url. (En el ejemplo `/path)`