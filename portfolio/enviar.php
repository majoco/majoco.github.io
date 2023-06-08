<?php 	
	$email = $_POST['email'];
	$package = $_POST['package'];
	$message = $_POST['message'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "package: ".$package."<br> Email: $email<br> Mensaje:".$message;


	if(mail('francicisco@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>