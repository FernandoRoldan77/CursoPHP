<!DOCTYPE html>
<html>
<head>
    <title>Selector de Menu</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Bienvenido al restaurant La Bernalesa, 
        seleccione su menu</h1>
    <form action="validarMenuConRequest.php" method="POST" target = "_top">
    
        <select name="nombreMenu[]" multiple size ="12" >   
        
        <optgroup label="Menu del día">
            <option value="Pollo con papas|5000">         Pollo con papas         $5000  </option>
            <option value="Empanadas de cordero|6000">    Empanadas de cordero    $6000  </option>
            <option value="Asado con ensalada rusa|7000"> Asado con ensalada rusa $7000  </option>
            <option value="Choripan con fritas|8000">     Choripan con fritas $8000      </option>
        </optgroup>
        
        <optgroup label="Menu Vegetariano">
            <option value="Sopa de fideos|8000">          Sopa de fideos          $8000  </option>
            <option value="Risotto de hongos|9000">       Risotto de hongos       $9000  </option>
            <option value="Ravioles de espinaca|10000">   Ravioles de espinaca    $10000 </option>
            <option value="Tarta de zapallo|12000">       Tarta de zapallo        $12000 </option>
        </optgroup>
        
        <optgroup label="Menu sin TAAC">
            <option value="Ensalada mixta|11000">         Ensalada mixta          $11000  </option>
            <option value="Filet de merluza  |6000">      Filet de merluza        $12000 </option>
        </optgroup>
        
        </select>
        
      <input type="submit" value="Confirmar" > 
      
    </form>
  
</body>
</html>