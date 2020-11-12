<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- <link rel="stylesheet" href="../css/inicio.css"> -->
    <link rel="stylesheet" href="../css/menu.css">
    <title>SITRACOND</title>
</head>
<style>

#imagen{
    width: 500px;
    margin:8px auto;
    align-items: center;
  display: flex;
  justify-content: center;}
}
</style>


<body> 
	
    <?php
include("../conexion.php"); // establecer y realizar consulta. guardamos en variable.
    ?>

<!-- NAV -->
<div class="mainmenu">
  <ul>
    <li>&nbsp;<main>INICIO</main><a href="index.php"><desc>HOME</desc></a></li>
    <li>&nbsp;<main>DIRECTIVA </main><a href="dirigentes.php"><desc>2019-2021</desc></a></li>
    <li>&nbsp;<main>AFILIADOS</main><a href="afiliados.php"><desc>GENERAL</desc></a></li>
    <li>&nbsp;<main>TALLERES</main><a href="rtaller/registro.html"><desc>REGISTROS</desc></a></li>
    <li>&nbsp;<main>REPORTE</main><desc>GENERAL</desc></li>
    <li>&nbsp;<main>MILI</main><desc>Sesion Activa</desc></li>
    <li>&nbsp;<main>SALIR</main><a href="../logout.php"><desc>Cerrar Sesion</desc></a></li>
  </ul>
</div>



<h1>

    SISTEMA DE   REGISTRO PARA LA ORGANIZACION DE SINDICATO DE TRABAJADORES 
                MINEROS DE LA COMPAÑIA MINERA CONDESTABLE S.A

</h1> 

<img id="imagen" src="../img/logo2.jpeg">





</body>
</html>