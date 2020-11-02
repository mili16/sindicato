    <?php
// Datos de la base de datos
    $host = "localhost";
    $basededatos = "sindicato";
    $usuariodb = "root";
    $clavedb = "";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

    if ($conexion->connect_errno) {
    	echo "error en la conexion a la bd";
    	exit();
    }
    ?>