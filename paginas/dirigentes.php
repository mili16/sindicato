<html>
<head> 

<meta charset="utf-8">

<link rel="stylesheet" href="../css/boton.css">
<link rel="stylesheet" type="text/css" href="../css/cursos.css">
<link rel="stylesheet" href="../css/inicio.css">

<title>DIRECTIVA 2019</title> </head>
<style>

html {
    background-image: url(../img/fondoceleste.jpg);
    background-size: cover;
    background-attachment: fixed;

}


body { padding: 1px;
 margin: 1px;   
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
                    <!-- NAV -->
    <div class="mainmenu">
        <ul>
            <li>&nbsp;<main>HOME      </main><a href="../index.php"><desc>Sitracond</desc></a></li>
            <li>&nbsp;<main>DIRECTIVA </main><a href="dirigentes.php"><desc>2019-2021</desc></a></li>
            <li>&nbsp;<main>AFILIADOS </main><a href="afiliados/index.php"><desc>GENERAL</desc></a></li>
            <li>&nbsp;<main>CURSOS    </main><a href="alumnos.php"><desc>MATRICULAS</desc></a></li>
            <li>&nbsp;<main>REPORTE   </main><desc>GENERAL</desc></li>
            <li>&nbsp;<main>[MILAGROS]</main><desc>SESION ACTIVA</desc></li>
            <li>&nbsp;<main>SALIR     </main><a href="../logout.php"><desc>Cerrar Sesion</desc></a></li>
        </ul>
    </div>

	<center> <h2>DIRIGENTES 2019-2021</h2> </center>
    <hr>


<br>


<div id="contenedor">
<button target="popup" class="boton"><a href="dirigentes/form_nuevo_dirigente.php" 
    onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;"><img src='../img/agregar.png' width='32' heigth='32'>
    AGREGAR
</a></button>




<button target="popup" class="boton"><a href="dirigentes/form_modificar_dirigente.php" 
    onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;"><img src='../img/modificar.ico' width='32' heigth='32'>
    MODIFICAR
</a></button>

<button target="popup" class="boton"><a href="dirigentes/form_eliminar_dirigente.php" 
    onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;"><img src='../img/eliminar.png' width='32' heigth='32'>
    ELIMINAR 
</a></button>

</div>





	<form action = "dirigentes.php" method="post">
        
        <!--Cargar datos de las categorias -->
        <?php
        $sql = "Select * from dirigentes";
        $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
        ?>

<!-- casilla -->

        <select name="dirigentes" >
        <option value="a"  >--Mostrar Dirigentes--</option>
       <?php
        while ($row = mysqli_fetch_array($resultado))
	{
		
		echo "<option value=\"".$row['nom_dirigente']."\">".$row['nom_dirigente']."</option>"; 
	}
        ?>
        </select>
 
<!-- fin casilla -->


    <input type="submit" name ="enviar" class="boton" value="Mostrar datos">
	</form>
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