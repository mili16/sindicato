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
	<form class="sign-up" action="nuevo_afiliado.php" method="POST">


		<input type="text" class="sign-up-input" name="ape_afiliado" placeholder="APE. AFILIADO">

		<input type="text" class="sign-up-input" name="nom_afiliado" placeholder="NOM. AFILIADO">



		 <a href="#popup"> <input type="submit"   class="sign-up-input" class="sign-up-button" value="REGISTRAR" name="btn1" required> </a>
	</form>

</body>
</html>


<?php 
if(isset($_POST['btn1']))
{
	include ("../conexion.php");


$ape_afiliado = $_POST['ape_afiliado'];
$nom_afiliado = $_POST['nom_afiliado'];

// echo $nombre. " ".$apellido. "".$profesor;
$conexion ->query("INSERT INTO afiliado (ape_afiliado,
									nom_afiliado) 
				VALUES ('$ape_afiliado',
				'$nom_afiliado')");
	
	echo "<div class='correcto'><span class='icon icon-smile'></span> 
							Datos Ingresados </div>";
}
else
{
	

	echo "<div class='error'><span class='icon icon-sad2'></span> 
							Error:  Completar todos los datos </div>";
							include("cerrarbd.php");
}
?>


