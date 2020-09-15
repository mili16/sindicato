<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/boton.css">
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


		<input type="submit" class="sign-up-input" class="sign-up-button" value="ELIMINAR" required>
	</form>

</form>


</body>
</html>



<?php
mysql_connect("localhost", "root", "") or die("conexion fallida");  //CONEXION MENSAJE DE LA BD 
mysql_select_db("sindicato")or die("falla bd"); // CONEXION A LA BASE DE DATO
$id = $_POST['eliminar']; 
$query = "delete from dirigentes  where id_dirigente = '".$id."'";  //CONSULTA 
if(mysql_query($query)){ //MUESTRA SI ES VERDADERO O FALSO 
 echo "USUARIO ".$id." ELIMINADO";//MENSAJE DE "ELIMINADO"
 }
 else{ 
 echo "no se elimino";//MENSAJE DE NO ELIMINADO
} 
?>
