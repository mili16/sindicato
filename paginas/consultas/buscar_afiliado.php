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
    <li>&nbsp;<main>DIRECTIVA </main><a href="../dirigentes.php"><desc>2019-2021</desc></a></li>
    <li>&nbsp;<main>AFILIADOS</main><a href="../afiliados.php"><desc>GENERAL</desc></a></li>
    <li>&nbsp;<main>TALLERES</main><a href="../rtaller/registro.html"><desc>REGISTROS</desc></a></li>
    <li>&nbsp;<main>REPORTE</main><desc>GENERAL</desc></li>
    <li>&nbsp;<main>[MILAGROS]</main><desc>SESION ACTIVA</desc></li>
    <li>&nbsp;<main>SALIR</main><a href="../logout.php"><desc>Cerrar Sesion</desc></a></li>
  </ul>
</div>

    <h1>CONSULTA <h2>AFILIADOS</h2> </h1>

    <hr>


<div>
<form class="sign-up" action="buscar_afiliado.php" method="post">
    <p>AFILIADO</p>
    <p>Datos Personales</p>
    <input type="text" class="sign-up-input" name="ape_afiliado" placeholder="Ingrese Apellido">

    <input type="submit" class="sign-up-input" name="buscarafi" value="Buscar" >
</form>


<form class="sign-up" action="buscar_afiliado.php" method="post">
    <p>AFILIADO</p>
    <p>Area - Categorio - Cargo</p>
    <select name="area_trabajo"> SELECCIONA 
                <option value="MINA" >MINA</option>
                <option value="GEOLOGIA" >GEOLOGIA</option>
                <option value="MTTO Planta" >MANTO PLANTA</option>
                <option value="Extraccion" >EXTRACCION</option>
        </select>

    <input type="submit" class="sign-up-input" name="buscar_area" value="Buscar" >
</form>


<form class="sign-up" action="buscar_afiliado.php" method="post">
    <p>AFILIADO</p>
    <p>Caso de Emergencia</p>
    <input type="text" class="sign-up-input" name="ape_afiliado" placeholder="Ingrese Apellido">

    <input type="submit" class="sign-up-input" name="buscar_emergencia" value="Buscar" >
</form>
</div>


</body>
</html>

<?php 

include("../conexion.php");
$ape_afiliado="";

if(isset($_POST['buscarafi']))

{
    $ape_afiliado=$_POST['ape_afiliado'];
    $existe=0;

    if($ape_afiliado==""){
        echo "Ingresar Datos";
    }
    else{

        $resultados = mysqli_query($conexion,"SELECT * FROM afiliado where ape_afiliado='$ape_afiliado'");
echo "  
            <table width='800' align='center'>
            <caption>DATOS PERSONALES</caption>
            <tr>
            <th>CODIGO</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>DNI</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>E-MAIL</th>
            </tr>";
$existe=1;
        while ($consulta = mysqli_fetch_array($resultados))
        {


            echo"
            <tr> 
            <td>".$consulta['id_afiliado']."</td> 
            <td>".$consulta['nom_afiliado']."</td>  
            <td>".$consulta['ape_afiliado']."</td> 
            <td>".$consulta['dni_afiliado']."</td> 
            <td>".$consulta['direccion']."</td> 
            <td>".$consulta['telefono']."</td> 
            <td>".$consulta['e_mail']."</td>
            </tr>
             </tr>";
       

            $existe++;
        }   echo"</table>";
        if($existe==0){
            echo "No se encontro resultados de: $ape_afiliado";
        }
    }
}

// BUSCAR POR AREA

if(isset($_POST['buscar_area']))

{
    $area_trabajo=$_POST['area_trabajo'];
    $existe=0;

    if($area_trabajo==""){
        echo "Ingresar Datos";
    }
    else{

        $resultados = mysqli_query($conexion,"SELECT * FROM afiliado where area_trabajo='$area_trabajo'");

            echo "  
            <table width='800' align='center'>
            <caption>Area</caption>
            <tr>
            <th>CODIGO</th><th>NOMBRE</th><th>APELLIDO</th><th>AREA</th><th>CAT. O CARGO</th><th>Ingreso a CMC</th>
            </tr>
            <tr>";
           
        while ($consulta = mysqli_fetch_array($resultados))
        {

            echo"
            <td>".$consulta['id_afiliado']."</td> 
            <td>".$consulta['nom_afiliado']."</td> 
            <td>".$consulta['ape_afiliado']."</td> 
            <td>".$consulta['area_trabajo']."</td>
            <td>".$consulta['categoria_o_cargo']."</td>
            <td>".$consulta['fech_ingreso_empresa']."</td>
            </tr>";
       

            $existe++;
        }   echo"</table>";


        if($existe==0){
            echo "No se encontro resultados de: $ape_afiliado";
        }
    }
}
// FIN BUSCAR AREA

// BUSCAR EMERGENCIA

if(isset($_POST['buscar_emergencia']))

{
    $ape_afiliado=$_POST['ape_afiliado'];
    $existe=0;

    if($ape_afiliado==""){
        echo "Ingresar Datos";
    }
    else{

        $resultados = mysqli_query($conexion,"SELECT * FROM afiliado where ape_afiliado='$ape_afiliado'");

            echo "  
            <table width='800' align='center'>
            <caption>Caso de Emergencia</caption>
            <tr>
            <th>CODIGO</th><th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CELULAR</th>
            <th>PARENTESCO</th>
            <th>DIRECCION</th>
            </tr>
            <tr>";
            $existe=1;
        while ($consulta = mysqli_fetch_array($resultados))
        {

            echo"
            <td>".$consulta['nom_afiliado']."</td> 
            <td>".$consulta['ape_afiliado']."</td> 
            <td>".$consulta['nom_emergencia']."</td>
            <td>".$consulta['tel_emergencia']."</td>
            <td>".$consulta['parentesco_emergencia']."</td>
            <td>".$consulta['direccion_emergencia']."</td>
            </tr>";
       

            $existe++;
        }   echo"</table>";


        if($existe==0){
            echo "No se encontro resultados de: $ape_afiliado";
        }
    }
}
// FIN BUSCAR EMERGENCIA
?>



