<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../assets/css/stiles.css">
</head>

<body>
  <?php
    $coduser = $_POST["usuario"];
    $passuser = $_POST["contraseña"];
    $enlace = mysqli_connect("localhost","root","","prueba");
    $sentencia = "select * from usuarios where Usuario='$coduser' and Contraseña='$passuser';";
    $resultado = mysqli_query($enlace,$sentencia);
    $numFilas = mysqli_num_rows($resultado);
    if ($numFilas == 0)
    {
       echo  "<form class='formulario'>";
	     echo"<h1>¡¡ERROR!!</h1>";
       echo"<p><font color='red'>El usuario o la contraseña no existe</font>";
       echo"<br><br>";
   		 echo"<img class='avatar' src='../assets/img/bad.png'>";
  		 echo"<br><br>";
       echo"No podemos encontrar una cuenta con este usuario. <br><a href='loginvista.html'>Reinténtalo</a> o <a href='registrarvista.html'>crea una cuenta nueva</a>.</div>";
       echo"</form>";
    }
     else {
      $registro = mysqli_fetch_row($resultado); 
       if ($registro[4] == 'postulante')
        {
        header("Location:postula.php");
        }
        elseif ($registro[4] == 'admin')
        { 
        header("Location:tables.php");
        }
    }      
  ?>
</body>
</html>
