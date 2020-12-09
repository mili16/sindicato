 <?php

if (isset($_POST["dirigentes"]) && $_POST["dirigentes"]!="a") {
    $nom_dirigente = $_POST["dirigentes"];
    $consulta = "SELECT * FROM dirigentes where nom_dirigente='".$nom_dirigente."'";
} else{
    $consulta = "SELECT * FROM dirigentes";
}

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

// cerrar conexión de base de datos
mysqli_close( $conexion );

function insertTable($array, $resultado) {
    while ($columna = mysqli_fetch_assoc( $resultado )) {
        echo "<tr class='table-body'>";
        echo "<td>" . $columna[$array['id']] . "</td>";
        echo "<td>" . $columna[$array['nombre']] . "</td>";
        echo "<td>" . $columna[$array['apellido']] . "</td>";
        echo "<td>" . $columna[$array['dni']] . "</td>";
        echo "<td>" . $columna[$array['cargo']] . "</td>";
        echo "<td>" . $columna[$array['celular']] . "</td>";
        echo "</tr>";
    }
}

$directivas = [
    'id' => 'id_dirigente',
    'nombre' => 'nom_dirigente',
    'apellido' => 'ape_dirigente',
    'dni' => 'dni_dirigente',
    'cargo' => 'cargo_dirigente',
    'celular' => 'cel_dirigente'
];
