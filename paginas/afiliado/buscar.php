
<!-- buscar afiliado -->
<form action="buscar.php" method="post">
    <input type="text" class="sign-up-input" name="ape_afiliado" placeholder="Ingrese Apellido">

    <input type="submit" value="consulta" name="btn2">
</form>
<?php 
if (isset($_POST['btn2']))
{
    include("../conexion.php");
    $ape_afiliado=$_POST['ape_afiliado'];


    $resultados=mysqli_query($conexion,"SELECT * FROM afiliado where ape_afiliado=$ape_afiliado");
    while ($consulta=mysqli_fetch_array($resultados))
    {
    
    echo $consulta['ape_afiliado'];
    echo "<br>";
    }
}

?>

<!-- fin buscar afiliado -->
