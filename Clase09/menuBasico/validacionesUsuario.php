 
 <?php
  	if(isset($_POST['nombre'])){
        isset($_POST['nombre']);
        isset($_POST['password']);
        isset($_POST['email']);
     
        $nombre   = $_POST['nombre'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

   }     
     //Validar que el nombre no puede ser vacio ni tener valores numericos.
     //consultar el tema de no poner numeros en el usuario
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
    else {
      echo "<h2><font color='Green'> Su usuario a sido registrado exitosamente.</font><h2>";

      }
 ?>
 
 
