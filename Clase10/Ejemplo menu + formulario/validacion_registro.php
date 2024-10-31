<!DOCTYPE html>
    <body>
        <?php
            /*if (!empty($_POST["enviar"])){
                if (empty($_POST["nombre"]) or empty($_POST["email"]) or empty($_POST["password"])) {
                    echo "Uno o mas de los campos esta vacio";
                }
            }*/
            if(isset($_POST["nombre"])){
            /*($_post["nombre"]);
            ($_post ["email"]);
            ($_post["password"]);*/
            $nombre = $_POST["nombre"];
            $email= $_POST["email"];
            $password= $_POST["password"];
           
            //El validar que el nombre no este vacio ni tener numeros.
            if ($nombre == "" || is_numeric($nombre) ){
                echo "<h3>El nombre no puede estar vacio ni tener numeros.</h3>";
            }
            //validar que el emial tenga el formato correcto.
            if ($email == "" || (strpos($email, "@")== false)){
                echo "<h3>El email no puede estar vacio y debe tener un @ .<br></h3>";
            }
            //validar que el password no este vacio y tenga maximo 12 caracteres.
            if ($password == "" || strlen($password) <=12){
            echo "<h3>El password debe tener maximo 12 y no estar vacio.</h3><br>";
            }
            }
        
            $conexion = mysqli_connect("localhost", "root", "", "registro3");
            $consulta = "INSERT INTO clientes (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado){
                echo "Registro exitoso";
            }else{
                echo "Error al registrar";
            }
            mysqli_close($conexion);
        ?>
    </body>
</html>