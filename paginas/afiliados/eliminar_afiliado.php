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
 <h2>ELIMINAR AFILIADO</h2>

	<form class="sign-up" action="eliminar_afiliado.php" method="post">

		<input type="text" class="sign-up-input" name="eliminar"  placeholder="INGRESE CODIGO DE AFILIADO" >


		<input type="submit" class="sign-up-input" class="sign-up-button" value="ELIMINAR" name="btn1" required>
	</form>

</form>


</body>
</html>




<?php


 //CONSULTA 
if(isset($_POST['btn1']))
{	include("../conexion.php");
$id_afiliado = $_POST['eliminar']; 
$conexion ->query("delete from afiliado  where id_afiliado = '".$id_afiliado."'");


 echo "<div class='correcto'><span class='icon icon-smile'></span> Afiliado eliminado </div>";//MENSAJE DE "ELIMINADO"
 }
 else{ 
 echo "<div class='error'><span class='icon icon-sad2'></span> Afiliado no eliminado</div>";//MENSAJE DE NO ELIMINADO
} 
?>
