<html>
<head> <title>CURSOS VACACIONALES</title> 
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="../../../../css/cursos.css">

<link rel="stylesheet" href="../../../../css/boton.css">



<!-- pop up -->
<script> 
function abrir() { 
open('#','','top=300,left=300,width=300,height=300') ; 
} 
</script>
<!-- fin pop up -->


<style>

		body{
	
	/* Aquí el origen de la imagen */
  background-image: url(../../../../img/mina.jpg);
 
  /* Fijar la imagen de fondo este vertical y
    horizontalmente y centrado */
  background-position: center center;
 
  /* Esta imagen no debe de repetirse */
  background-repeat: no-repeat;
 
  /* COn esta regla fijamos la imagen en la pantalla. */
  background-attachment: fixed;
 
  /* La imagen ocupa el 100% y se reescala */
  background-size: cover;
 
  /* Damos un color de fondo mientras la imagen está cargando  */
  background-color: #464646;

}

section{
	background: #fff ;
	opacity: 0.5;

}
.container
{
	width: 1100px;
	display: flex;
	justify-content: space-between;/* PARA SEPARAR LOS CONTENEDORES */
	flex-wrap: wrap;

}
</style>
</head>
<body> 
	
<!-- NAV -->

 <br><br><br>

    
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


<section>
<hr> 
<center> <h2>TALLER VERANO | FUTBOL</h2> 
         <h3>Sabado 09:00 AM  -  1:00 PM </h3>
</center>
<hr>
</section>

<a href="../index.html" style="margin-right: 48%"><img src='../../../../img/volver.png' width='232' heigth='72' style="margin-right: 49%; margin-top: 9px" ></a> 

	<form action = "computacion.php" method="post">
        
        <!--Cargar datos de las categorias -->
        <?php
        $sql = "Select * from alumnos";

        $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
        ?>

<div class="container">
<!-- NUEVO alumno BOTON -->
<div class="box">
<a href="nuevoalumno.php" target="popup" class="boton" style="margin-left: 70%" 
onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=450px'); return false;"><img src='../../../../img/agregar.png' width='32' heigth='32'>
NUEVO ALUMNO
</a>
</div>
<!-- FIN NUEVO alumno -->

<!-- ------------------------------------------ -->
<div class="box">
	

<!-- MODIFICAR alumno BOTON -->
<a href="modificaralumno.php" target="popup" class="boton" style="margin-left: 70%" 
onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=500px'); return false;"><img src='../../../../img/modificar.ico' width='32' heigth='32'>
MODIFICAR ALUMNO
</a>
<!-- FIN alumno  -->
</div>
<!-- ------------------------------------------ -->
<div class="box">

<!-- ELIMINAR alumno BOTON -->
<a href="eliminaralumno.php" target="popup" class="boton" style="margin-left: 70%" 
onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=270px'); return false;"><img src='../../../../img/eliminar.png' width='32' heigth='32'>
ELIMINAR ALUMNO
</a>
<!-- FIN ELIMINAR alumno -->
</div>
</div>



	<?php
	if (isset($_POST["alumnos"]) && $_POST["alumnos"]!="a")    {
    $nom_dirigente= $_POST["alumnos"];    
    $consulta = "SELECT * FROM alumnos where nom_alum='".$nom_alum."'";
    }else{
        
        $consulta = "SELECT id_alum,
                            ape_afiliado,
                            nom_afiliado,
                            nom_alum,
                             ape_alum,
                             dni_alum,
                             familiar_alum,
                             cel_alum,
                             nom_curso, 
                             grupo_alum FROM alumnos  WHERE nom_curso = 'REPOSTERIA' AND grupo_alum='GRUPO2'";
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
    echo "<th>CEL</th>";
    echo "<th>GRUPO</th>";

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
        echo "<td>" . $columna['grupo_alum'] . "</td>";
		echo "</tr>";
        $no++;
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
    
		

	
?>
   
   
</body>
</html>