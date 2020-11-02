<html>
<head> 

<meta charset="utf-8">

<link rel="stylesheet" href="../css/boton.css">
<link rel="stylesheet" type="text/css" href="../css/cursos.css">
<link rel="stylesheet" href="../css/menu.css">

<title>DIRECTIVA 2019</title>

</head>

<body> 
	
    <?php
// Datos de la base de datos
 include("conexion.php");
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

<h1>DIRIGENTES 2019-2021</h1>
    <hr>


<br>


<div id="contenedor">
    <button target="popup" class="boton"><a href="form_nuevo_dirigente.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/agregar.png' width='32' heigth='32'>
        AGREGAR
    </a></button>

 &nbsp


    <button target="popup" class="boton"><a href="form_modificar_dirigente.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/modificar.ico' width='32' heigth='32'>
        MODIFICAR
    </a></button>
 &nbsp
    <button target="popup" class="boton"><a href="form_eliminar_dirigente.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/eliminar.png' width='32' heigth='32'>
        ELIMINAR 
    </a></button>

</div>




<!-- casilla -->
	<form action = "dirigentes.php" method="post">
        
        <!--Cargar datos de las categorias -->
        <?php
        $sql = "Select * from dirigentes";
        $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
        ?>



        <select name="dirigentes" >
        <option value="a"  >--Mostrar Dirigentes--</option>
       <?php
        while ($row = mysqli_fetch_array($resultado))
	{
		
		echo "<option value=\"".$row['nom_dirigente']."\">".$row['nom_dirigente']."</option>"; 
	}
        ?>
        </select>
 



    <input type="submit" name ="enviar" class="boton" value="Mostrar datos">
	</form>
    <!-- fin casilla -->
	<?php
	if (isset($_POST["dirigentes"]) && $_POST["dirigentes"]!="a")    {
    $nom_dirigente= $_POST["dirigentes"];    
    $consulta = "SELECT * FROM dirigentes where nom_dirigente='".$nom_dirigente."'";
    }else{
        
        $consulta = "SELECT * FROM dirigentes";
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
    echo "<th>DNI</th>";
    echo "<th>CARGO</th>";
    echo "<th>CELULAR</th>";

	echo "</tr>";
	$no=1;
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id_dirigente'] . "</td>";
		echo "<td>" . $columna['nom_dirigente'] . "</td>";
		echo "<td>" . $columna['ape_dirigente'] . "</td>";
        echo "<td>" . $columna['dni_dirigente'] . "</td>";
        echo "<td>" . $columna['cargo_dirigente'] . "</td>";
        echo "<td>" . $columna['cel_dirigente'] . "</td>";
		echo "</tr>";
        $no++;
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
    
		

	
?>
   
  

</body>
</html>