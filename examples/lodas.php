<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../assets/css/stiles.css">

	</head>

	<body >
		<form class="formulario">
		<h1>¡¡FELICIDADES!!</h1>
		<p> Ya estás registrado.
		<br><br>

		<img class="avatar" src="../assets/img/CHECKGRDS.png">
		<br><br>
		<span style="color:#dc143c; font-family:Georgia,Times,serif; font-size:12pt; font-weight:bold">Usuario:
		</span>

		<?php
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
      		$dni = $_POST["dni"];
      		$naci = $_POST["naci"];

			echo $dni;
		?>
		<br>
		<span style="color:#dc143c; font-family:Georgia,Times,serif; font-size:12pt; font-weight:bold">Contraseña:
			</span>
		<?php

	  		$array = explode("-", $naci);
			$año=$array[0];
			$mes=$array[1];
			$dia=$array[2];
			$contra=$año*$mes+$dia;

			  echo $contra;
	?>
			<?php

					$enlace = mysqli_connect("localhost","root","","prueba");
					$sentencia = "INSERT INTO usuarios (nombre,usuario,contraseña,user) VALUES ('$nombre','$dni','$contra','postulante');";

					mysqli_query($enlace,$sentencia);
					echo"<p><a class='link' href='postula.php'> Ingresar</a></p>";
		?>

		<br>
		<P> Gracias por confiar en nosotros.
	</form>
	</body>
	</html>
