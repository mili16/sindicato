<?php  
$id_alum=$_GET['id_alum'];
require 'conexion.php';
$buscar=mysqli_query($conexion,'SELECT * FROM alumnos WHERE id_alum="$id_alum"');
$columna=mysql_fetch_array($buscar);
$ape_afiliado=$columna['ape_afiliado'];
$nom_afiliado=$columna['nom_afiliado'];
$nom_alum=$columna['nom_alum'];
$ape_alum=$columna['ape_alum'];
$dni_alum=$columna['dni_alum'];
$familiar_alum=$columna['familiar_alum'];
$cel_alum=$columna['cel_alum'];
$nom_curso=$columna['nom_curso'];
$grupo_alum=$columna['grupo_alum'];


?>


<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <h1>EDITAR ALUMNO</h1>

    <form class="sign-up" action="modificaralumno.php" method="post">

        <input type="hidden"  name="id_alum" 
        placeholder="CODIGO A MODIFICAR" value="<?php echo $id_alum;?>">

        <input type="text" class="sign-up-input" name="ape_afiliado"  
        value="<?php echo $ape_afiliado;?>"      placeholder=" APELLIDO ESPOSO">

        <input type="text" class="sign-up-input" name="nom_afiliado" 
        value="<?php echo $nom_afiliado;?>"      placeholder=" NOMBRE ESPOSO">

        <input type="text" class="sign-up-input" name="nom_alum"
        value="<?php echo $nom_alum;?>"      placeholder=" NOMBRE ALUMNO">

        <input type="text" class="sign-up-input" name="ape_alum"
        value="<?php echo $ape_alum;?>"      placeholder=" APELLIDO ALUMNO">

        <input type="number" class="sign-up-input" name="dni_alum"
        value="<?php echo $dni_alum;?>"      placeholder="DNI ALUMNO">



        <select name="familiar_alum" > FAMILIAR 
                <option value="ESPOSA" <?php  if ($familiar_alum==ESPOSA){echo 'selected';} ?> >ESPOSA</option>
                <option value="HIJO"   <?php  if ($familiar_alum==HIJO){echo 'selected';} ?>>HIJO</option>
        </select>

        <input type="number" class="sign-up-input" name="cel_alum"  placeholder="CELULAR ALUMNO">

        <select name="nom_curso"> SELECCIONA 
                <option value="REPOSTERIA" <?php  if ($nom_curso==REPOSTERIA){echo 'selected';} ?>>REPOSTERIA</option>
        </select>

        <select name="grupo_alum"> SELECCIONA 
                <option value="GRUPO1" <?php  if ($grupo_alum==GRUPO1){echo 'selected';} ?>>GRUPO1</option>
        </select>

        

        <input type="submit" class="sign-up-input" class="sign-up-button" value="REGISTRAR" required> 
    </form>
</body>
</html>
