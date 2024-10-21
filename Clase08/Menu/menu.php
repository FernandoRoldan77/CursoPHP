<!-- En base a lo trabajado con los arrays y formularios, crear un menú interactivo que permita al usuario escoger la comida, 
ingresar su nombre y dirección, y retorne el menú elegido con el precio total a abonar. -->
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
   
    <h1>Seleccione su menu</h1>
    <form action="usuario.php" method="POST">
        <h2>Nombre</h2>
        <input type="text" name="Nombre" id=""><br>
        <h2>Apellido</h2>
        <input type="text" name="Dirección" id=""><br>
        <br><br>
        <input type="submit" name="Aceptar" value="Aceptar">  
    
    </form>
    
    <!-- mostrarMenu
      <form action="menuDeArrays.php" method="POST">
          <?php for($i=1 ; $i = 3 ; $i++) ?>{
            <input type = "text" name = "elegi[]" >
         } 
        ?> -->
    
      </form>
</body>
</html>