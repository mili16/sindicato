<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../../css/style.css">
        <link rel="stylesheet" href="../../../../css/boton.css">
    <title>INGRESE CODIGO A MODIFICAR</title>
</head>
<body>
    <form class="sign-up" action="modificaralumno.php" method="post">

    
        <input type="text" class="sign-up-input" name="id_alum" placeholder="INGRESAR CODIGO">

        <input type="text" class="sign-up-input" name="ape_afiliado" placeholder="INGRESAR APELLLIDO AFILIADO">

        <input type="text" class="sign-up-input" name="nom_afiliado" placeholder="NOMBRE AFILIADO">


        <input type="text" class="sign-up-input" name="nom_alum" placeholder="NOMBRE ALUMNO">

        <input type="text" class="sign-up-input" name="ape_alum" placeholder="APELLIDO ALUMNO">

        <input type="number" class="sign-up-input" name="dni_alum" placeholder="DNI ALUMNO">

        <select name="familiar_alum" > FAMILIAR 
                <option value="ESPOSA">ESPOSA</option>
                <option value="HIJO">HIJO</option>
        </select>

        <input type="number" class="sign-up-input" name="cel_alum" placeholder="CELULAR ALUMNO">

        <select name="nom_curso"> SELECCIONA 
                <option value="REPOSTERIA" >REPOSTERIA</option>
        </select>

        <select name="grupo_alum"> SELECCIONA 
                <option value="GRUPO3" >GRUPO3</option>
        </select>

        <input type="submit" class="sign-up-input" class="sign-up-button" value="MODIFICAR" required> 
    </form>


</body>
</html>

<?php 

include ("conexion.php");
$id_alum = $_POST ['id_alum'];
$ape_afiliado = $_POST ['ape_afiliado'];
$nom_afiliado = $_POST ['nom_afiliado'];
$nom_alum = $_POST ['nom_alum'];
$ape_alum = $_POST ['ape_alum'];
$dni_alum = $_POST ['dni_alum'];
$familiar_alum = $_POST ['familiar_alum'];
$cel_alum = $_POST ['cel_alum'];
$nom_curso = $_POST ['nom_curso'];
$grupo_alum = $_POST ['grupo_alum'];

mysql_select_db($db, $conexion) or die ("error al conectar base de datos");

mysql_query("UPDATE alumnos SET
     ape_afiliado='$ape_afiliado',
     nom_afiliado='$nom_afiliado',
     nom_alum = '$nom_alum',
     ape_alum='$ape_alum',
     dni_alum='$dni_alum', 
     familiar_alum='$familiar_alum',
     cel_alum='$cel_alum',
     nom_curso='$nom_curso',
     grupo_alum='$grupo_alum'
     WHERE id_alum='$id_alum'  ");

echo "ALUMNO MODIFICADO CORRECTAMENTE";
 ?>
