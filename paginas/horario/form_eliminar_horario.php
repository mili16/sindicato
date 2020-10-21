<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/boton.css">
	<title>ELIMINAR CURSO</title>
</head>
<body>
	<form class="sign-up" action="form_eliminar_horario.php" method="post">

		<input type="text" class="sign-up-input" name="eliminar" placeholder="INGRESE CODIGO A ELIMINAR">


		<input type="submit" class="sign-up-input" class="sign-up-button" value="eliminar" required>
	</form>

</form>


</body>
</html>


<?php
mysql_connect("localhost", "root", "") or die("conexion fallida");  //CONEXION MENSAJE DE LA BD 
mysql_select_db("sindicato")or die("falla bd"); // CONEXION A LA BASE DE DATO
$id = $_POST['eliminar']; 
$query = "delete from cursos  where id_curso = '".$id."'";  //CONSULTA 
if(mysql_query($query)){ //MUESTRA SI ES VERDADERO O FALSO 
 echo "CURSO ".$id." ELIMINADO";//MENSAJE DE "ELIMINADO"
 }
 else{ 
 echo "no se elimino";//MENSAJE DE NO ELIMINADO
} 
?>
