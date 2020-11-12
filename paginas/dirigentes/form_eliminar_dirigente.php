<?php 
include("../../conexion.php");

$dirigentes="SELECT * FROM dirigentes";
$queryDirigentes=$conexion->query($dirigentes);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/menu.css">
<link rel="stylesheet" type="text/css" href="../../css/cursos.css">
        <link rel="stylesheet" href="../../css/boton.css">
	<title>ELIMINAR DIRIGENTE</title>

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
	<h1>ELIMINAR DIRIGENTES</h1>
    <hr>
<button class="boton"><a href="../dirigentes.php">Volver</a></button>
		<form action="form_eliminar_dirigente.php" method="POST" >
			
<table>
	<tr>
		<th>ID</th>
		<th>Apellido</th>
		<th>Nombres</th>
		<th>Cargo</th>
		<th>Seleccionar</th>
	</tr>
	<?php 

	while($registroDirigente=$queryDirigentes->fetch_array(MYSQLI_BOTH)){
		echo'<tr>
				<td>'.$registroDirigente['id_dirigente'].'</td>
				<td>'.$registroDirigente['ape_dirigente'].'</td>
				<td>'.$registroDirigente['nom_dirigente'].'</td>
				<td>'.$registroDirigente['cargo_dirigente'].'</td>
				<td><input type="checkbox" name="eliminar[]" value="'.$registroDirigente['id_dirigente'].'"/> </td>
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
		echo "<div class='error'>No se ha seleccionado ningun Registro</div>";
	}

	else{
		foreach ($_POST['eliminar'] as $id_borrar) {
			$borrarDirigente=$conexion->query("DELETE FROM dirigentes where id_dirigente='$id_borrar'");
			echo "<div class='correcto'><span class='icon icon-smile'></span> Registros Eliminados </div>";
		}
	}
} 
?>

</form>



</body>
</html>




