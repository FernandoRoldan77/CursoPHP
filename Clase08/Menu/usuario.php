 
 <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Para validar los datos antes de enviarlos
 
    $nombre    = $_POST['Nombre'];
    $direccion = $_POST['Dirección'];
    echo "$nombre ";
    echo "$direccion";
  } 
 ?>
 
 <!-- Validar datos -->