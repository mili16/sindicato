<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/boton.css">
        <link href="../../css/icon.css" rel="stylesheet" type="text/css" /> 
	<title>NUEVO AFILIADO</title>
	<style>
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
	<form class="sign-up" action="nuevo_afiliado.php" method="POST">

		<input type="text" class="sign-up-input" name="id_afiliado"  maxlength="30" placeholder="ID AFILIADO">

		<input type="text" class="sign-up-input" name="ape_afiliado"  maxlength="30" placeholder="APELLIDOS">

		<input type="text" class="sign-up-input" name="nom_afiliado" maxlength="30" placeholder="NOMBRES">

		<input type="number" class="sign-up-input" name="dni_afiliado" maxlength="7" placeholder="DNI">

		<input type="text" class="sign-up-input" name="tipo_sangre" maxlength="4"placeholder="TIPO DE SANGRE">

		<input type="text" class="sign-up-input" name="direccion" maxlength="60" placeholder="DIRECCION">

		<input type="text" class="sign-up-input" name="ciudad" maxlength="21" placeholder="CIUDAD">

		<input type="text" class="sign-up-input" name="referencia_ubicacion" maxlength="40" placeholder="REFERENCIA DE UBICACION">

		<input type="text" class="sign-up-input" name="departamento" maxlength="15" placeholder="DEPARTAMENTO">

		<input type="text" class="sign-up-input" name="provincia" maxlength="22" placeholder="PROVINCIA">

		<input type="text" class="sign-up-input" name="distrito" maxlength="24" placeholder="DISTRITO">

		<input type="date" class="sign-up-input" name="fech_nac" maxlength="10" placeholder="FECHA DE NACIMIENTO">

		<input type="text" class="sign-up-input" name="grado_instruccion" maxlength="20" placeholder="GRADO DE INSTRUCCION">

		<input type="number" class="sign-up-input" name="telefono" maxlength="10" placeholder="TELEFONO/CELULAR">

		<input type="email" x-moz-errormessage="Por favor, especifique una dirección de correo válida." class="sign-up-input" name="e_mail" placeholder="EMAIL">

		<select name="area_trabajo"> SELECCIONA 
                <option value="MINA" >MINA</option>
                <option value="GEOLOGIA" >GEOLOGIA</option>
                <option value="MTTO Planta" >MANTO PLANTA</option>
                <option value="Extraccion" >EXTRACCION</option>
        </select>

		<input type="text" class="sign-up-input" name="categoria_o_cargo" maxlength="25" placeholder="CATEGORIA O CARGO">

		<input type="date" class="sign-up-input" name="fech_ingreso_empresa" maxlength="10" placeholder="INGRESO A CMC">

		<input type="text" class="sign-up-input" name="nom_padre" maxlength="30" placeholder="NOMBRES DEL PADRE">

		<input type="text" class="sign-up-input" name="ape_padre" maxlength="30" placeholder="APELLIDOS DEL PADRE">

		<input type="text" class="sign-up-input" name="nom_madre" maxlength="30" placeholder="NOMBRES DE LA MADRE">

		<input type="text" class="sign-up-input" name="ape_madre" maxlength="30" placeholder="APELLIDOS DE LA MADRE">

		<input type="text" class="sign-up-input" name="nom_esposa" maxlength="30" placeholder="NOMBRES DE ESPOSA">

		 <a href="#popup"> <input type="submit"   class="sign-up-input" class="sign-up-button" value="REGISTRAR" name="btn1" required> </a>
	</form>

</body>
</html>


<?php 
if(isset($_POST['btn1']))
{
	include ("../conexion.php");

	$id_afiliado = $_POST['id_afiliado'];
	$ape_afiliado = $_POST['ape_afiliado'];
	$nom_afiliado = $_POST['nom_afiliado'];
	$dni_afiliado=$_POST['dni_afiliado'];
	$tipo_sangre=$_POST['tipo_sangre'];
	$direccion=$_POST['direccion'];
	$ciudad=$_POST['ciudad'];
	$referencia_ubicacion=$_POST['referencia_ubicacion'];
	$departamento=$_POST['departamento'];
	$provincia=$_POST['provincia'];
	$distrito=$_POST['distrito'];
	$fech_nac=$_POST['fech_nac'];
	$grado_instruccion=$_POST['grado_instruccion'];
	$telefono=$_POST['telefono'];
	$e_mail=$_POST['e_mail'];
	$area_trabajo=$_POST['area_trabajo'];
	$categoria_o_cargo = $_POST['categoria_o_cargo'];
	$fech_ingreso_empresa=$_POST['fech_ingreso_empresa'];
	$nom_padre=$_POST['nom_padre'];
	$ape_padre=$_POST['ape_padre'];
	$nom_madre=$_POST['nom_madre'];
	$ape_madre=$_POST['ape_madre'];
	$nom_esposa=$_POST['nom_esposa'];

// echo $nombre. " ".$apellido. "".$profesor;
	$conexion ->query("INSERT INTO afiliado (id_afiliado,ape_afiliado,nom_afiliado,dni_afiliado,
		tipo_sangre,direccion,ciudad,referencia_ubicacion,departamento,provincia,distrito,fech_nac,
		grado_instruccion,telefono,e_mail,area_trabajo,categoria_o_cargo,fech_ingreso_empresa,nom_padre,ape_padre,
		nom_madre,ape_madre,nom_esposa)
		VALUES ('$id_afiliado','$ape_afiliado','$nom_afiliado','$dni_afiliado',
		'$tipo_sangre','$direccion','$ciudad','$referencia_ubicacion','$departamento','$provincia','$distrito','$fech_nac',
		'$grado_instruccion','$telefono','$e_mail','$area_trabajo','$categoria_o_cargo','$fech_ingreso_empresa',
		'$nom_padre','$ape_padre',
		'$nom_madre','$ape_madre','$nom_esposa')");
	
	echo "<div class='correcto'>&#11088; 
	Datos Ingresados </div>";
}
else
{
	

	echo "<div class='error'>&#128162;
	Error:  Completar todos los datos </div>";
	
}include("../cerrar.php");
?>


