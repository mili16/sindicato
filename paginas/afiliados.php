<html>
<head> <title>	AFILIADOS</title> 
<meta charset="utf-8">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/cursos.css">


<link rel="stylesheet" href="../css/boton.css">

<title>AFILIADOS</title>
</head>
<body> 
	
<!-- NAV -->


    
  <?php
// Datos de la base de datos
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "sindicato";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    // establecer y realizar consulta. guardamos en variable.
    ?>

<!-- NAV -->
                    <!-- NAV -->
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

   <center> <h1>REGISTRO DE AFILIADOS</h1> </center>
    <hr>


<br>


<!-- botones -->

<div id="contenedor">
    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/agregar.png' width='32' heigth='32'>
        AGREGAR AFILIADOS
    </a></button>

    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/modificar.ico' width='32' heigth='32'>
        MODIFICAR AFILIADOS
    </a></button>

    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/eliminar.png' width='32' heigth='32'>
        ELIMINAR AFILIADOS
    </a></button>

    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/buscar.png' width='32' heigth='32'>
        BUSCAR AFILIADO
    </a></button>

</div>




	<?php
    if (isset($_POST["afiliados"]) && $_POST["afiliados"]!="a")    {
    $nombre= $_POST["afiliados"];   
     
    $consulta = "SELECT * FROM afiliados where nombre='".$nombre."'";
    }else{
        
               $consulta = "SELECT * FROM afiliados";
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

		echo "<td>" . $columna['Registro_ID'] . "</td>";

		echo "<td>" . $columna['Apellidos'] . "</td>";

		echo "<td>" . $columna['Nombres'] . "</td>";

        echo "<td>" . $columna['dni_afi'] . "</td>";

        echo "<td>" . $columna['tipo_sangre'] . "</td>";

        echo "<td>" . $columna['direccion'] . "</td>";

        echo "<td>" . $columna['Ciudad'] . "</td>";

        echo "<td>" . $columna['referencia_ubicacion'] . "</td>";

        echo "<td>" . $columna['Departamento'] . "</td>";

        echo "<td>" . $columna['Provincia'] . "</td>";

        echo "<td>" . $columna['Distrito'] . "</td>";

        echo "<td>" . $columna['fech_nac'] . "</td>";

        echo "<td>" . $columna['grado_instruccion'] . "</td>";

        echo "<td>" . $columna['telefono'] . "</td>";

        echo "<td>" . $columna['E_mail'] . "</td>";

        echo "<td>" . $columna['area_trabajo'] . "</td>";

        echo "<td>" . $columna['categoria_o_cargo'] . "</td>";

        echo "<td>" . $columna['Fech_ingreso_empresa'] . "</td>";

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