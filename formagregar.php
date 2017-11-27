<?php 
	include ('vista_empleado.php');



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Alumnos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="css/estilos.css"/>
<link rel="stylesheet" href="js/bootstrap.min.js" />
<link rel="stylesheet" href="js/jquery-3.1.1.min" />
<link rel="stylesheet" href="js/myjava.js" />
</head>
<body>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	<form action="viewdelete.php" method="POST">
	<br><h1>
		Ingresar Alumnos</h1>
		<br>
		<br>

	<form action="insertar.php" method="POST">
		<label for="nombre" id="nombre">Nombres: </label>
		<br>
		<input type="text" size="40" name="nombre" id="nombre">
		<br>
		<label for="apell_pat" size="40" id="apell_pat">Apellido paterno: </label>
		<br>
		<input type="text" size="40" name="apell_pat" id="apell_pat">
		<br>
		<label for="apell_mat"  size="40" id="apell_mat">Apellido materno: </label>
		<br>
		<input type="text" name="apell_mat" size="40" id="apell_mat">
		<br>
		<label for="correo" size="40" id="correo">Correo: </label>
		<br>
		<input type="text" size="40" name="correo" id="correo">
		<br>
		<label for="carrera" size="40" id="carrera">Carrera: </label>
		<br>
		<input type="text" size="40" name="carrera" id="carrera">
		<br>
		<label for="rut" id="rut">Rut: </label>
		<br>
		<input type="text" name="rut" id="rut"> -
		<input type="text" name="dv" id="dv" maxlength="1" size="1">
		<br>
		<label for="promocion" size="40" id="promocion">Promoción: </label>
		<br>
		<input type="text" name="promocion" size="40" id="promocion">
		<br>
		<label for="telefono" size="40" id="telefono">Teléfono: </label>
		<br>
		<input type="text" name="telefono" size="40" id="telefono">
		<br>
		<label for="direccion" size="40" id="direccion">Direccion: </label>
		<br>
		<input type="text" size="40" name="direccion" id="direccion">
		<br>
		<label for="tarjeta" size="40" id="tarjeta">Nro. tarjeta: </label>
		<br>
		<input type="text" size="40" name="tarjeta" id="tarjeta">
		<br>
		<br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>	
	</div>
	</form>
</body>
</html>