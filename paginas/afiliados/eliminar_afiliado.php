<?php 
include("../../conexion.php");

$afiliados="SELECT * FROM afiliado ORDER BY afiliado.ape_afiliado ASC";
$queryAfiliados=$conexion->query($afiliados);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/menu.css">
<link rel="stylesheet" type="text/css" href="../../css/cursos.css">
        <link rel="stylesheet" href="../../css/boton.css">
	<title>ELIMINAR AFILIADO</title>

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
	<h1>ELIMINAR AFILIADOS</h1>
    <hr>
<button class="boton"><a href="../afiliados.php">Volver</a></button>
		<form action="eliminar_afiliado.php" method="POST" >
			
<table>
	<tr>
		<th>id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Dni</th>
		<th>Seleccionar</th>
	</tr>
	<?php 

	while($registroAfiliado=$queryAfiliados->fetch_array(MYSQLI_BOTH)){
		echo'<tr>
				<td>'.$registroAfiliado['id_afiliado'].'</td>
				<td>'.$registroAfiliado['nom_afiliado'].'</td>
				<td>'.$registroAfiliado['ape_afiliado'].'</td>
				<td>'.$registroAfiliado['dni_afiliado'].'</td>
				<td><input type="checkbox" name="eliminar[]" value="'.$registroAfiliado['id_afiliado'].'"/> </td>
			</tr>';
		}

	?>

</table>

<div id="contenedor">
<input type="submit" name="borrar" value="Eliminar registros" class="boton"/>
<button class="boton">Recargar</button>
</div>
<?php 

if(isset($_POST['borrar']))
{ 
	if (empty($_POST['eliminar'])) 
	{
		echo "<div class='error'><span class='icon icon-sad2'></span> No se ha seleccionado ningun Registro</div>";
	}

	else{
		foreach ($_POST['eliminar'] as $id_borrar) {
			$borrarAfiliado=$conexion->query("DELETE FROM afiliado where id_afiliado='$id_borrar'");
			echo "<div class='correcto'><span class='icon icon-smile'></span> Registros Eliminados </div>";
		}
	}
} 
?>

</form>



</body>
</html>




