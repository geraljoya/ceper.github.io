<?php

	$user_user=$_POST['nombre_user'];
	$mail=$_POST['email'];
	$password= $_POST['password'];
	$cofir_password=$_POST['cofir_password'];

	require("conexion.php");

	$checkemail=mysqli_query($mysqli,"SELECT * FROM user WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($password==$cofir_password)
        {
			if($check_mail>0)
            {
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				

				mysqli_query($mysqli,"INSERT INTO user VALUES('','$user_user','$password','$mail','','2')");
				
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
                
                echo " <script>location.href='index-deportista.php'</script> ";
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

?>