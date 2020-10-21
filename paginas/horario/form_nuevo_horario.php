<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/boton.css">
	<title>NUEVO CURSO</title>
</head>
<body>
	<form class="sign-up" action="form_nuevo_horario.php" method="post">

		<input type="text" class="sign-up-input" name="nombre" placeholder="INGRESAR NOMBRE">

		<input type="text" class="sign-up-input" name="turno" placeholder="INGRESAR TURNO">

		<input type="text" class="sign-up-input" name="profesor" placeholder="INGRESE PROFESOR">

		<input type="submit" class="sign-up-input" class="sign-up-button" value="registrar" required>
	</form>

</body>
</html>


<?php 
include ("conexion.php");
$nombre = $_POST ['nombre'];
$turno = $_POST ['turno'];
$profesor = $_POST ['profesor'];

// echo $nombre. " ".$turno. "".$profesor;
if(empty($nombre) or empty($turno) or empty($profesor)){
	echo "LLENE TODOS LOS CAMPOS";
}else{
	mysql_select_db($db,$conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");
	mysql_query("INSERT INTO cursos (nom_curso, turno_curso, prof_curso) VALUES ('$nombre','$turno','$profesor')");
	echo "INGRESADO CORRECTAMENTE";
}

 ?>