<?php 
	include 'config/conexion.php';

	$nombre = $_POST['nombre'];
	$apell_pat = $_POST['apell_pat'];
	$apell_mat = $_POST['apell_mat'];
	$carrera = $_POST['carrera'];
	$rut = $_POST['rut'];
	$dv = $_POST['dv'];
	$promocion = $_POST['promocion'];
	$tarjeta = $_POST['tarjeta'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];

	$sql = "INSERT INTO alumno(rut, dv, carrera, promocion, id_tarjeta, estado) VALUES('$rut', '$dv', '$carrera', '$promocion', '$tarjeta', 1)";
	//por el momento solo inserta con un valor de tarjeta asignado por el usuario mas adelante insertara x un valor automatico del sistema

	$sql1 = "INSERT INTO persona(nombres, apell_pat, apell_mat, rut, dig_ver, correo, telefono, direccion) VALUES('$nombre', '$apell_pat', '$apell_mat', '$rut', '$dv', '$correo', '$telefono', '$direccion')";
	if ($consulta = $conn->query($sql)) {
		if ($consulta1 = $conn->query($sql1)) {
			header('Location: formagregar.html');

			//esto se reemplazara x un trigger mas adelante.
		}
		else{
			echo "error al insertar.";
		}
	}
	else{
		echo "Error al insertar.";
	}
 ?>