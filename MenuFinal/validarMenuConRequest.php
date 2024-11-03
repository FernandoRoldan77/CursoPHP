
<!DOCTYPE html>
<html>
<head>
    <title>Selector de Menu</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<?php

function sinSeleccionDeMenu(){
echo  "<h2>Debe seleccionar al menos un menu para realizar el pedido 
  <br><br><button onclick=history.back() >Volver a la seleccion de menu</button>" ; 
; 
}


//validar los post
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombreMenu'])) {
$precioFinal     = 0 ;
foreach ($_POST['nombreMenu'] as $arrayDeComidas) {
  list($nombre, $precio) = explode('|', $arrayDeComidas);
  $precioFinal += (float) $precio;
  
}
echo "<h2>El total de su pedido es de: $ $precioFinal <br> 
      Tenga un buen provecho
      <br><br><button onclick=history.back() >Seleccionar nuevo plato</button> " ;
  
} 
else {   
 sinSeleccionDeMenu();
}

?>
  
</body>
</html>
  