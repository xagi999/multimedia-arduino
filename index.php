<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="css/estilos.css"/>
<link rel="stylesheet" href="js/bootstrap.min.js" />
<link rel="stylesheet" href="js/jquery-3.1.1.min" />
<link rel="stylesheet" href="js/myjava.js" />

</head>
<body style="background-color:powderblue;">
 <div class="container">
 <div class="col-md-3"></div>
			<div class="col-md-4">

      		<form class="form-signin" action="procesarlogin.php" method="POST">
        	<h2 class="form-signin-heading">Inicie Sesion</h2>
        	<label for="user" class="sr-only">usuario</label>
        	<input type="text" name="usuario" placeholder="Rut Usuario" required autofocus> - 
        	<input type="text" name="dv"  placeholder="dv" size="2" required autofocus>
        	<label for="inputPassword" class="sr-only">Password</label>
        	<br>
        	<br>
        	<input type="password" name="password" placeholder="Password" required>
        	<br>
       
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      		</form>
      		</div>
	</div>
    </div>
    	<div class"col-md-3"></div>
</body>

</html>
