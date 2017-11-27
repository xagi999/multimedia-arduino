<?php
	$usuario="root";
	$clave="";
	$db_nombre="sistemaupla";
	$host="localhost";

    $conn = new PDO("mysql:host=$host;dbname=$db_nombre", $usuario, $clave);
    return $conn;
 ?>	