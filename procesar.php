<?php
include('config/conexion.php'); //Llama a la configuracion dentro de la carpeta config.

function getPersonas(){
	$conn = conectar();
	$sql = "SELECT * FROM persona";
	$st = $conn->prepare($sql); //Recibe y prepara una sentencia sql para ser ejecutada.
	$st->execute(); //Ejecuta una consulta preparada.
	$resultado = $st->fetchAll();
	return $resultado;
	$conn = null;
}

if ($_GET['param2'] == "upla" and isset($_GET['param2']))  {
	//LLamamos a la funcion y le asignamos lo que retorna getPersonas.
	$res = getPersonas();

	//Escribimos el array de forma arbitraria
	/*
	echo "<pre>";
	print_r($res);
	echo "</pre>";
	*/

	//$res es el arreglo a recorrer.
	//$key es un contador que empieza desde 0
	//$value es el sobrenombre del array para no tocar el array principal.
	foreach ($res as $key => $value) {
		echo "<span class= 'btn btn-primary'> Nombre: ".$value['nombre']. "</span>";
		echo '<br>';
		echo "Edad: ".$value['edad'];
		echo "<hr>";
	}

	echo "<input type='text' name='nombre".$_GET['param2']."'>";
	
	echo "<br>";
}else{
	echo "2";
}
 ?>