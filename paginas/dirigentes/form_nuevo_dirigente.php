<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/boton.css">
	<title>NUEVO DIRIGENTE</title>
</head>
<body>
	<form class="sign-up" action="form_nuevo_dirigente.php" method="post">

		<input type="text" class="sign-up-input" name="id" placeholder="INGRESAR CODIGO">

		<input type="text" class="sign-up-input" name="nombre" placeholder="INGRESAR NOMBRE">

		<input type="text" class="sign-up-input" name="apellido" placeholder="INGRESAR PELLIDO">

		<input type="text" class="sign-up-input" name="dni" placeholder="INGRESE DNI">

		<input type="text" class="sign-up-input" name="cargo" placeholder="INGRESE CARGO">

		<input type="text" class="sign-up-input" name="celular" placeholder="INGRESE CELULAR">

		<input type="submit" class="sign-up-input" class="sign-up-button" value="REGISTRAR" required>
	</form>

</body>
</html>


<?php 
include ("conexion.php");

$id = $_POST ['id'];
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$dni = $_POST ['dni'];
$cargo = $_POST ['cargo'];
$celular = $_POST ['celular'];

// echo $nombre. " ".$apellido. "".$profesor;
if(empty($nombre) or empty($apellido) or empty($dni) or empty($cargo) or empty($celular)){
	echo "LLENE TODOS LOS CAMPOS";
}else{
	mysqli_select_db($DB_SERVER,$con) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");
	mysqli_query("INSERT INTO dirigentes (id_dirigente,nom_dirigente, ape_dirigente, dni_dirigente, cargo_dirigente, cel_dirigente) VALUES ('$id','$nombre','$apellido','$dni','$cargo','$celular')");
	echo "INGRESADO CORRECTAMENTE";
}

 ?>