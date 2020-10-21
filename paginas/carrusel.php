<!DOCTYPE html>
<html lang="en">
<head>
         <link rel=”Shortcut Icon” href=”favicon.ico” type=”image/x-icon” />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="../carrusel.css">

    <title>GALERIA</title>
</head>
<body>
     <!-- fin mapa -->

<ul id="nav">
    <li class="home"><a href="inicio.html">INICIO</a></li>
    <li class="tutorials"><a href="#">CURSOS</a>
<ul>
      <li> <a href="horario.php">HORARIOS</a>  </li><br> <br> <br>
      <li > <a href="alumnos.php">REGISTRAR</a></li>
</ul>

    </li>

    <li class="about"><a href="dirigentes.php">DIRIGENTES</a></li>
    <li class="news"><a href="#">DELEGADOS</a></li>
    <li class="contact"><a href="#">AFILIADOS</a></li>
    <li class="contact"><a href="reportes/reporte.php">REPORTES</a></li>
    <li class="contact"><a href="cerrar.php">CERRAR SESION</a></li>
</ul>


<!-- FIN NAV -->

 <blockquote>

<!-- carrusel -->
     BIENVENID@ 

<!-- mensaje : no ingreso nombre -->

<?php
// FUNCIONES DE RECOGIDA Y RECORTE DE UN DATO
if ($_REQUEST["nombre"] == "") {
    print "<p>No ha escrito ningún nombre</p>";
} else {

}
?>


</div>




    <div class="content-all">
 
        <div class="content-carrousel">
            <figure><img src="DSC_0410.JPG"></figure>

            <figure><img src="DSC_0406.JPG"></figure>
            
            <figure><img src="DSC_0409.JPG"></figure>
            
            <figure><img src="DSC_0411.JPG"></figure>
            
            <figure><img src="DSC_0406.JPG"></figure>
            
            <figure><img src="DSC_0407.JPG"></figure>
            
            <figure><img src="DSC_0408.JPG"></figure>
            
            <figure><img src="DSC_0409.JPG"></figure>
            
            <figure><img src="DSC_0410.JPG"></figure>
        </div>
    </div>
</blockquote>


</body>
</html>