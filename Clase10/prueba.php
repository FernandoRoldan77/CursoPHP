
<!DOCTYPE html>
<html>
<head>
    <title>restaurante prueba</title>
</head>
<body>
    <h1>BIENVENIDO</h1>
    <form action="menu_elegido.php" method="POST">
        <h2>¿Que desea ordenar?</h2>
        <input type="checkbox" id="Comida1" value="Milanesa">
        <label for="Comida1"> Milanesa</label><br>
        <input type="checkbox" id="Comida2" value="Pizza">
        <label for="Comida2"> Pizza</label><br>
        <input type="checkbox" id="Comida3" value="Empanada">
        <label for="Comida3"> Empanada</label><br>
        <input type="checkbox" id="Comida4" value="Hamburguesa">
        <label for="Comida4"> hamburguesa</label><br>
        <input type="checkbox" id="Comida5" value="Fideos">
        <label for="Comida5"> Fideos</label><br>
<h3>cantidad de milanesas</h3>
<input type="number" name="Milanesas" id=""><br>
<h3>cantidad de Pizzas</h3>
<input type="number" name=Pizzas" id=""><br>
<h3>cantidad de Empanadas</h3>
<input type="number" name="Empanadas" id=""><br>
<h3>cantidad de Hamburguesas</h3>
<input type="number" name="Hamburguesas" id=""><br>
<h3>cantidad de Fideos</h3>
<input type="number" name="Fideos" id=""><br>
        <input type="submit" value="enviar"><br>
        <br>
    </form>
    <?php
//declaración de variables
$menues=array("milanesa","pizza","empanadas","hamburguesa","fideos");
$precios=array(7000,6000,4000,9000,7500);
//MOSTAR CARTA
echo "CARTA:"."<br>";
echo $menues[0]. ":  $". $precios[0]."<br>";
echo $menues[1]. ":  $". $precios[1]."<br>";
echo $menues[2]. ":  $". $precios[2]."<br>";
echo $menues[3]. ":  $". $precios[3]."<br>";
echo $menues[4]. ":  $". $precios[4]."<br>";
?>
</p>
</body>
</html>