<?php
	function Conectar(){
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$bd = "entrenamiento";
		
		$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
		

		return $conexion;
	}

?>