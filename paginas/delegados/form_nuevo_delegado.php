<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/boton.css">
	<title>NUEVO DELEGADO</title>
</head>
<body>
	<form class="sign-up" action="form_nuevo_delegado.php" method="post">

		<input type="text" class="sign-up-input" name="id" placeholder="INGRESAR CODIGO">

		<input type="text" class="sign-up-input" name="nombre" placeholder="INGRESAR NOMBRE">

        <input type="text" class="sign-up-input" name="apellido" placeholder="INGRESAR APELLIDO">

        <input type="text" class="sign-up-input" name="guardia" placeholder="GUARDIA">

        <input type="text" class="sign-up-input" name="area" placeholder="AREA">

        <input type="number" class="sign-up-input" name="dni" placeholder="DNI">

        <input type="number" class="sign-up-input" name="celular" placeholder="CELULAR">

		<input type="submit" class="sign-up-input" class="sign-up-button" value="REGISTRAR" required>
	</form>

</body>
</html>


<?php 
include ("conexion.php");

$id = $_POST ['id'];
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$guardia  = $_POST['guardia'];
$area  = $_POST['area'];
$dni  = $_POST['dni'];
$celular  = $_POST['celular'];

// echo $nombre. " ".$apellido. "".$profesor;
if(empty($nombre) or empty($apellido) or empty($guardia) or empty($area) or empty($dni)or empty($celular)){
	echo "LLENAR TODOS LOS CAMPOS";
}else{
	mysql_select_db($db,$conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");
	mysql_query("INSERT INTO delegados (id_delegado,nom_delegado ,ape_delegado, guardia_delegado, area_delegado, dni_delegado, cel_delegado) VALUES ('$id','$nombre','$apellido','$guardia','$area','$dni','$celular')");
	echo "DELEGADO INGRESADO CORRECTAMENTE";
}

 ?>