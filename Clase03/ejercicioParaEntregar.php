<html>
    <head>
        <title>Hola Mundo</title>
    </head>
    <body>
            <?php
               

                /*Actividad 1: Escribir un archivo PHP que contenga distintos tipos de datos en diferentes variables. 
                Mostrarlos en la pantalla del navegador utilizando echo.*/
                $numero = 77;
                $float  = 3.61;
                $bool   = TRUE;
                $string = "Fernando";
                $char   = 'A';
                
                echo "<h1>Resultados de la actividad 1 : <br></h1>";
                echo "El numero es $numero";
                echo "<br>";
                echo "El valor booleano es $bool";
                echo "<br>";
                echo "El string es $string";
                echo "<br>";
                echo "El char es $char";
                echo "<br>";
                echo "El numero flotante es $float";
                echo "<br>"; 
                echo "<h1>Fin actividad 1 <br></h1>";
                
                /*Actividad 2: En el mismo archivo realizar las operaciones de suma, resta, multiplicación y división, 
                mostrando el resultado en pantalla con la palabra reservada echo.*/
                
                //numeros para operar
                $x              = 10;
                $y              = 50;
                $sumar          = $x + $y;
                $resta          = $y - $x;
                $multiplicacion = $x * $y;
                $division       = $y / $x;
                
                //Resultados en operaciones con echo;
                echo "<h1>Resultados de la actividad 2 : <br></h1>";
                echo "El valor de la suma entre $x y $y es de $sumar";
                echo "<br>";
                echo "El valor de la resta entre $x y $y es de $resta";
                echo "<br>";
                echo "El valor de la multiplicacion entre $x y $y es de $multiplicacion";
                echo "<br>";
                echo "El valor de la division entre $x y $y es de $division";
                echo "<br>";
                echo "<h1>Fin actividad 2<br></h1>";
                
                
                
                
            ?>
        </p>
    </body>
</html>