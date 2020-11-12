<html>
<head>  
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="../../css/cursos.css">

<!-- <link rel="stylesheet" href="../css/inicio.css"> -->
<link rel="stylesheet" href="../../css/menu.css">
<link rel="stylesheet" href="../../css/boton.css">
<title> HORARIO</title>


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

  <center> <h1>HORARIO TALLERES</h1> </center>
    <hr>





    <table width='800' align='center'>
     <caption>Talleres</caption>
     <tr>
      <th>LUNES</th> <th>MARTES</th> <th>MIERCOLES</th> <th>JUEVES</th> <th>VIERNES</th> <th>SABADO</th>
     </tr>

    <tr>
      <td>REPOSTERIA</td><td></td><td>REPOSTERIA</td><td></td><td>REPOSTERIA</td><td></td>
    </tr>

    <tr>
      <td></td><td>VOLEY</td><td></td><td>VOLEY</td><td></td><td>VOLEY</td>
    </tr>

    <tr>
      <td></td><td>FUTBOL</td><td></td><td>FUTBOL</td><td></td><td>FUTBOL</td>
    </tr>
  </table>

<br/>
<!-- tabla profesores -->
<?php 

      
        include('../../conexion.php'); 
echo "
<table width='800' align='center'>
   <caption>PROFESORES</caption>
    <tr>
    <th>ID</th> <th>NOMBRE</th> <th>APELLIDO</th> <th>DNI</th> <th>CELULAR</th> <th>EMAIL</th> <th>TALLER</th>
    </tr>";

    $no=1;
    $query = "select * from profesores ORDER BY profesores.id_prof ASC";     // Esta linea hace la consulta
    $result = mysqli_query($conexion,$query); 

    while ($registro = mysqli_fetch_array($result)){ 
        echo "<tr>

        <td>" . $registro['id_prof'] . "</td>

        <td>" . $registro['nom_prof'] . "</td>

        <td>" . $registro['ape_prof'] . "</td>

        <td>" . $registro['dni_prof'] . "</td>

        <td>" . $registro['cel_prof'] . "</td>

        <td>" . $registro['email_prof'] . "</td>

        <td>" . $registro['nom_curso'] . "</td>

        </tr>"; 
   $no++;
    }
    
    echo "</table>"; // Fin de la tabla
    // cerrar conexión de base de datos
    mysqli_close( $conexion );
    
        

    
?>
  

  <body>
</html>