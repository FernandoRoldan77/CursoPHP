<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de manipulación de Arrays</title>
</head>
<body>
   
    <?php 
    //Declara dos array de tres a cinco elementos
    $arrayDeColores        = ["Azul","Negro","Blanco"];
    $arrayDeNumeros        = [ 10,20,30,40,50];
    $arrayDeNumeros2       = [100,200,300,400,500];
    $arrayDesordenada      = [100,40,55,8,3,90];
    $arrayConValorAgregado = [1,2,3];
    $valor1                = 77;

    // Ahora probá las siguientes funciones (los nombres son orientativos, reemplazalos por los que elegiste): 
    echo "<h2>Combinar 2 arrays numericas<br></h2>";
    echo "Primer array <br>";
    print_r ($arrayDeNumeros);
    echo "<br><br>Segundo array <br>";
    print_r  ($arrayDeNumeros2);
    echo "<br><br> Las 2 arrays combinadas quedarian asi : <br>";
    $arrayCombinada = array_combine($arrayDeNumeros,$arrayDeNumeros2);
    print_r($arrayCombinada);
    
  //  ¿Qué hace? ¿Qué ocurre si un array es más largo que otro? ¿Pueden usarse distintos tipos de datos?
  
   /* Combina las 2 arrays en una sola, si son de diferentes longitudes no funciona y se puede combiar datos diferentes */
    echo "<h2>Contar la cantidad de elementos de un array <br></h2>";
    echo "Array para contar sus elementos <br>";
    print_r($arrayDeColores);
    echo "<br><br>La cantidad de elementos es de: ";
    $longitud = count($arrayDeColores);
    print_r($longitud);
  //  ¿Qué hace?
  /* Retorna la longitud de la array */
    echo "<h2> Agregar un nuevo valor a una array <br></h2>";
    echo "Array sin el valor agregado <br>";
    print_r($arrayConValorAgregado);
    array_push ( $arrayConValorAgregado , $valor1 );
    echo "<br>Array con el valor agregado <br>";
    print_r($arrayConValorAgregado);
   // ¿Qué ocurre? 
   /* Agrega un $valor al final de la array*/
    echo "<h2> Sacar elementos de la array <br></h2>";
    $array = array(5,6,7,8); 
    print_r($array);
    
    unset($array[2]);
    print_r($array);
    
   // ¿Qué pasa?
   echo "<h2> Cambia el orden de los elementos en la array <br></h2>";
   echo "Array sin cambios de elementos <br>";
    print_r($arrayDeColores);
    shuffle($arrayDeColores);
    echo "<br><br>Array con cambios de elementos <br>";
    print_r($arrayDeColores);
   // ¿Qué hace?
   /* mezcla el orden de los elementos en la array*/
   
   echo "<h2> Combinar 2 arrays<br></h2>";
   echo "Array de colores <br>" ; 
   print_r($arrayDeColores);
   echo "<br><br>Array de numeros <br>" ; 
   print_r($arrayDeNumeros);
   echo "<br><br> Combinar el array de colores y de numeros en una sola <br>";
   $array_resultante= array_merge($arrayDeColores,$arrayDeNumeros);
   print_r($array_resultante);
   // ¿Y este? ¿Funciona si los arrays no tienen la misma longitud?
   echo "<h2>Ordenar una array <br></h2>";
   echo "Array con elementos desordenados<br>"; 
   print_r($arrayDesordenada);
   sort($arrayDesordenada);
   echo "<br><br>Array ordenada de menor a mayor<br>"; 
   print_r($arrayDesordenada);
    
    echo "<h2> Ordenar una array en reversa <br></h2>";
    echo "Orden inicial <br>";
    print_r ($arrayDeNumeros);
    echo "<br><br>Orden final <br>";
    rsort($arrayDeNumeros);
    print_r($arrayDeNumeros);
   // ¿Qué hacen estos? ¿Y si usas strings en lugar de integers? 

?>
</body>
</html>