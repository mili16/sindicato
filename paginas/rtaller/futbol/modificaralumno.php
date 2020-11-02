<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../css/style.css">
        <link rel="stylesheet" href="../../../css/boton.css">
        <link href="../../../css/icon.css" rel="stylesheet" type="text/css" /> 
    <title>INGRESE CODIGO A MODIFICAR</title>
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
   <form class="sign-up" action="modificaralumno.php" method="post">

        <input type="text" class="sign-up-input" name="id_alum" placeholder="INGRESAR CODIGO">

        <input type="text" class="sign-up-input" name="ape_afiliado" placeholder="INGRESAR APELLLIDO AFILIADO">

        <input type="text" class="sign-up-input" name="nom_afiliado" placeholder="NOMBRE AFILIADO">


        <input type="text" class="sign-up-input" name="nom_alum" placeholder="NOMBRE ALUMNO">

        <input type="text" class="sign-up-input" name="ape_alum" placeholder="APELLIDO ALUMNO">

        <input type="number" class="sign-up-input" name="dni_alum" placeholder="DNI ALUMNO">

        <input type="text" class="sign-up-input" name="familiar_alum" placeholder="PARENTESCO">


        <input type="number" class="sign-up-input" name="cel_alum" placeholder="CELULAR ALUMNO">

        <select name="nom_curso"> SELECCIONA 
                <option value="futbol" >FUTBOL</option>
        </select>

         <a href="#popup"> <input type="submit" class="sign-up-input" class="sign-up-button" value="MODIFICAR" name="btn1" required> </a>
    </form>


</body>
</html>

<?php 
if(isset($_POST['btn1']))
{
include ("conexion.php");

$id_alum=$_POST['id_alum'];
$ape_afiliado=$_POST['ape_afiliado'];
$nom_afiliado=$_POST['nom_afiliado'];
$nom_alum=$_POST['nom_alum'];
$ape_alum=$_POST['ape_alum'];
$dni_alum=$_POST['dni_alum'];
$familiar_alum=$_POST['familiar_alum'];
$cel_alum=$_POST['cel_alum'];
$nom_curso=$_POST['nom_curso'];

$conexion->query("UPDATE alumnos SET
     ape_afiliado='$ape_afiliado',
     nom_afiliado='$nom_afiliado',
     nom_alum = '$nom_alum',
     ape_alum='$ape_alum',
     dni_alum='$dni_alum', 
     familiar_alum='$familiar_alum',
     cel_alum='$cel_alum',
     nom_curso='$nom_curso',
     WHERE alumnos id_alum='$id_alum'");

echo "<div class='correcto'><span class='icon icon-smile'></span> 
Datos Modificados </div>";
}
else{
echo "<div class='error'><span class='icon icon-sad2'></span>Datos NO Modificados</div>";

}
 ?>
