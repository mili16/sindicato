<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../css/style.css">
        <link rel="stylesheet" href="../../../css/boton.css">
        <link rel="stylesheet" type="text/css" href="../../../css/icon.css">
	<title>ELIMINAR ALUMNO</title>

	<style>
		h2{
			text-align: center;
			font-size: 20px;
			color: white;
            margin-top: 10px;
		}

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
 <h2>ELIMINAR ALUMNO</h2>

	<form class="sign-up" action="eliminaralumno.php" method="post">

		<input type="text" class="sign-up-input" name="eliminar"  placeholder="INGRESE CODIGO A ELIMINAR" >


		<input type="submit" class="sign-up-input" class="sign-up-button" value="ELIMINAR" name="btn1" required>
	</form>

</form>


</body>
</html>




<?php


 //CONSULTA 
if(isset($_POST['btn1']))
{	include("conexion.php");
$id_alum = $_POST['eliminar']; 
$conexion ->query("delete from alumnos  where id_alum = '".$id_alum."'");


 echo "<div class='correcto'><span class='icon icon-smile'></span> Alumno eliminado </div>";//MENSAJE DE "ELIMINADO"
 }
 else{ 
 echo "<div class='error'><span class='icon icon-sad2'></span> Alumno no eliminado</div>";//MENSAJE DE NO ELIMINADO
} 
?>
