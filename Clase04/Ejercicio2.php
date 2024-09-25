Ejercicio 1: Mostrar un Hola mundo en la pantalla.

<html>
<head>
<title>Hola Mundo</title>
</head>
<body>
<h1> El famoso script Hello World</h1>
<p>
<?php
echo "Hola Mundo!";
?>
</p>
</body>
</html>


Ejercicio 2: Utilizamos etiquetas HTML en PHP.


<html>
<head>
<title>Hola Mundo</title>
</head>
<body>
<h1> El famoso script Hello World</h1>
<p>
<?php
echo "<b>Hola</b> Mundo!";
?>
</p>
</body>
</html>


Ejercicio 3: Confeccionar un programa que muestre una serie de mensajes en la pagina empleando el comando ECHO. Tener en cuenta las comillas dobles.


Ejercicio 4: Uso de variables.

<html>
<head>
<title></title>
</head>
<body>
<h1>Primer ejemplo de Variables </h1>
<p>
<?php
$Name = "Miguel";
echo "Hola <b>$Name</b>, encantado de conocerte";
?>
</p>
</body>
</html>


Ejercicio 5: Concatenamos variables.

<html>
<head>
<title></title>
</head>
<body>
<h1>Segundo ejemplo de Variables usando el operador concatenacion .</h1>
<p>
<?php
$Name = "Miguel";
echo "Hola <b>" . $Name . "</b>, encantado de conocerte";
?>
</p>
</body>
</html>


Ejercicio 6: Uso del break. ¿Qué hace?

<html>
<head>
<title></title>
</head>
<body>
<h1>Break en la ventana del navegador </h1>
<p>
<?php
$Name = "Miguel";
echo "Hola <b>$Name</b>, encantado de conocerte<br>";
echo "Gracias por venir!";
?>
</p>
</body>
</html>


Ejercicio 7: Ejemplo de variacion del script anterior, para ver el formato dentro de php en avance de linea.
Notar las diferencias cuando se haga la ejecucion via VER CODIGO FUENTE del navegador.


<html>
<head>
<title></title>
</head>
<body>
<h1>Break en la ventana del navegador con signo \ </h1>
<p>
<?php
$Name = "Miguel";
echo "Hola <b>$Name</b>, encantado de conocerte<br>\n";
echo "Gracias por venir!\n";
?>
</p>
</body>
</html>


Ejercicio 8: Basados en los programas anteriores, crearemos un menú utilizando las siguientes variables:

<html>
<head>
<h1>Bienvenido al menu de La Bernalesa</h1>
</head>
<body>

<p>
<?php
    $menuEco            = "Pollo al horno con papas";
    $platoDelDia        = "Risotto de verduras";
    $precioEco          = 1000;
    $precioPlatoDelDia  = 2000;
    
    echo "El menu economico es $menuEco el cual cuesta $$precioEco.<br>";
    echo "<br>Tambien podemos ofrecer el $platoDelDia cuyo costo es de $$precioPlatoDelDia.";
?>
</p>
</body>
</html>



