<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/boton.css">
    <title>INGRESE CODIGO A MODIFICAR</title>
</head>
<body>
    <form class="sign-up" action="form_modificar_delegado.php" method="post">

        <input type="text" class="sign-up-input" name="codigo" placeholder="INGRESE CODIGO A MODIFICAR">

         <input type="text" class="sign-up-input" name="nombre" placeholder="INGRESAR NOMBRE">

        <input type="text" class="sign-up-input" name="apellido" placeholder="INGRESAR APELLIDO">

        <input type="text" class="sign-up-input" name="guardia" placeholder="GUARDIA">

        <input type="text" class="sign-up-input" name="area" placeholder="AREA">

        <input type="number" class="sign-up-input" name="dni" placeholder="DNI">

        <input type="number" class="sign-up-input" name="celular" placeholder="CELULAR">

        <input type="submit" class="sign-up-input" class="sign-up-button" value="MODIFICAR" required> 
    </form>


</body>
</html>

<?php 

include ("conexion.php");
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido  = $_POST['apellido'];
$guardia  = $_POST['guardia'];
$area  = $_POST['area'];
$dni  = $_POST['dni'];
$celular  = $_POST['celular'];

mysql_select_db($db, $conexion) or die ("error al conectar base de datos");

mysql_query("UPDATE delegados SET nom_delegado = '$nombre',ape_delegado='$apellido', guardia_delegado='$guardia', area_delegado='$area', dni_delegado='$dni' , cel_delegado='$celular' WHERE id_delegado = '$codigo'");

echo "  MODIFICADO CORRECTAMENTE";
 ?>
