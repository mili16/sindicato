<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/boton.css">
    <title>INGRESE CODIGO PARA MODIFICAR</title>
</head>
<body>
    <form class="sign-up" action="form_modificar_dirigente.php" method="post">

        <input type="text" class="sign-up-input" name="codigo" placeholder="INGRESE CODIGO A MODIFICAR">

         <input type="text" class="sign-up-input" name="nombre" placeholder="INGRESAR NOMBRE">

        <input type="text" class="sign-up-input" name="apellido" placeholder="INGRESAR PELLIDO">

        <input type="number" class="sign-up-input" name="dni" placeholder="INGRESE DNI">

        <input type="text" class="sign-up-input" name="cargo" placeholder="INGRESE CARGO">

        <input type="number" class="sign-up-input" name="celular" placeholder="INGRESE CELULAR">

        <input type="submit" class="sign-up-input" class="sign-up-button" value="MODIFICAR" required> 
    </form>


</body>
</html>

<?php 

include ("conexion.php");
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido  = $_POST['apellido'];
$dni  = $_POST['dni'];
$cargo  = $_POST['cargo'];
$celular  = $_POST['celular'];

mysql_select_db($db, $conexion) or die ("error al conectar base de datos");

mysql_query("UPDATE dirigentes SET nom_dirigente = '$nombre',ape_dirigente='$apellido', dni_dirigente='$dni', cargo_dirigente='$cargo', cel_dirigente='$celular' WHERE id_dirigente = '$codigo'");

echo "  MODIFICADO CORRECTAMENTE";
 ?>
