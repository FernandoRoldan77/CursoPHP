Condicionales - Práctica
<html>
<head>
<title>Condicion IF</title>
</head>
<body>
<h1>Condicional IF</h1>
<?php
// $a = 8;
// $b = 3;
// echo "Valor de a: ",$a," y el valor de b:",$b,"<br>";
// if ($a<$b)
// {
// echo "a es menor que b";
// }
// else
// {
// echo " a no es menor que b";
// }

echo "<h3>Ejercicio1: Mostrar un numero y determinar si dicho numero es par o impar.</h3>";
$a = 9;
echo "¿El numero $a es par o impar? <br>";
if (($a % 2) == 0){
echo "El numero $a es par";
}
else {
echo "El numero $a es impar<br>";
}


echo "<h3>Ejercicio2: Una web española de servicios tiene un pequeño problema, quiere que indiquemos en su página de inicio el día de la semana, 
      tarea sencilla de no ser por que el servidor nos proporciona el día en inglés mediante la función date().</h3><br>";

// Ayuda del ejercicio:

// La función date() con el parametro 'D' nos devuelve las tres primeras letras del día de la semana en inglés: Mon, Tue, Wed, Thu, Fri, Sat, Sun.
// Con este pequeño código $dia_ingles = date('D'); tendremos el día en la variable $dia_ingles.
// Mostrar el día en español por pantalla con el mensaje: "El día de la semana es: XXXX".

$dia_ingles = date('D');  
//CONSULTAR PORQUE NO FUNCIONA
// function traducirDia($dia_ingles, $diaEnEspaniol){
//     if ($dia_ingles == $diaEnEspaniol){
//     echo "$dia_ingles";
//         echo "El día de la semana es: $diaEnEspaniol";
//     }
// }

// traducirDia ("Mon","Lunes");
// traducirDia ("Tue","Martes");
// traducirDia ("Wed","Miercoles");
// traducirDia ("Thu","Jueves");
// traducirDia ("Fri","Viernes");
// traducirDia ("Sat","Sabado");
// traducirDia ("Sun","Domingo");

if ($dia_ingles == "Mon"){
    echo "El día de la semana es: Lunes";
}
if ($dia_ingles == "Tue"){
    echo "El día de la semana es: Martes";
}
if ($dia_ingles == "Wed"){
    echo "El día de la semana es: Miercoles";
}
if ($dia_ingles == "Thu"){
    echo "El día de la semana es: Jueves";
}
if ($dia_ingles == "Fri"){
    echo "El día de la semana es: Viernes";
}
if ($dia_ingles == "Sat"){
    echo "El día de la semana es: Sabado";
}
if ($dia_ingles == "Sun"){
    echo "El día de la semana es: Domingo";
}

echo"<h3>Ejercicio3: Realizar el ejercicio anterior pero mostrando el día de la semana de lunes a viernes,
     y para sábado y domingo mostrar el mensaje: Fin de semana.</h3><br>";
     if ($dia_ingles == "Mon" || $dia_ingles == "Tue"|| $dia_ingles == "Wed"|| 
         $dia_ingles == "Thu"|| $dia_ingles == "Fri") {
        echo "Hoy es Dia de la semana";
      }
     elseif($dia_ingles == "Sat" || $dia_ingles == "Sun") {
     echo "Hoy es Fin de semana";}
     
echo "<h3>Ejercicio4: La tienda online tienda.srcodigofuente.es quiere realizar una mejora en el código de su web. 
       Necesita que la web, según el importe de la cesta, muestre un mensaje u otro al usuario. En concreto quiere que:<br><br></h3>";
$total_compra = 100;
echo "<h4>El precio de la compra es de : $total_compra<br><br></h4>";
echo"Si la compra es inferior a 30 euros se le muestre un mensaje en negrita diciendo: 'Te cobraremos 30 euros de gastos de envío'.<br><br>";
    if($total_compra < 30){
        echo"<h4>Te cobraremos 30 euros de gastos de envío</h4>";
}
      
echo"Si la compra es superior a 30 euros pero inferior a 90 deberemos mostrar un número indicando cuanto le falta para llegar a 90 euros y 
      tener gastos de envío gratuitos. <br><br>";
      //Ejemplo: '¡¡¡Con solo 33.50€ más podrás tener gastos de envío gratis!!!'
      $restoParaEnvioGratis = 90 - $total_compra;
      if (($total_compra > 30) && ($total_compra < 90)){
        echo"<h4>Te faltan $restoParaEnvioGratis euros para tener los gastos de envios gratis</h4>";
    }
      
echo"Si la compra alcanza los 90€ indicaremos un mensaje en negrita: 'Gastos de envío incluidos'.<br><br>";
    if($total_compra >= 90){
        echo "<h4>Gastos de envío incluidos.<br><br</h4>"; 
    }
    //   Para este problema disponemos de los siguientes datos:
    //   El importe total de la cesta de la compra viene en una variable $total_compra con un número decimal positivo. Ejemplo: 33.55.</h3>";

?>
</body>
</html>