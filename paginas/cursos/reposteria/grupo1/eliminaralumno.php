<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../../css/style.css">
        <link rel="stylesheet" href="../../../../css/boton.css">
	<title>ELIMINAR ALUMNO</title>

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
 <h2>ELIMINAR ALUMNO</h2>

	<form class="sign-up" action="eliminaralumno.php" method="post">

		<input type="text" class="sign-up-input" name="eliminar"  placeholder="INGRESE CODIGO A ELIMINAR" required>


		<input type="submit" class="sign-up-input" class="sign-up-button" value="ELIMINAR" required>
	</form>

</form>


</body>
</html>



<?php
mysql_connect("localhost", "root", "") or die("conexion fallida");  //CONEXION MENSAJE DE LA BD 
mysql_select_db("sindicato")or die("falla bd"); // CONEXION A LA BASE DE DATO
$id_alum = $_POST['eliminar']; 
$query = "delete from alumnos  where id_alum = '".$id_alum."'";  //CONSULTA 
if(mysql_query($query)){ //MUESTRA SI ES VERDADERO O FALSO 
 echo "ALUMNO ".$id_alum." ELIMINADO";//MENSAJE DE "ELIMINADO"
 }
 else{ 
 echo "Alumno no eliminado";//MENSAJE DE NO ELIMINADO
} 
?>
