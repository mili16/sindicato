<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../../css/style.css">
        <link rel="stylesheet" href="../../../../css/boton.css">
        <link href="../../../../css/icon.css" rel="stylesheet" type="text/css" />
	<title>NUEVO ALUMNO</title>
	<style>
		.error{
border:solid 1px #DEDEDE;
background:#FF00004F;
color:#222222;
padding:4px;
text-align:center;
		}
		.correcto{
border:solid 1px #DEDEDE;
background:#39FF99FF;
color:#222222;
padding:4px;
text-align:center;
		}
	</style>
</head>
<body>
	<form class="sign-up" action="nuevoalumno.php" method="post">

		<input type="text" class="sign-up-input" name="id_alum" placeholder="INGRESAR CODIGO">

		<input type="text" class="sign-up-input" name="ape_afiliado" placeholder="INGRESAR APELLLIDO AFILIADO">

		<input type="text" class="sign-up-input" name="nom_afiliado" placeholder="NOMBRE AFILIADO">


		<input type="text" class="sign-up-input" name="nom_alum" placeholder="NOMBRE ALUMNO">

		<input type="text" class="sign-up-input" name="ape_alum" placeholder="APELLIDO ALUMNO">

		<input type="number" class="sign-up-input" name="dni_alum" placeholder="DNI ALUMNO">

		<select name="familiar_alum" > FAMILIAR 
                <option value="ESPOSA">ESPOSA</option>
                <option value="HIJO">HIJO</option>
        </select>

		<input type="number" class="sign-up-input" name="cel_alum" placeholder="CELULAR ALUMNO">

		<select name="nom_curso"> SELECCIONA 
                <option value="REPOSTERIA" >REPOSTERIA</option>
        </select>

		<select name="grupo_alum"> SELECCIONA 
                <option value="GRUPO1" >GRUPO1</option>
        </select>

		<input type="submit" class="sign-up-input" class="sign-up-button" value="REGISTRAR" required>
	</form>

</body>
</html>


<?php 
$conexion = mysqli_connect($server,$user,$contrasena) or die ("error al conectar la base de datos");

include ("conexion.php");


$id_alum = $_POST ['id_alum'];
$ape_afiliado = $_POST ['ape_afiliado'];
$nom_afiliado = $_POST ['nom_afiliado'];
$nom_alum = $_POST ['nom_alum'];
$ape_alum = $_POST ['ape_alum'];
$dni_alum = $_POST ['dni_alum'];
$familiar_alum = $_POST ['familiar_alum'];
$cel_alum = $_POST ['cel_alum'];
$nom_curso = $_POST ['nom_curso'];
$grupo_alum = $_POST ['grupo_alum'];
// echo $nombre. " ".$apellido. "".$profesor;
if(empty($ape_afiliado) or empty($nom_afiliado) or empty($nom_alum) or empty($ape_alum) or empty($dni_alum) or empty($familiar_alum) or empty($cel_alum) or empty($nom_curso) or empty($grupo_alum)){
	echo "<div class='error'><span class='icon icon-sad2'></span> 
							Error:  Completar todos los datos </div>";
}else{
	mysql_select_db($db,$conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");
	mysql_query("INSERT INTO alumnos (id_alum,ape_afiliado,nom_afiliado, nom_alum, ape_alum, dni_alum, familiar_alum, cel_alum, nom_curso,grupo_alum) VALUES ('$id_alum','$ape_afiliado','$nom_afiliado','$nom_alum','$ape_alum','$dni_alum','$familiar_alum','$cel_alum','$nom_curso','$grupo_alum')");
	echo "<div class='correcto'><span class='icon icon-smile'></span> 
							Datos Ingresados </div>";
}

 ?>