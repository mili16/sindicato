<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>SITRACOND</title>
</head>

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
    <li><i class="icon-home icon-large"></i>&nbsp;    <main>INICIO</main><a href="#"><desc>HOME</desc></a></li>
    <li><i class="icon-comments icon-large"></i>&nbsp;<main> DIRECTIVA </main><desc>2019-2021</desc></li>
    <li><i class="icon-tint icon-large"></i>&nbsp;    <main>AFILIADOS</main><desc>GENERAL</desc></li>
    <li><i class="icon-comments icon-large"></i>&nbsp;<main>CURSOS</main><desc>MATRICULAS</desc></li>
    <li><i class="icon-comments icon-large"></i>&nbsp;<main>REPORTE</main><desc>GENERAL</desc></li>
    <li><i class="icon-tint icon-large"></i>&nbsp;    <main>[MILAGROS]</main><desc>SESION ACTIVA</desc></li>
    <li><i class="icon-home icon-large"></i>&nbsp;   <main>SALIR</main><a href="../logout.php"><desc>Cerrar Sesion</desc></a></li>
  </ul>
</div>



<h1>SISTEMA DE REGISTROS PARA LA ORGANIZACION DE SINDICATO DE TRABAJADORES MINEROS DE LA COMPAÑIA MINERA CONDESTABLE S.A<br>
BIENVENIDO
</h1> 

<img id="inicio" src="../img/logo2.jpeg">





</body>
</html>