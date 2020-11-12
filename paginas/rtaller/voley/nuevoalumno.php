<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../css/style.css">
        <link rel="stylesheet" href="../../../css/boton.css">
        <link href="../../../css/icon.css" rel="stylesheet" type="text/css" />
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

		<input type="text" class="sign-up-input" name="ape_afiliado" placeholder="APELLLIDO AFILIADO">

		<input type="text" class="sign-up-input" name="nom_afiliado" placeholder="NOMBRE AFILIADO">

		<input type="text" class="sign-up-input" name="nom_alum" placeholder="NOMBRE ALUMNO">

		<input type="text" class="sign-up-input" name="ape_alum" placeholder="APELLIDO ALUMNO">

		<input type="number" class="sign-up-input" name="dni_alum" placeholder="DNI ALUMNO">

		<input type="text" class="sign-up-input" name="familiar_alum" placeholder="PARENTESCO">


		<input type="number" class="sign-up-input" name="cel_alum" placeholder="CELULAR ALUMNO">

		<input type="text" class="sign-up-input" name="fech_registro" placeholder="REGISTRO">

		<select name="nom_curso"> SELECCIONA 
                <option value="VOLEY" >VOLEY</option>
        </select>

		 <a href="#popup"> <input type="submit" class="sign-up-input" class="sign-up-button" value="REGISTRAR" name="btn1" required> </a>
	</form>

</body>
</html>


<?php 
if(isset($_POST['btn1']))
{
	include ("../../../conexion.php");


$ape_afiliado = $_POST['ape_afiliado'];
$nom_afiliado = $_POST['nom_afiliado'];
$nom_alum = $_POST['nom_alum'];
$ape_alum = $_POST['ape_alum'];
$dni_alum = $_POST['dni_alum'];
$familiar_alum = $_POST['familiar_alum'];
$cel_alum = $_POST['cel_alum'];
$fech_registro = $_POST['fech_registro'];
$nom_curso = $_POST['nom_curso'];

// echo $nombre. " ".$apellido. "".$profesor;
$conexion ->query("INSERT INTO alumnos (ape_afiliado,
									nom_afiliado,
									nom_alum,
									ape_alum,
									dni_alum,
									familiar_alum,
									cel_alum,fech_registro,
									nom_curso) 
				VALUES ('$ape_afiliado',
				'$nom_afiliado','$nom_alum','$ape_alum',
				'$dni_alum','$familiar_alum','$cel_alum','$fech_registro',
				'$nom_curso')");
	
	echo "<div class='correcto'><span class='icon icon-smile'></span> 
							Datos Ingresados </div>";
}
else
{
	

	echo "<div class='error'>
							Error:  Completar todos los datos </div>";
							
}
?>


