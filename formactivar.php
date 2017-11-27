<?php 
include('vista_empleado.php');


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Habilitar</title>
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
	<div class="col-md-3"></div>
	<div class="col-md-4">
	<form action="habilitar.php" method="POST">
	<br><h1><div class="col-md-3"></div>
		Activar Alumno</h1>
		<label for="rut" id="rut">Rut: </label>
		<input type="text" name="rut" id="rut"> -
		<input type="text" name="dv" id="dv" size="1">
		<div class="col-md-2"></div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Habilitar</button>
		<div class="col-md-1"></div>
	</form>

	</div>
</body>
</html>