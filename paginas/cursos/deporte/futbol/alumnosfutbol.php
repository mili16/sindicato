<html>
<head> <title>CURSO FUTBOL</title> 
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
html {
    background-image: url(../../../../img/fondoceleste.jpg);
    background-size: cover;
    background-attachment: fixed;

}


body {
 margin: 1px; 
  padding: 1px;  
}

.mainmenu { 
    color: #ccc; 
    font-size: 16px; 
    font-family: 'Cuprum', Georgia, "Times New Roman", Times, Serif; 
    background: #002244; 
    width: 99.9%;
     height: 51px; 
     border: 0px solid #026; border-bottom: 3px solid #012; text-shadow: 0 1px 0 #000;}

.mainmenu ul  {margin: 0; padding: 0; }
.mainmenu li i{ position: absolute; margin-left: -25px; margin-top: 6px; color: #012;  text-shadow: 0 1px 0 #036;}
.mainmenu li  { float: left; display: block; padding: 10px 10px 10px 50px; border-right: 1px solid #012; cursor: pointer; min-width: 100px; max-width: 100px; }

.mainmenu li:hover { background: #012; }
.mainmenu li:hover i {color: #036; text-shadow: 0 1px 0 #000;}
.mainmenu li main {font-weight: 700; margin-top: -18px; }
.mainmenu li desc { position: relative; float: left; font-size: 11px; color: #888; }

.mainmenu li, .mainmenu li i, .mainmenu li main, .mainmenu li desc {
    -moz-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    transition: all 0.8s ease-in-out;
    -webkit-transition: all 0.8s ease-in-out;}

.mainmenu li:hover main { margin-left: 10px;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;}
.mainmenu li:hover desc { margin-left: 30px;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;}

</style>
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
            <li>&nbsp;<main>HOME      </main><a href="index.php"><desc>Sitracond</desc></a></li>
            <li>&nbsp;<main>DIRECTIVA </main><a href="dirigentes.php"><desc>2019-2021</desc></a></li>
            <li>&nbsp;<main>AFILIADOS </main><a href="afiliados/index.php"><desc>GENERAL</desc></a></li>
            <li>&nbsp;<main>CURSOS    </main><a href="alumnos.php"><desc>MATRICULAS</desc></a></li>
            <li>&nbsp;<main>REPORTE   </main><desc>GENERAL</desc></li>
            <li>&nbsp;<main>[MILAGROS]</main><desc>SESION ACTIVA</desc></li>
            <li>&nbsp;<main>SALIR     </main><a href="../logout.php"><desc>Cerrar Sesion</desc></a></li>
        </ul>
    </div>

 
<center> <h1>TALLER VERANO | FUTBOL</h1> 
         <h2>SABADO 09:00 AM  -  01:00 PM </h2>
</center>
<hr>

<br>


<div id="contenedor">
    <button target="popup" class="boton"><a href="nuevoalumno.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../../../../img/agregar.png' width='32' heigth='32'>
        NUEVO ALUMNO
    </a></button>

 &nbsp


    <button target="popup" class="boton"><a href="modificaralumno.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../../../../img/modificar.ico' width='32' heigth='32'>
        MODIFICAR ALUMNO
    </a></button>
 &nbsp
    <button target="popup" class="boton"><a href="eliminaralumno.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../../../../img/eliminar.png' width='32' heigth='32'>
        ELIMINAR ALUMNO
    </a></button>

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