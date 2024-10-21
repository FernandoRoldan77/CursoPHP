 
 <?php
  $mail = $_POST['Mail'];
   if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo ($mail) es válida.";
   }
  //   // Para validar los datos antes de enviarlos
 
     $nombre    = $_POST['Nombre'];
     
  //   $mail      = $_POST['Mail'];
     echo "El nombre del usuario es $nombre <br> ";
     
     //echo "$mail";
  // } 
 ?>
 
 <!-- Validar datos -->