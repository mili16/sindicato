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

		<input type="text" class="sign-up-input" name="nom_dirigente" maxlength="30" placeholder="INGRESAR NOMBRE">

		<input type="text" class="sign-up-input" name="ape_dirigente" maxlength="30" placeholder="INGRESAR PELLIDO">

		<input type="number" class="sign-up-input" name="dni_dirigente" maxlength="8" placeholder="INGRESE DNI">

		<input type="text" class="sign-up-input" name="cargo_dirigente" placeholder="INGRESE CARGO">

		<input type="number" class="sign-up-input" name="cel_dirigente" maxlength="9" placeholder="INGRESE CELULAR">

		<input type="submit"   class="sign-up-input" class="sign-up-button" value="REGISTRAR" name="btn1" required> </a>
	</form>

</body>
</html>


<?php 
if(isset($_POST['btn1']))
{
	include ("../conexion.php");

$nom_dirigente = $_POST ['nom_dirigente'];
$ape_dirigente = $_POST ['ape_dirigente'];
$dni_dirigente = $_POST ['dni_dirigente'];
$cargo_dirigente = $_POST ['cargo_dirigente'];
$cel_dirigente = $_POST ['cel_dirigente'];

// echo $nombre. " ".$apellido. "".$profesor;
$conexion ->query("INSERT INTO dirigentes (nom_dirigente, ape_dirigente, dni_dirigente, cargo_dirigente, cel_dirigente) VALUES ('$nom_dirigente','$ape_dirigente','$dni_dirigente','$cargo_dirigente','$cel_dirigente')");
	echo "<div class='correcto'><span class='icon icon-smile'></span> 
							Datos Ingresados </div>";
}
else
{
	

	echo "<div class='error'><span class='icon icon-sad2'></span> 
							Error:  Completar todos los datos </div>";
							
}
?>