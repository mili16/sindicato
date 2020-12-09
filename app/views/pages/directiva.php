<?php require_once __DIR__ . '/../include/menu.php'; ?>
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
<main class="content content-directiva">
    <div class="">

        <h1 class="title">
            Directiva
        </h1>
        <div class="buttons">
            <button onclick="openForm();" class="button-newuser">
                New User
            </button>
            <button class="button-edituser">
                Edit User
            </button>
            <button class="button-deleteuser">
                Delete User
            </button>
        </div>
    </div>
    <div class="table-container">
        <table width='800' class='table'>
        <!-- <caption>SITRACOND</caption> -->
            <thead>
                <tr class="table-title">
                    <th>CODIGO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DNI</th>
                    <th>CARGO</th>
                    <th>CELULAR</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once __DIR__ . '/../include/form.php';
                insertTable($directivas, $resultado);
            ?>
            </tbody>
        </table>
    </div>
</main>

<?php require_once __DIR__ . '/../include/footer.php'; ?>
