<html>
<head> 

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="../../css/buscar.css">
<link rel="stylesheet" href="../../css/boton.css">
<link rel="stylesheet" type="text/css" href="../../css/cursos.css">
<link rel="stylesheet" href="../../css/menu.css">

<title>CONSULTA</title>

</head>

<body> 
<!-- buscar afiliado -->
<div class="mainmenu">
  <ul>
    <li>&nbsp;<main>INICIO</main><a href="index.php"><desc>HOME</desc></a></li>
    <li>&nbsp;<main>DIRECTIVA </main><a href="dirigentes.php"><desc>2019-2021</desc></a></li>
    <li>&nbsp;<main>AFILIADOS</main><a href="afiliados.php"><desc>GENERAL</desc></a></li>
    <li>&nbsp;<main>TALLERES</main><a href="rtaller/registro.html"><desc>REGISTROS</desc></a></li>
    <li>&nbsp;<main>REPORTE</main><desc>GENERAL</desc></li>
    <li>&nbsp;<main>[MILAGROS]</main><desc>SESION ACTIVA</desc></li>
    <li>&nbsp;<main>SALIR</main><a href="../logout.php"><desc>Cerrar Sesion</desc></a></li>
  </ul>
</div>

<div>

<form class="sign-up" action="buscar_taller.php" method="post">
    <p>TALLERES</p>
    <p>Buscar Alumno</p>
    <input type="text" class="sign-up-input" name="ape_alum" placeholder="Ingrese Apellido">

    <input type="submit" name="buscar_alumno" value="Buscar" >
</form>



<form class="sign-up" action="buscar_taller.php" method="post">
    <p>TALLERES</p>
    <p>Buscar por Cursos</p>
            <select name="nom_curso"> SELECCIONA 
                <option value="FUTBOL" >FUTBOL</option>
                <option value="VOLEY" >VOLEY</option>
                <option value="REPOSTERIA" >REPOSTERIA</option>
        </select>
    <input type="submit" name="buscar_taller" value="Buscar" >
</form>


</div>


</body>
</html>

<?php 

include("../conexion.php");
$nom_curso="";

if(isset($_POST['buscar_taller']))

{
    $nom_curso=$_POST['nom_curso'];
    $existe=0;

    if($nom_curso==""){
        echo "Ingresar Datos";
    }
    else{

        $resultados = mysqli_query($conexion,"SELECT * FROM alumnos where nom_curso='$nom_curso'");
echo "  
            <table width='800' align='center'>
            <caption>DATOS PERSONALES</caption>
            <tr>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>PARENTESCO</th>
            <th>CELULAR</th>
            <th>TALLER</th>
            </tr>";
$existe=1;
        while ($consulta = mysqli_fetch_array($resultados))
        {


            echo"
            <tr>  
            <td>".$consulta['nom_alum']."</td>  
            <td>".$consulta['ape_alum']."</td>
            <td>".$consulta['familiar_alum']."</td> 
            <td>".$consulta['cel_alum']."</td> 
            <td>".$consulta['nom_curso']."</td>
            </tr>
             </tr>";
       

            $existe++;
        }   echo"</table>";
        if($existe==0){
            echo "No se encontro resultados de: $ape_afiliado";
        }
    }
}


// buscar por nombre
if(isset($_POST['buscar_alumno']))

{
    $ape_alum=$_POST['ape_alum'];
    $existe=0;

    if($ape_alum==""){
        echo "Ingresar Datos";
    }
    else{

        $resultados = mysqli_query($conexion,"SELECT * FROM alumnos where ape_alum='$ape_alum'");
echo "  
            <table width='800' align='center'>
            <caption>DATOS PERSONALES</caption>
            <tr>
            <th>NOMBRE AFILIADO</th>
            <th>APELLIDO AFILIADO</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>PARENTESCO</th>
            <th>CELULAR</th>
            <th>TALLER</th>
            </tr>";
$existe=1;
        while ($consulta = mysqli_fetch_array($resultados))
        {


            echo"
            <tr> 
            <td>".$consulta['nom_afiliado']."</td>  
            <td>".$consulta['ape_afiliado']."</td> 
            <td>".$consulta['nom_alum']."</td>  
            <td>".$consulta['ape_alum']."</td>
            <td>".$consulta['familiar_alum']."</td> 
            <td>".$consulta['cel_alum']."</td> 
            <td>".$consulta['nom_curso']."</td>
            </tr>
             </tr>";
       

            $existe++;
        }   echo"</table>";
        if($existe==0){
            echo "No se encontro resultados de: $ape_afiliado";
        }
    }
}


?>



