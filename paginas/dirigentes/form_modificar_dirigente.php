<?php 
include("../../conexion.php");
$dirigentes="SELECT * FROM dirigentes ";
$resDirigentes=$conexion->query($dirigentes);

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
    <h1>MODIFICAR DATOS</h1>
    <h2> DIRIGENTES </h2>
    <hr>
<button class="boton"><a href="../dirigentes.php">Volver</a></button>
        

     <form action="form_modificar_dirigente.php" method="POST">
        <table >
            <tr>
                <th>ID </th>
                <th>APELLIDOS</th>
                <th>NOMBRES</th>
                <th>DNI </th>
                <th>CARGO</th>
                <th>CELULAR</th>

            </tr>
            <?php 
            while($registroDirigentes=$resDirigentes->fetch_array(MYSQLI_BOTH))
            {
                echo '<tr>
                        <td><input name="iddir['.$registroDirigentes['id_dirigente'].']" value="'.$registroDirigentes['id_dirigente'].'" readonly="readonly"/> </td>
                        <td><input name="ape_dir['.$registroDirigentes['id_dirigente'].']" value="'.$registroDirigentes['ape_dirigente'].'" type="text"/> </td>
                        <td><input name="nom_dir['.$registroDirigentes['id_dirigente'].']" value="'.$registroDirigentes['nom_dirigente'].'" type="text"/> </td>
                        <td><input name="dni['.$registroDirigentes['id_dirigente'].']" value="'.$registroDirigentes['dni_dirigente'].'" type="number" maxlength="8"/> </td>
                        <td><input name="cargo['.$registroDirigentes['id_dirigente'].']" value="'.$registroDirigentes['cargo_dirigente'].'" readonly="readonly"/> </td>
                        <td><input name="cel['.$registroDirigentes['id_dirigente'].']" value="'.$registroDirigentes['cel_dirigente'].'" type="number" maxlength="9" /> </td>
                        
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
    foreach ($_POST['iddir'] as $ids) 
    {
        $editID=mysqli_real_escape_string($conexion, $_POST['iddir'][$ids]);
        $editApeDir=mysqli_real_escape_string($conexion, $_POST['ape_dir'][$ids]);
        $editNomDir=mysqli_real_escape_string($conexion, $_POST['nom_dir'][$ids]);
        $editDni=mysqli_real_escape_string($conexion, $_POST['dni'][$ids]);
        $editCargo=mysqli_real_escape_string($conexion, $_POST['cargo'][$ids]);
        $editCel=mysqli_real_escape_string($conexion, $_POST['cel'][$ids]);

        $actualizar=$conexion->query("UPDATE dirigentes SET id_dirigente='$editID', 
                                                        ape_dirigente='$editApeDir',
                                                        nom_dirigente='$editNomDir',
                                                        dni_dirigente='$editDni',
                                                        cargo_dirigente='$editCargo',
                                                        cel_dirigente='$editCel'
                                                         WHERE id_dirigente='$ids'");

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