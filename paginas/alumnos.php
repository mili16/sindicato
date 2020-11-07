<html>
<head> 

<meta charset="utf-8">

<link rel="stylesheet" href="../css/boton.css">
<link rel="stylesheet" type="text/css" href="../css/cursos.css">
<link rel="stylesheet" href="../css/inicio.css">
   
<title>ALUMNOS</title> </head>
<style>

html {
    background-image: url(../img/fondoceleste.jpg);
    background-size: cover;
    background-attachment: fixed;

}

body {
 margin: 0px; 
  padding:0px;  
}

.mainmenu { 
    color: #ccc; 
    font-size: 16px; 
    font-family: 'Cuprum', Georgia, "Times New Roman", Times, Serif; 
    background: #002244; 
    width: 100%;
    height: 51px; 
    border: 0px solid #026; border-bottom: 3px solid #012; text-shadow: 0 1px 0 #000;}

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
#contenedor{
    margin-top: 10%;
}
</style>
</head>
<body> 
	
<!-- NAV -->



    <div class="mainmenu">
        <ul>
            <li>&nbsp;<main>HOME      </main><a href="index.php"><desc>Sitracond</desc></a></li>
            <li>&nbsp;<main>DIRECTIVA </main><a href="dirigentes.php"><desc>2019-2021</desc></a></li>
            <li>&nbsp;<main>AFILIADOS </main><a href="afiliados/index.php"><desc>GENERAL</desc></a></li>
            <li>&nbsp;<main>CURSOS    </main><a href="alumnos.php"><desc>MATRICULAS</desc></a></li>
            <li>&nbsp;<main>REPORTE   </main><desc>GENERAL</desc></li>
            <li>&nbsp;<main>[MILAGROS]</main><desc>SESION ACTIVA</desc></li>
            <li>&nbsp;<main>SALIR     </main><a href="../logout.php"><desc>Cerrar Sesion</desc></a></li>
        </ul>
    </div>

    <center> <h1> SITRACOND CURSOS </h1> </center>
    <hr>




<div id="contenedor">
    <button target="popup" class="boton"><a href="cursos/deporte/index.html" >
        
        <img src='../img/modificar.ico' width='32' heigth='32'>
        REGISTRO DEPORTE
    </a></button>


 &nbsp

    <button target="popup" class="boton"><a href="cursos/reposteria/index.html"> 
        <img src='../img/modificar.ico' width='32' heigth='32'>
        REGISTRO REPOSTERIA
    </a></button>
 &nbsp
    <button target="popup" class="boton"><a href="#">
         <img src='../img/horario.png' width='32' heigth='32'>
        HORARIO DEPORTE 
    </a></button>
 &nbsp
        <button target="popup" class="boton"><a href="#"> 
       <img src='../img/horario.png' width='32' heigth='32'>
        HORARIO REPOSTERIA  
    </a></button>

</div>

</body>
</html>