<!DOCTYPE html>
<html>
<head>
    <title>Login Usuario de menu</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Bienvenido, ingrese sus datos para su registro</h1>
<form action="test.php" method="POST" target="_top">
    <label for="menu">Elige tu menú:</label>
    <select name="nombreMenu[]" multiple>
        <!-- <option value="menu" value="precio"> Seleccione su menu  </option> -->
        <option value="Pollo|10000">Pollo - $10000</option>
        <option value="Empanadas|80000">Empanadas - $8000</option>
        <option value="Guiso de lentejas|12000">Guiso de lentejas - $12000</option>
        <option value="Risotto de hongos|15000">Risotto de hongos - $15000</option>
        <option value="Hummus con ensalada|9000">Hummus con ensalada - $9000</option>
        <option value="Sopa de verduras|7000">Sopa de verduras - $7000</option>
        <option value="Porotos salteados|10000">Porotos salteados - $10000</option>
    </select>
    <input type="submit" value="Confirmar plato">
</form>
    <!-- Ver como seleccionar cada valor para armar una confirmacion de mas de un pedido -->
</form>
</body>
</html>














