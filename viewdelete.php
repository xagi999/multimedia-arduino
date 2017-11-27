<?php 
	include 'config/conexion.php';
	$rut = $_POST['rut'];	
	$dv	= $_POST['dv'];	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
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
 <div class="container">
		<div class="row">
			<div>
				<div>
					<table class="table table-bordered">
						<td>Rut</td>
						<td>Nombre</td>
						<td>Apellido Paterno</td>
						<td>Apellido Materno</td>
						<td>ID Tarjeta</td>
						<td>Estado</td>
						<?php
						$sql = "UPDATE alumno SET estado=0 WHERE $rut=rut";

    					// prepara la consulta
    					$stmt = $conn->prepare($sql);

    					// ejecuta la consulta
   						$stmt->execute();

						$sql = "SELECT p.nombres, p.apell_pat, p.Apell_mat, p.rut, p.dig_ver, al.id_tarjeta,al.estado FROM persona p JOIN alumno al ON p.rut=al.rut WHERE p.rut='$rut' AND p.dig_ver='$dv'"; 

    						foreach ($conn->query($sql) as $row) {
    							if ($row>0) {
    							
    								echo"<tr>";
        							echo "<td>".$row['rut'].'-'.$row['dig_ver']."</td>";
									echo "<td>".$row['nombres']."</td>";
									echo "<td>".$row['apell_pat']."</td>";
									echo "<td>".$row['Apell_mat']."</td>";
    								echo "<td>".$row['id_tarjeta']."</td>";
    								if($row['estado']==1){
    									echo "<td>Activo</td>";
    								}
    								else{
    									echo "<td>Inactivo</td>";
    								}
									}
								else{
									echo"no se encontraron coincidencias";
								}
    }
						 ?>
					</table>
				</div>
			</div>
		</div>
	</div>	
 </body>
 </html>