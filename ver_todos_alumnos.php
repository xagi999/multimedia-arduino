					
<?php
include('vista_empleado.php');


 
  $mysqli = new mysqli('localhost', 'root', '', 'sistemaupla');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Alumnos activos</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="generator" content="Geany 1.23.1" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
 <div class="col-md-1"></div>
      <div class="col-md-6">
         <h1>Listado de Alumnos</h1>
                
    <p>Alumnos con tarjeta Activos:
        <?php
                    
          $query = $mysqli -> query ("SELECT p.rut, p.dig_ver, p.nombres, p.apell_pat, p.Apell_mat, p.correo, p.direccion, p.telefono, al.id_tarjeta,p.password,al.estado FROM persona p JOIN alumno al ON p.rut=al.rut WHERE al.estado='1'");
                      
          while ($valores = mysqli_fetch_array($query)) {

            echo "<table class='table table-hover'>";
            echo "<tr><td><b>Rut del Alumno</b></td><td><b>DV</b></td><td><b>Nombres</b></td><td><b>Apellido Paterno</b></td><td><b>Apellido Materno</b></td><td><b>Correo</b></td><td><b>Teléfono</b></td><td><b>Direccion</b></td><td><b>Código Tarjeta</b></td><td><b>Password</b></td></tr> \n"; 
   do { 
      echo "<tr><td>".$valores["rut"]."</td><td>".$valores["dig_ver"]."</td><td>".$valores["nombres"]."</td><td>".$valores["apell_pat"]."</td><td>".$valores["Apell_mat"]."</td><td>".$valores["correo"]."</td><td>".$valores["telefono"]."</td><td>".$valores["direccion"]."</td><td>".$valores["id_tarjeta"]."</td><td>".$valores["password"]."</td></tr> \n"; 
                          
       } while ($valores = mysqli_fetch_array($query)); 
   echo "</table> \n"; 
} 
?>
    </p>

<p>Alumnos con Tarjeta inactivada
<?php
 
  $query2 = $mysqli -> query ("SELECT p.rut, p.dig_ver, p.nombres, p.apell_pat, p.Apell_mat, p.correo, p.direccion, p.telefono, al.id_tarjeta,p.password,al.estado FROM persona p JOIN alumno al ON p.rut=al.rut WHERE al.estado='0'");
                      
          while ($valores2 = mysqli_fetch_array($query2)) {

            echo "<table border = '1'> \n";
            echo "<tr><td>Rut del Alumno</td><td>dv</td><td>nombres</td><td>apellido paterno</td><td>Apellido Materno</td><td>Correo</td><td>Telefono</td><td>Direccion</td><td>Codigo Tarjeta</td><td>Password</td></tr> \n"; 
   do { 
      echo "<tr><td>".$valores2["rut"]."</td><td>".$valores2["dig_ver"]."</td><td>".$valores2["nombres"]."</td><td>".$valores2["apell_pat"]."</td><td>".$valores2["Apell_mat"]."</td><td>".$valores2["correo"]."</td><td>".$valores2["telefono"]."</td><td>".$valores2["direccion"]."</td><td>".$valores2["id_tarjeta"]."</td><td>".$valores2["password"]."</td></tr> \n"; 
                          
       } while ($valores2 = mysqli_fetch_array($query2)); 
   echo "</table> \n"; 
} 


?>
    </p>


         
          </div>
  </div>
    </div>
      <div class"col-md-1"></div>
</body>

</html>