
<?php
session_start();
	require("conexion.php");

	$mail=$_POST['email'];
	$pass=$_POST['password'];

	$sql2=mysqli_query($mysqli,"SELECT * FROM user WHERE email='$mail'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id_user']=$f2['id_user'];
			$_SESSION['nombre_user']=$f2['nombre_user'];
			$_SESSION['rol']=$f2['rol'];
			echo "<script>location.href='index-entrenador.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM user WHERE email='$mail'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id_user']=$f['id_user'];
			$_SESSION['nombre_user']=$f['nombre_user'];
			$_SESSION['rol']=$f['rol'];

			echo "<script>location.href='index-deportista.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>