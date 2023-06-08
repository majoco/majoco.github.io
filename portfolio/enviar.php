<?php 	
	$email = $_POST['email'];
	$package = $_POST['package'];
	$message = $_POST['message'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$message;


	if(mail('francicisco@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>