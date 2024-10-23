<!-- En base a lo trabajado durante las clases anteriores, vamos a avanzar en nuestro proyecto añadiendo una validación para el menú solicitado. 
 Para encargar el pedido en nuestra web, el cliente deberá registrarse colocando sus datos: nombre, email, contraseña. 
 Realizar un formulario que obtenga dichos datos y los valide. 
 Si alguno de ellos es incorrecto, el cliente deberá ser informado para corregirlo y, 
 si todos son correctos, deberá recibir el mensaje de registro exitoso en la pantalla. -->
 
<!DOCTYPE html>
<html>
<head>
    <title>Login Usuario de menu</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
   
    <h1>Bienvenido, ingrese sus datos para su registro</h1>
    <form action="validacionesUsuarioConRequest.php" method="POST" target = "_top">
        <h2>Nombre:</h2>
        <input type="text" name="nombre" ><br>
        <h2>Contraseña:</h2>
        <input type="password"  pattern=".{8,}" name="password"><br>
        <h2>Email:</h2>
        <input type="mail" name="email" id=""><br>
        <br><br>
        <input type="submit" name="Aceptar"  value="Aceptar">  
    </form>
    
</body>
</html>