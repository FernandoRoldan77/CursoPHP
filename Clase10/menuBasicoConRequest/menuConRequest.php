<!DOCTYPE html>
<html>
<head>
    <title>Login Usuario de menu</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
   
    <h1>Bienvenido, ingrese sus datos para su registro</h1>
    <form action="validarMenuConRequest.php" method="POST" target = "_top">
    <label for="menu">Elegi tu menu:</label>

    <select name="menu" id="menu" require>
    <optgroup label="Menus del dia">
        <option value="Pollo Al horno con papas">Pollo Al horno con papas</option>
        <option value="Empanadas de cordero">Empanadas de cordero</option>
        <option value="Guiso de lentejas">Guiso de lentejas</option>
    </optgroup>
    
    <optgroup label="Menu Vegetariano">
        <option value="Risotto de hongos">Risotto de hongos</option>
        <option value="Hummus con ensalada">Hummus con ensalada</option>
    </optgroup>
        
    <optgroup label="Menu sin Taac">
        <option value="Sopa de verduras">Sopa de verduras</option>
        <option value="Porotos salteados">Porotos salteados</option>
    </optgroup>
        
        <input type="submit" value="Confirmar plato">
    </select>
    
    <!-- Ver como seleccionar cada valor para armar una confirmacion de mas de un pedido -->
    </form>
    
</body>
</html>