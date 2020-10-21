<html>
<head> <title>CURSOS VACACIONALES</title> 
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="../../css/cursos.css">

<link rel="stylesheet" href="../../css/inicio.css">

<link rel="stylesheet" href="../../css/boton.css">



<!-- pop up -->
<script> 
function abrir() { 
open('#','','top=300,left=300,width=300,height=300') ; 
} 
</script>
<!-- fin pop up -->



</head>
<body   bgcolor="#ABB1BC"> 


    
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
	<?php
	if (isset($_POST["alumnos"]) && $_POST["alumnos"]!="a")    {
    $nom_alumno= $_POST["alumnos"];   
     
    $consulta = "SELECT * FROM alumnos where nom_alumno='".$nom_alumno."'";
    }else{
        
        $consulta = "SELECT  alumnos.id_alumno,
                             alumnos.nom_alumno,
                             alumnos.ape_alumno,
                             alumnos.dni_alumno,
                             alumnos.edad_alumno,cursos.nom_curso from alumnos inner join cursos on alumnos.nom_curso=cursos.nom_curso";
    }
    
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table width='800' align='center'>";
	echo"<caption>REPORTE GENERAL DE CURSOS VACACIONALES</caption>";
	echo "<tr>";
	echo "<th>Nro</th>";
	echo "<th>NOMBRE</th>";
	echo "<th>APELLIDO</th>";
    echo "<th>DNI</th>";
    
    echo "<th>CURSO</th>";

	echo "</tr>";
	$no=1;
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";	
		echo "<td>" . $no. "</td>";
		echo "<td>" . $columna['nom_alumno'] . "</td>";
		echo "<td>" . $columna['ape_alumno'] . "</td>";
		echo "<td>" . $columna['dni_alumno'] . "</td>";
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