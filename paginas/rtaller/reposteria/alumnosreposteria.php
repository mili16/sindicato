<html>
<head> <title>REPOSTERIA</title> 
<meta charset="utf-8">

<link rel="stylesheet" href="../../../css/menu.css">
<link rel="stylesheet" type="text/css" href="../../../css/cursos.css">

<link rel="stylesheet" href="../../../css/boton.css">



<!-- pop up -->
<script> 
function abrir() { 
open('#','','top=300,left=300,width=300,height=300') ; 
} 
</script>
<!-- fin pop up -->


</head>
<body> 
	
<!-- NAV -->



    
<?php
// Datos de la base de datos
include("conexion.php")
?>


<!-- NAV -->
                    <!-- NAV -->
<div class="mainmenu">
  <ul>
    <li>&nbsp;<main>INICIO</main><a href="../../index.php"><desc>HOME</desc></a></li>
    <li>&nbsp;<main>DIRECTIVA </main><a href="../../dirigentes.php"><desc>2019-2021</desc></a></li>
    <li>&nbsp;<main>AFILIADOS</main><a href="../../afiliados.php"><desc>GENERAL</desc></a></li>
    <li>&nbsp;<main>TALLERES</main><a href="../registro.html"><desc>REGISTROS</desc></a></li>
    <li>&nbsp;<main>REPORTE</main><desc>GENERAL</desc></li>
    <li>&nbsp;<main>[MILAGROS]</main><desc>SESION ACTIVA</desc></li>
    <li>&nbsp;<main>SALIR</main><a href="../../../logout.php"><desc>Cerrar Sesion</desc></a></li>
  </ul>
</div>

 
<h1>REGISTRO</h1><h2>TALLER DE REPOSTERIA </h2> 

<hr>

<br>


<div id="contenedor">
       <button target="popup" class="boton"><a href="../registro.html">
        <img src='../../../img/volver.png' width='35' heigth='42'>
        
    </a></button>
&nbsp
    <button target="popup" class="boton"><a href="nuevoalumno.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../../../img/agregar.png' width='32' heigth='32'>
        NUEVO ALUMNO
    </a></button>

 &nbsp


    <button  class="boton"><a href="modificaralumno.php">
        <img src='../../../img/modificar.ico' width='32' heigth='32'>
        MODIFICAR ALUMNO
    </a></button>
 &nbsp
    <button  class="boton"><a href="eliminaralumno.php">
        <img src='../../../img/eliminar.png' width='32' heigth='32'>
        ELIMINAR ALUMNO
    </a></button>

</div>


   

    <form action = "alumnosreposteria.php" method="post">
        
        <!--Cargar datos de las categorias -->
        <?php
        $sql = "Select * from alumnos where nom_curso = 'reposteria'";
        $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
        ?>

<!-- casilla -->

        <select name="alumnos" >
        <option value="a"  >--Mostrar Alumno--</option>
       <?php
        while ($row = mysqli_fetch_array($resultado))
    {
        
        echo "<option value=\"".$row['nom_alum']."\">".$row['ape_alum']."</option>"; 
    }
        ?>
        </select>
 
<!-- fin casilla -->


    <input type="submit" name ="enviar" class="boton" value="Mostrar datos">
    </form>
    <?php
    if (isset($_POST["alumnos"]) && $_POST["alumnos"]!="a")    {
    $nom_alum= $_POST["alumnos"];    
    $consulta = "SELECT * FROM alumnos where nom_alum='".$nom_alum."'";
    }else{
        
        $consulta = "SELECT * FROM alumnos WHERE nom_curso = 'reposteria' ";
    }
    
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    // Motrar el resultado de los registro de la base de datos
    // Encabezado de la tabla
	echo "<table width='800' align='center'>";
	echo"<caption>REPOSTERIA</caption>";
	echo "<tr>";
	echo "<th>CODIGO</th>";
	echo "<th>APELLIDO - AFILIADO</th>";
	echo "<th>NOMBRE - AFILIADO</th>";
	echo "<th>NOMBRE ALUMNO</th>";
	echo "<th>APELLIDO ALUMNO</th>";
    echo "<th>DNI ALUMNO</th>";
    echo "<th>FAMILIAR</th>";
    echo "<th>CELULAR</th>";
    echo "<th>TALLER</th>";

	echo "</tr>";
	$no=1;
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id_alum'] . "</td>";
		echo "<td>" . $columna['ape_afiliado'] . "</td>";
		echo "<td>" . $columna['nom_afiliado'] . "</td>";
        echo "<td>" . $columna['nom_alum'] . "</td>";
        echo "<td>" . $columna['ape_alum'] . "</td>";
        echo "<td>" . $columna['dni_alum'] . "</td>";
        echo "<td>" . $columna['familiar_alum'] . "</td>";
        echo "<td>" . $columna['cel_alum'] . "</td>";
        echo "<td>" . $columna['nom_curso'] . "</td>";
		echo "</tr>";
        $no++;
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
    
		

	
?>
   
   
</body>
</html>