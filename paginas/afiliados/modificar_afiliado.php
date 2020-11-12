<?php 
include("../../conexion.php");
$afiliados="SELECT * FROM afiliado ORDER BY afiliado.ape_afiliado ASC";
$resAfiliados=$conexion->query($afiliados);

?>

 <!DOCTYPE html>
 <html lang="en">
 <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/menu.css">
<link rel="stylesheet" type="text/css" href="../../css/cursos.css">
        <link rel="stylesheet" href="../../css/boton.css">
	<title>ACTUALIZAR DATOS</title>

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
 	<h1>ACTUALIZAR DATOS</h1>
 	<h2> AFILIADOS</h2>
    <hr>
<button class="boton"><a href="../afiliados.php">Volver</a></button>
		

 	 <form action="modificar_afiliado.php" method="POST">
 	 	<table >
 	 		<tr>
 	 			<th>ID Afiliado</th>
 	 			<th>Nombres</th>
 	 			<th>Apellidos</th>
 	 			<th>Dni</th>
 	 		</tr>
 	 		<?php 
 	 		while($registroAfiliados=$resAfiliados->fetch_array(MYSQLI_BOTH))
 	 		{
 	 			echo '<tr>
 	 					<td><input name="idafi['.$registroAfiliados['id_afiliado'].']" value="'.$registroAfiliados['id_afiliado'].'" readonly="readonly"/> </td>
 	 				  	<td><input name="nom['.$registroAfiliados['id_afiliado'].']" value="'.$registroAfiliados['nom_afiliado'].'" /> </td>
 	 				  	<td><input name="ape['.$registroAfiliados['id_afiliado'].']" value="'.$registroAfiliados['ape_afiliado'].'" /> </td>
 	 				  	<td><input name="dni['.$registroAfiliados['id_afiliado'].']" value="'.$registroAfiliados['dni_afiliado'].'" /> </td>
 	 				  </tr>';
 	 		} ?>
 	 	</table>
 	 	<div id="contenedor">
 	 	<input type="submit" name="actualizar" class="boton" value="Actualizar Registros" />
 	 	<button class="boton">Recargar</button>
 	 	</div>

<?php 
if (isset($_POST['actualizar']))
{
	foreach ($_POST['idafi'] as $ids) 
	{
		$editID=mysqli_real_escape_string($conexion, $_POST['idafi'][$ids]);
		$editNom=mysqli_real_escape_string($conexion, $_POST['nom'][$ids]);
		$editApe=mysqli_real_escape_string($conexion, $_POST['ape'][$ids]);
		$editDni=mysqli_real_escape_string($conexion, $_POST['dni'][$ids]);

		$actualizar=$conexion->query("UPDATE afiliado SET id_afiliado='$editID', nom_afiliado='$editNom',
														 ape_afiliado='$editApe',dni_afiliado='$editDni' 
														 WHERE id_afiliado='$ids'");

	}

	if ($actualizar==true) 
	{
		echo "<div class='correcto'> Datos Modificados</div>";
	}
	else
	{
				echo "<div class='error'> No se ha modificado ningun registro</div>";
	}
} 

?>



 	 </form>

 </body>
 </html>