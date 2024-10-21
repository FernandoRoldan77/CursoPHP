<html>
<body>
<?php
   //Array formada por el nombre del menu asociada a su precio.
    $arraysMenu = array(
                  "Pollo con papas"     => 5000,
                  "Rissoto de verduras" => 7000,
                  "Pizza"               => 6000,
                  );
                  
    //Para mostrar esa raid asociada con el nombre de menu y su precio
   foreach ($arraysMenu as $nombreMenu => $precio){
         echo "$nombreMenu precio $precio <br>";
      }     
      
//       <form action="menuDeArrays.php">
      
//   <label for="arraysMenu">seleccionar menu:</label>
//   <select id="comida" name="ArraysMenu">
//     <option value="">  </option>
   
//   </select>
//   <input type="submit">
// </form>
      
//         // Validar la existencia de las opciones seleccionadas
//         if (!empty($arraysMenu) && is_array($arraysMenu)) {
//          echo "<h3>Resumen del Pedido:</h3>";

//          $totalGeneral = 0;
//    }
//    foreach ($arraysMenu as $producto => $detalles) {
//       echo "<option value='$producto'>$producto - $$detalles[precio] (Stock: $detalles[stock])</option>";
//   };;
 ?>
 </body>
 </html>