<?php 
	// Datos de la base de datos
	$server = "localhost";
	$user = "root";
	$contrasena="";
	$db="sindicato";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect($server,$user,$contrasena,$db) or die ("error al conectar la base de datos");

	 ?>