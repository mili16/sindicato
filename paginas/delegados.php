<html>
<head> 

<meta charset="utf-8">

<link rel="stylesheet" href="../css/boton.css">
<link rel="stylesheet" type="text/css" href="../css/cursos.css">
<link rel="stylesheet" href="../css/menu.css">
<title>DIRECTIVA 2019</title> </head>


<body> 
    
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


	<center> <h2>DELEGADOS 2019-2021</h2> </center>
    <hr>




     <!-- NUEVO HORARIO BOTON -->
<a href="delegados/form_nuevo_delegado.php" target="popup" class="boton" style="margin-left: 70%" 
onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;"><img src='../img/agregar.png' width='32' heigth='32'>
AGREGAR
</a>
<!-- FIN NUEVO HORARIO -->

<!-- ------------------------------------------ -->

<!-- MODIFICAR HORARIO BOTON -->
<a href="delegados/form_modificar_delegado.php" target="popup" class="boton" style="margin-left: 70%" 
onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;"><img src='../img/modificar.ico' width='32' heigth='32'>
MODIFICAR 
</a>


<!-- ELIMINAR HORARIO BOTON -->
<a href="delegados/form_eliminar_delegado.php" target="popup" class="boton" style="margin-left: 70%" 
onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=300px'); return false;"><img src='../img/eliminar.png' width='32' heigth='32'>
ELIMINAR 
</a>


<br>
	<form action = "delegados.php" method="post">
        
        <!--Cargar datos de las categorias -->
        <?php
        $sql = "Select * from delegados";
        $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
        ?>


       



<!-- casilla -->
       
        <select name="delegados" >
        <option value="a"  >--Mostrar Delegados--</option>
       <?php
        while ($row = mysqli_fetch_array( $resultado ))
	{
		
		echo "<option value=\"".$row['area_delegado']."\">".$row['area_delegado']."</option>"; // aquí te faltaba el value... lo mismo, ojo con las comillas 
	}
        ?>
        </select>
   
        <!-- fin casilla -->

    <input type="submit" name ="MOSTRAR" class="boton" value="Mostrar datos">
	</form>
	<?php
	if (isset($_POST["delegados"]) && $_POST["delegados"]!="a")    {
    $area_delegado= $_POST["delegados"];    
    $consulta = "SELECT * FROM delegados where area_delegado='".$area_delegado."'";
    }else{
        
        $consulta = "SELECT * FROM delegados";
    }
    
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table width='800' align='center'>";
	echo"<caption>SITRACOND</caption>";
	echo "<tr>";
	echo "<th>CODIGO</th>";
	echo "<th>NOMBRE</th>";
	echo "<th>APELLIDO</th>";
    echo "<th>GUARDIA</th>";
    echo "<th>AREA</th>";
    echo "<th>DNI</th>";
    echo "<th>CELULAR</th>";

	echo "</tr>";
	$no=1;
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id_delegado'] . "</td>";
		echo "<td>" . $columna['nom_delegado'] . "</td>";
		echo "<td>" . $columna['ape_delegado'] . "</td>";
        echo "<td>" . $columna['guardia_delegado'] . "</td>";
        echo "<td>" . $columna['area_delegado'] . "</td>";
        echo "<td>" . $columna['dni_delegado'] . "</td>";
        echo "<td>" . $columna['cel_delegado'] . "</td>";
		echo "</tr>";
        $no++;
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
    
		

	
?>
   
  

</body>
</html>