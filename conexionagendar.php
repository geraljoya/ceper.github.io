<?php
	function Conectar(){
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$bd = "ceper";
		
		$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
	}
	
		//Conectar();
?>