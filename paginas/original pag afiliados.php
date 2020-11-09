<!DOCTYPE html>
<html lang="en">
<head> 
   <meta charset="ISO-8859-1">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/cursos.css">
    <link rel="stylesheet" href="../css/boton.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-betal/jquery.js"></script>
    <script>
        $(function(){
            $("adicional").on('click',function(){
                $("#tabla tbody trieq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
            });
           $(document).on("click",".eliminar",function(){
            var parent=$(this).parents().get(0);
           });
        });
    </script>
    <title>AFILIADOS</title>
</head>


<body> 
	
   
<?php include("conexion.php");  ?>


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
        AGREGAR AFILIADO
    </a></button>

    <button target="popup" class="boton"><a href="#" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/modificar.ico' width='32' heigth='32'>
        MODIFICAR AFILIADO
    </a></button>

    <button target="popup" class="boton"><a href="afiliados/eliminar_afiliado.php" 
        onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=600px,height=600px'); return false;">
        <img src='../img/eliminar.png' width='32' heigth='32'>
        ELIMINAR AFILIADO
    </a></button>

</div>

	<section>
     <table>
         <tr>
             <th>id</th>
             <th>nombres</th>
             <th>apellido</th>
         </tr>
         <?php 
         while($registro=$query->fetch_array(MYSQLI_BDTH))
         {
            echo "<tr>
                    <td>".$registro['id_afiliado']."</td>
                    <td>".$registro['nom_afiliado']."</td>
                    <td>".$registro['ape_afiliado']."</td>
                    </tr>";
         } 
         ?>
     </table>
     <form action="" method="POST">
         
     </form>
     </table>   
    </section>

</body>
</html>