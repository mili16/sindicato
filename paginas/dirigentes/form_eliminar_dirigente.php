<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/boton.css">
	<title>ELIMINAR DIRIGENTE</title>
	<style>
		h2{
			text-align: center;
			font-size: 20px;
			color: white;
            margin-top: 10px;
		}



	</style>
</head>
<body>
 <h2>ELIMINAR DIRIGENTE</h2>

	<form class="sign-up" action="form_eliminar_dirigente.php" method="post">

		<input type="text" class="sign-up-input" name="eliminar"  placeholder="INGRESE CODIGO A ELIMINAR" required>


		<input type="submit" class="sign-up-input" class="sign-up-button" value="ELIMINAR" name="btn1" required>
	</form>



</body>
</html>
<?php
 //CONSULTA 
if(isset($_POST['btn1']))
{	include("../conexion.php");
$id_dirigente = $_POST['eliminar']; 
$conexion ->query("delete from dirigentes  where id_dirigente = '".$id_dirigente."'");


 echo "<div class='correcto'><span class='icon icon-smile'></span> Dirigente  eliminado </div>";//MENSAJE DE "ELIMINADO"
 }
 else{ 
 echo "<div class='error'><span class='icon icon-sad2'></span> No se pudo Eliminar</div>";//MENSAJE DE NO ELIMINADO
} 
?>
