<?PHP
include('config/conexion.php');

session_start();

$rut=$_POST['usuario'];
$dv=$_POST['dv'];
$password=$_POST['password'];

$conn = mysqli_connect($host,$usuario,$clave) or die("problemas con el servidor");
	mysqli_select_db($conn,$db_nombre) or die (" problema con la base de datos");
if (isset($_POST['usuario']) && !empty($_POST['usuario'])&& isset ($_POST['password']) && !empty($_POST['password']))
	{
		foreach($conn->query('SELECT rut,dig_ver,password,cargo from persona') as $fila){
		print_r($fila);
	}

	
	$sel = mysqli_query($conn,"SELECT rut,password,dig_ver,cargo FROM persona WHERE rut='$rut' AND dig_ver='$dv' AND password='$password'");
	$sesion = mysqli_fetch_array($sel);
	
	if($password == $sesion['password'])
	{
		if($rut == $sesion['rut'])
				{
						if ($dv == $sesion['dig_ver']) {
									if($sesion['cargo']==1){
												header("location:vista_empleado.php");
									}
									if($sesion['cargo']==0){
												header("location:vista_alumno.php?rut$rut&dv$dv");

									}
						else
						{
									warning();
						}
						}
				}

		}
	}		
?>
			<script>
				function warning(){
					confirm("Rut o contraseña invalidos");
				}

			</script>
