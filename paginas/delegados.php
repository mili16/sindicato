<html>
<head> 

<meta charset="utf-8">

<link rel="stylesheet" href="../css/boton.css">
<link rel="stylesheet" type="text/css" href="../css/cursos.css">
<link rel="stylesheet" href="../css/inicio.css">
<title>DIRECTIVA 2019</title> </head>
<style>

html {
    background-image: url(../img/mina.jpg);
    background-size: cover;
    background-attachment: fixed;

}


body { padding: 1px;
 margin: 0px;   
}

.mainmenu { 
    color: #ccc; 
    font-size: 16px; 
    font-family: 'Cuprum', Georgia, "Times New Roman", Times, Serif; 
    background: #002244; 
    width: 100%;
     height: 51px; 
     border: 1px solid #026; border-bottom: 3px solid #012; text-shadow: 0 1px 0 #000;}

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
#inicio{
    width: 500px;
    margin:8px auto;
    display:block;}
}
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
<div class="mainmenu">
  <ul>
    <li><i class="icon-home icon-large"></i>&nbsp;<main>INICIO</main><desc>HOME</desc></li>
    <li><i class="icon-comments icon-large"></i>&nbsp;<main>DIRECTIVA</main><desc>2019-2021</desc></li>
    <li><i class="icon-tint icon-large"></i>&nbsp;<main>AFILIADOS</main><desc>GENERAL</desc></li>
    <li><i class="icon-comments icon-large"></i>&nbsp;<main>CURSOS</main><desc>MATRICULAS</desc></li>
    <li><i class="icon-comments icon-large"></i>&nbsp;<main>REPORTE</main><desc>GENERAL</desc></li>
    <li><i class="icon-tint icon-large"></i>&nbsp;<main>[MILAGROS]</main><desc>SESION ACTIVA</desc></li>
    <li><i class="icon-home icon-large"></i>&nbsp;<main>SALIR</main><desc>CERRAR SESION</desc></li>
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