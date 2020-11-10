<?php 
include("../../conexion.php");

$alumnos="SELECT * FROM alumnos WHERE nom_curso = 'reposteria'";
$queryAlumnos=$conexion->query($alumnos);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../css/menu.css">
<link rel="stylesheet" type="text/css" href="../../../css/cursos.css">
        <link rel="stylesheet" href="../../../css/boton.css">
	<title>ELIMINAR ALUMNOS</title>

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
	<h1>ELIMINAR ALUMNOS</h1>
    <hr>
<button class="boton"><a href="alumnosreposteria.php">Volver</a></button>
		<form action="eliminaralumno.php" method="POST" >
			
<table>
	<tr>
		<th>id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Curso</th>
		<th>Seleccionar</th>
	</tr>
	<?php 

	while($registroAlumno=$queryAlumnos->fetch_array(MYSQLI_BOTH)){
		echo'<tr>
				<td>'.$registroAlumno['id_alum'].'</td>
				<td>'.$registroAlumno['nom_alum'].'</td>
				<td>'.$registroAlumno['ape_alum'].'</td>
				<td>'.$registroAlumno['nom_curso'].'</td>
				<td><input type="checkbox" name="eliminar[]" value="'.$registroAlumno['id_alum'].'"/> </td>
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
			$borrarAlumno=$conexion->query("DELETE FROM alumnos where id_alum='$id_borrar'");
			echo "<div class='correcto'><span class='icon icon-smile'></span> Registros Eliminados </div>";
		}
	}
} 
?>

</form>



</body>
</html>




