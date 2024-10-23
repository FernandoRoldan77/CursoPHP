 
 <?php
  
      $nombre   = $_REQUEST['nombre'];
      $email    = $_REQUEST['email'];
      $password = $_REQUEST['password'];
  
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
     //Validar que el nombre no puede ser vacio.   
     if ($nombre == ""  ){
        echo "<h3>El nombre no puede estar vacio.</h3>";   
      }
     
      //Validar que el mail tenga el formato adecuado
      if ($email == "") {
         echo "<h3>El mail no puede estar vacio.<br></h3>";
      }
      elseif(strpos($email,"@")== false){
         echo "<h3>El mail debe tener un @ .<br></h3>";
       }
   
      //Validar que el password no este vacio y tenga 8 o mas caracteres.
      if($password == "") {
         echo "<h3>El password no debe estar vacio.</h3><br>";
      } 
      elseif (strlen($password <= 8)){
         echo "<h3>El password debe contener al menos 8 caracteres.</h3><br>";
      } 
      //se avisa al usuario que se validaron sus datos de forma exitosa
      else 
      echo "<h3>Su usuario a sido registrado exitosamente.<h3>";    
    
   }
?>
<p><a  href="menuConRequest.php">Continuar a la selección de menu</a></p>
 
 
