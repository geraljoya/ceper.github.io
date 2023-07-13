<?php
	require_once("conexion-cnx.php");

	$Nombre_del_deportista=$_POST["Nombre_del_deportista"];
	$Lugar=$_POST["Lugar"];
	$posicionamiento=$_POST["posicionamiento"];
	$Mensaje=$_POST["Mensaje"];
	$hora=$_POST["hora"];
	$ampm=$_POST["ampm"];
	$mes=$_POST["mes"];
	$dia=$_POST["dia"];
	$email=$_POST["email"];
	$celular=$_POST["celular"];
	
	$sql="INSERT INTO entrenamiento(Nombre_del_deportista,Lugar,posicionamiento,Mensaje,hora,ampm,mes,dia,email,celular) VALUES ('$Nombre_del_deportista','$Lugar', '$posicionamiento', '$Mensaje', '$hora', '$ampm', '$mes', '$dia', '$email', '$celular')";
	$resultado = mysqli_query(Conectar(), $sql);
	if($resultado){
		echo '<script>alert("ACEPTAR")</script> ';
		echo "<script>
				alert('Contacto insertado');
				window.location = 'ver-deportista.php';
				</script>";
	}else{
		echo "<script>
				alert('Existio alguna falla, favor de intentar nuevamente');
				window.location = 'index.php';
				</script>";
	}
	?>