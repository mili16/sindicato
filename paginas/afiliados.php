<html>
<head> 
    <meta charset="utf-8" >
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/cursos.css">
    <link rel="stylesheet" href="../css/boton.css">

    <title>AFILIADOS</title>
</head>


<body> 
	
   
<?php include("conexion.php");  ?>


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

<h1>REGISTRO DE AFILIADOS</h1>
    <hr>


<br>


<!-- botones -->

<div id="contenedor">
    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/agregar.png' width='32' heigth='32'>
        AGREGAR AFILIADO
    </a></button>

    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/modificar.ico' width='32' heigth='32'>
        MODIFICAR AFILIADO
    </a></button>

    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/eliminar.png' width='32' heigth='32'>
        ELIMINAR AFILIADO
    </a></button>


<!-- inicio buscador -->

    <form action="afiliados.php" method="post">
    <p>Buscar por apellido</p>
    <input type="text" class="sign-up-input" name="ape_afiliado" placeholder="Ingrese Apellido">

    <input type="submit" name="btn2" value="Buscar" >
</form>

<?php 

include("../conexion.php");
$ape_afiliado="";

if(isset($_POST['btn2']))

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
            <tr>
            <th>CODIGO</th><th>NOMBRE</th><th>APELLIDO</th>
            </tr>";
$existe=1;
        while ($consulta = mysqli_fetch_array($resultados))
        {


            echo"
            <tr> 
            <td>".$consulta['id_afiliado']."</td> 
            <td>".$consulta['nom_afiliado']."</td>  
            <td>".$consulta['ape_afiliado']."</td>
            </tr>
             </tr>";
       

            $existe++;
        }   echo"</table>";
        if($existe==0){
            echo "No se encontro resultados de: $ape_afiliado";
        }
    }
}?>

<!-- fin buscador -->

</div>

	<?php
    if (isset($_POST["afiliado"]) && $_POST["afiliado"]!="a")    {
    $nombre= $_POST["afiliado"];   
     
    $consulta = "SELECT * FROM afiliado where nombre='".$nombre."'";
    }else{
        
               $consulta = "SELECT * FROM afiliado";
    }
    
    $resultado = mysqli_query($conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    // Motrar el resultado de los registro de la base de datos
    // Encabezado de la tabla
	echo "<table width='800' align='center'>";
	echo"<caption>REGISTRO GENERAL</caption>";
	echo "<tr>";
	echo "<th>CODIGO</th>";
	echo "<th>APELLIDOS</th>";
	echo "<th>NOMBRES</th>";
    echo "<th>DNI</th>";
    echo "<th>TIPO DE SANGRE</th>";
    echo "<th>DIRECCION</th>";
    echo "<th>CIUDAD</th>";
    echo "<th>REFERENCIA</th>";
    echo "<th>DEPARTAMENTO</th>";
    echo "<th>PROVINCIA</th>";
    echo "<th>DISTRITO</th>";
    echo "<th>FECHA NAC</th>";
    echo "<th>GRADO INSTRUCCION</th>";
    echo "<th>TELEFONO</th>";
    echo "<th>EMAIL</th>";
    echo "<th>AREA TRABAJO</th>";
    echo "<th>CATEGORIA/CARGO</th>";
    echo "<th>FECHA INGRESO</th>";
    echo "<th>NOMBRE PADRE</th>";
    echo "<th>APELLIDO PADRE</th>";
    echo "<th>NOMBRE MADRE</th>";
    echo "<th>APELLIDO MADRE</th>";
    echo "<th>NOMBRE ESPOSA</th>";


	echo "</tr>";
	$no=1;
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array($resultado ))
	{
		echo "<tr>";

		echo "<td>" . $columna['id_afiliado'] . "</td>";

		echo "<td>" . $columna['ape_afiliado'] . "</td>";

		echo "<td>" . $columna['nom_afiliado'] . "</td>";

        echo "<td>" . $columna['dni_afiliado'] . "</td>";

        echo "<td>" . $columna['tipo_sangre'] . "</td>";

        echo "<td>" . $columna['direccion'] . "</td>";

        echo "<td>" . $columna['ciudad'] . "</td>";

        echo "<td>" . $columna['referencia_ubicacion'] . "</td>";

        echo "<td>" . $columna['departamento'] . "</td>";

        echo "<td>" . $columna['provincia'] . "</td>";

        echo "<td>" . $columna['distrito'] . "</td>";

        echo "<td>" . $columna['fech_nac'] . "</td>";

        echo "<td>" . $columna['grado_instruccion'] . "</td>";

        echo "<td>" . $columna['telefono'] . "</td>";

        echo "<td>" . $columna['e_mail'] . "</td>";

        echo "<td>" . $columna['area_trabajo'] . "</td>";

        echo "<td>" . $columna['categoria_o_cargo'] . "</td>";

        echo "<td>" . $columna['fech_ingreso_empresa'] . "</td>";

        echo "<td>" . $columna['nom_padre'] . "</td>";

        echo "<td>" . $columna['ape_padre'] . "</td>";

        echo "<td>" . $columna['nom_madre'] . "</td>";

        echo "<td>" . $columna['ape_madre'] . "</td>";

        echo "<td>" . $columna['nom_esposa'] . "</td>";


		echo "</tr>";

        $no++;
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
    
		

	
?>
  

</body>
</html>