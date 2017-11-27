<?php 
$rut=$_REQUEST['rut'];
$dv=$_REQUEST['dv'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/goy.css" />
	<link rel="stylesheet" href="js/goy.js" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
			
			<div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="vista_alumno.php">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a href="ver_datos1alumno.php">Mostrar Alumno<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="formactivar1.php">Activar Tarjeta<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
              
          </div>
        </div>
      </div>
      
    </div>



	
</body>
</html>