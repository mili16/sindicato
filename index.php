<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN SITRACOND</title>


    <style type="text/css">
*{
    font-size: 14.6px;
    
}
body {
  /* Aquí el origen de la imagen */
  background: #5FA6EE;
}


form.login {

    background: white;
    border: 1px solid #DDDDDD;
    border-radius: 10%;
    font-family: sans-serif;
    margin: 0 auto;
    padding: 20px;
    width: 278px;
    -webkit-box-shadow: -20px -4px 31px 0px rgba(0,0,0,0.33);
-moz-box-shadow: -20px -4px 31px 0px rgba(0,0,0,0.33);
box-shadow: -20px -4px 31px 0px rgba(0,0,0,0.33);
}
form.login div {
    margin-bottom: 15px;
    overflow: hidden;
}


form img.logo{
    margin-top: -4%;
    height: 35px;
    width: 35px;
    float: right;
}
form.login div img{
    height: 200px;
    width: ;
    position: relative;
    left: 50%;
     transform: translateX(-50%);
}
form hr{
    border: 9px solid lightblue;
    border-radius: 5px;
}
form.login div input[type="text"], form.login div input[type="password"] {
    border: 1px solid #DCDCDC;
    position: relative;
    left: 50%;
     transform: translateX(-50%);
    padding: 4px;
      border: none;
  border-bottom: 2px solid lightblue ;
}

form.login div input:after{
    border: none;
  border-bottom: 2px solid lightblue ;
}



.boton {

border: none;
background: #57B1F0;
color: #f2f2f2;
padding: 10px;
font-size: 18px;
border-radius: 5px;
position: relative;
left: 50%;
  transform: translateX(-50%);
box-sizing: border-box;
transition: all 500ms ease;
}


.boton:before{
background: rgba(0,0,0,0);
color: #3a7999;
box-shadow: inset 0 0 0 3px #3a7999;
}






.error{
    color: red;
    font-weight: bold;
    margin: 10px;
    text-align: center;
}
</style>
 
</head>
<body>

<?php
session_start();
include_once "conexion.php";
 
function verificar_login($mysqli, $user,$password,&$result) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";
    $rec = mysqli_query($mysqli, $sql);
    $count = 0;
 
    while($row = mysqli_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }
 
    if($count == 1)
    {
        return 1;
    }
 
    else
    {
        return 0;
    }
}
 
if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($con, $_POST['user'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:paginas/index.php");
        }
        else
        {
            echo '<div class="error"> usuario y/o contraseña es incorrecto, vuelva a intentar.</div>';
        }
    }
?>
 





<form action="" method="post" class="login" style="margin-top: 3%;" >
   <h1>SITRACOND <img class="logo" src="img/logo.jpe"></h1>

    <hr>
    
    <div><img src="img/usuario.png" alt=""></div>
    <div><input name="user" type="text" placeholder="USUARIO" ></div>
    <div><input name="password" type="password" placeholder="CONTRASEÑA"></div>
    <div><input name="login" class="boton"  type="submit" value="login"></div>
</form>

<?php
} else {
    echo '¿Desea salir del sistema?';
    echo '<a href="logout.php">Click aqui</a>';
}
?>




</body>
</html>
