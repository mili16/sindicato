<?php 
include("../../../conexion.php");
$alumnos="SELECT * FROM alumnos  WHERE nom_curso = 'voley'";
$resAlumnos=$conexion->query($alumnos);

?>

 <!DOCTYPE html>
 <html lang="en">
 <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../css/menu.css">
<link rel="stylesheet" type="text/css" href="../../../css/cursos.css">
        <link rel="stylesheet" href="../../../css/boton.css">
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
    <h2> VOLEY</h2>
    <hr>
<button class="boton"><a href="alumnosvoley.php">Volver</a></button>
        

     <form action="modificaralumno.php" method="POST">
        <table >
            <tr>
                <th>ID Alumno</th>
                <th>APELLIDO AFILIADO</th>
                <th>NOMBRE AFILIADO</th>
                <th>NOMBRE ALUMNO</th>
                <th>APELLIDO ALUMNO</th>
                <th>DNI ALUMNO</th>
                <th>FAMILIAR</th>
                <th>CELULAR</th>
                <th>REGISTRO</th>
                <th>TALLER</th>

            </tr>
            <?php 
            while($registroAlumnos=$resAlumnos->fetch_array(MYSQLI_BOTH))
            {
                echo '<tr>
                        <td><input name="idalum['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['id_alum'].'" readonly="readonly"/> </td>
                        <td><input name="ape_afi['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['ape_afiliado'].'" /> </td>
                        <td><input name="nom_afi['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['nom_afiliado'].'" /> </td>
                        <td><input name="nom['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['nom_alum'].'" /> </td>
                        <td><input name="ape['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['ape_alum'].'" /> </td>
                        <td><input name="dni['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['dni_alum'].'" /> </td>
                        <td><input name="fami['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['familiar_alum'].'" /> </td>
                        <td><input name="cel['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['cel_alum'].'" /> </td>
                        <td><input name="reg['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['fech_registro'].'" /> </td>
                        <td><input name="taller['.$registroAlumnos['id_alum'].']" value="'.$registroAlumnos['nom_curso'].'" readonly="readonly"/> </td>
                     
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
    foreach ($_POST['idalum'] as $ids) 
    {
        $editID=mysqli_real_escape_string($conexion, $_POST['idalum'][$ids]);
        $editApeAfi=mysqli_real_escape_string($conexion, $_POST['ape_afi'][$ids]);
        $editNomAfi=mysqli_real_escape_string($conexion, $_POST['nom_afi'][$ids]);
        $editNom=mysqli_real_escape_string($conexion, $_POST['nom'][$ids]);
        $editApe=mysqli_real_escape_string($conexion, $_POST['ape'][$ids]);
        $editDni=mysqli_real_escape_string($conexion, $_POST['dni'][$ids]);
        $editFami=mysqli_real_escape_string($conexion, $_POST['fami'][$ids]);
        $editCel=mysqli_real_escape_string($conexion, $_POST['cel'][$ids]);
        $editReg=mysqli_real_escape_string($conexion, $_POST['reg'][$ids]);
        $editTaller=mysqli_real_escape_string($conexion, $_POST['taller'][$ids]);

        $actualizar=$conexion->query("UPDATE alumnos SET id_alum='$editID', ape_afiliado='$editApeAfi',
                                                        nom_afiliado='$editNomAfi',
                                                        nom_alum='$editNom',
                                                        ape_alum='$editApe',dni_alum='$editDni',
                                                        familiar_alum='$editFami',cel_alum='$editCel',
                                                        fech_registro='$editReg',
                                                        nom_curso='$editTaller' 
                                                         WHERE id_alum='$ids'");

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