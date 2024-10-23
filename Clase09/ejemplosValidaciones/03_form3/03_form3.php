<?php

    // Arrays para guardar mensajes y errores:
	$aErrores = array();
	$aMensajes = array();

    // Patr�n para usar en expresiones regulares (admite letras acentuadas y espacios):
	$patron_texto = "/^[a-zA-Z������������������������������\s]+$/";

	// Comprobar si se ha enviado el formulario:
	if( !empty($_POST) )
	{

		echo "FORMULARIO RECIBIDO:<br/>";
		echo "====================<p/>";

		// Mostrar la informaci�n recibida del formulario:
		print_r( $_POST );
		echo "<hr/>";

		// Comprobar si llegaron los campos requeridos:
		if( isset($_POST['txtNombre']) && isset($_POST['txtApellidos']) )
		{
			
			// Nombre:
			if( empty($_POST['txtNombre']) )
				$aErrores[] = "Debe especificar el nombre";
			else
			{
				// Comprobar mediante una expresi�n regular, que s�lo contiene letras y espacios:
				if( preg_match($patron_texto, $_POST['txtNombre']) )
					$aMensajes[] = "Nombre: [".$_POST['txtNombre']."]";
				else
					$aErrores[] = "El nombre s�lo puede contener letras y espacios";
			}

			// Apellidos:
			if( empty($_POST['txtApellidos']) )
				$aErrores[] = "Debe especificar los apellidos";
			else
			{
				// Comprobar mediante una expresi�n regular, que s�lo contienen letras y espacios:
				if( preg_match($patron_texto, $_POST['txtApellidos']) )
					$aMensajes[] = "Apellidos: [".$_POST['txtApellidos']."]";
				else
					$aErrores[] = "Los apellidos s�lo pueden contener letras y espacios";
			}

			// Edad:
			if( (isset($_POST['txtEdad']) ) && (!empty($_POST['txtEdad'])) )
			{
				if( is_numeric($_POST['txtEdad']) )
					$aMensajes[] ="Edad: [".$_POST['txtEdad']."]";
				else
					$aErrores[] = "El campo edad debe contener un n�mero.";
			}

			// Ingl�s:
			if( isset($_POST['radIngles']) )
				$aMensajes[] = "El nivel de ingl�s es: [".$_POST['radIngles']."]";

			// Coche:
			if( isset($_POST['chkCoche']) ) 
			{
				/* 
					No hace falta comprobar el valor de la casilla de verificaci�n, ya que si 
					est� definido 'chkCoche' es que se ha marcado (al igual que sucede con
					los botones radio)
				*/
				$aMensajes[] = "Coche: [SI]";	
			}

		}
		else
		{
			echo "<p>No se han especificado todos los datos requeridos.</p>";
		}


		// Si han habido errores se muestran, sino se mostr�n los mensajes
		if( count($aErrores) > 0 )
		{
			echo "<p>ERRORES ENCONTRADOS:</p>";

			// Mostrar los errores:
			for( $contador=0; $contador < count($aErrores); $contador++ ) 
				echo $aErrores[$contador]."<br/>";
		}
		else
		{
			// Mostrar los mensajes:
			for( $contador=0; $contador < count($aMensajes); $contador++ ) 
				echo $aMensajes[$contador]."<br/>";
		}

	}
	else
	{
		echo "<p>No se ha enviado el formulario.</p>";
	}

	echo "<p><a href='03_form3.html'>Haz click aqu� para volver al formulario</a></p>";

?>