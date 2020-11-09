<!DOCTYPE html>
<html lang="en">
<head> 
   <meta charset="ISO-8859-1">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/cursos.css">
    <link rel="stylesheet" href="../css/boton.css">

    <title>AFILIADOS</title>
</head>


<body> 
	
   



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

<h1>REGISTRO DE AFILIADOS</h1>
    <hr>


<br>


<!-- botones -->

<div id="contenedor">
    <button target="popup" class="boton"><a href="afiliados/nuevo_afiliado.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/agregar.png' width='32' heigth='32'>
        AGREGAR 
    </a></button>
 &nbsp

    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/modificar.ico' width='32' heigth='32'>
        MODIFICAR 
    </a></button>
 &nbsp

    <button target="popup" class="boton"><a href="afiliados/eliminar_afiliado.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=450px'); return false;">
        <img src='../img/eliminar.png' width='32' heigth='32'>
        ELIMINAR 
    </a></button>




</div>

  <?php 

      
        include('conexion.php'); 
echo "<table width='800' align='center'>";
    echo"<caption>REGISTRO GENERAL</caption>";
    echo "<tr>";
    echo "<th>CODIGO</th>";
    echo "<th>APELLIDOS</th>";
    echo "<th>NOMBRES</th>";
    echo "<th>DNI</th>";
    echo "<th>TIPO DE SANGRE</th>";
    echo "<th>DIRECCION</th>";
    echo "<th>CIUDAD</th>";
    echo "<th>REFERENCIA</th>";
    echo "<th>DEPARTAMENTO</th>";
    echo "<th>PROVINCIA</th>";
    echo "<th>DISTRITO</th>";
    echo "<th>FECHA NAC</th>";
    echo "<th>GRADO INSTRUCCION</th>";
    echo "<th>TELEFONO</th>";
    echo "<th>EMAIL</th>";
    echo "<th>AREA TRABAJO</th>";
    echo "<th>CATEGORIA/CARGO</th>";
    echo "<th>FECHA INGRESO</th>";
    echo "<th>NOMBRE PADRE</th>";
    echo "<th>APELLIDO PADRE</th>";
    echo "<th>NOMBRE MADRE</th>";
    echo "<th>APELLIDO MADRE</th>";
    echo "<th>NOMBRE ESPOSA</th>";


    echo "</tr>";
    $no=1;
    $query = "select * from afiliado ORDER BY afiliado.id_afiliado ASC";     // Esta linea hace la consulta
    $result = mysqli_query($conexion,$query); 

    while ($registro = mysqli_fetch_array($result)){ 
        echo "<tr>";

        echo "<td>" . $registro['id_afiliado'] . "</td>";

        echo "<td>" . $registro['ape_afiliado'] . "</td>";

        echo "<td>" . $registro['nom_afiliado'] . "</td>";

        echo "<td>" . $registro['dni_afiliado'] . "</td>";

        echo "<td>" . $registro['tipo_sangre'] . "</td>";

        echo "<td>" . $registro['direccion'] . "</td>";

        echo "<td>" . $registro['ciudad'] . "</td>";

        echo "<td>" . $registro['referencia_ubicacion'] . "</td>";

        echo "<td>" . $registro['departamento'] . "</td>";

        echo "<td>" . $registro['provincia'] . "</td>";

        echo "<td>" . $registro['distrito'] . "</td>";

        echo "<td>" . $registro['fech_nac'] . "</td>";

        echo "<td>" . $registro['grado_instruccion'] . "</td>";

        echo "<td>" . $registro['telefono'] . "</td>";

        echo "<td>" . $registro['e_mail'] . "</td>";

        echo "<td>" . $registro['area_trabajo'] . "</td>";

        echo "<td>" . $registro['categoria_o_cargo'] . "</td>";

        echo "<td>" . $registro['fech_ingreso_empresa'] . "</td>";

        echo "<td>" . $registro['nom_padre'] . "</td>";

        echo "<td>" . $registro['ape_padre'] . "</td>";

        echo "<td>" . $registro['nom_madre'] . "</td>";

        echo "<td>" . $registro['ape_madre'] . "</td>";

        echo "<td>" . $registro['nom_esposa'] . "</td>";


        echo "</tr>"; 
   $no++;
    }
    
    echo "</table>"; // Fin de la tabla
    // cerrar conexión de base de datos
    mysqli_close( $conexion );
    
        

    
?>
  

</body>
</html>