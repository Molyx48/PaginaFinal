<html>
	<head>
		<title></title>
	</head>
<body>

<?php

	$mail = ('duvansanchezxb@gmail.com');
	$asunto= ('NUEVO MENSAJE DE PRUEBA');
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$numero = $_POST['numero'];
	$asuntos = $_POST['asuntos'];
	$mensaje = $_POST['mensaje'];
	
	$message ="
	MENSAJE DE CONTACTO
	Nombre: ".$nombre."
	correo: ".$correo."
	Numero: ".$numero."
	Asuntos: ".$asuntos."
	Mensaje: ".$mensaje."
	";	
		(mail($mail,$asunto,$message))
?>

	<script>alert("Tu mensaje ha sido enviado");</script>
	<script type="text/javascript">
	window.location="index.html";
	</script>
	
</body>
</html>