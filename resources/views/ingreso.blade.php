<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingreso</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
	  <link rel="stylesheet" href="/css/ingreso.css">
</head>
<body>
 <div class="container">

	 <h4>¡Hola Ingresa Tu Usuario Y Contraseña</h4>
	 <form class="" action="index.php" method="post">
	 	<!--CAMPO Usuario-->
		<label for="usuario">Usuario</label>
		<input type="text" name="usuario"  placeholder="Usuario" class="usuario">
		<!--CAMPO Password-->
		<label for="password">Contraseña</label>
		<input type="password" name="pass"  placeholder="Contraseña" class="password">
		<!--Boton Enviar-->
		<a href="index.php">
		<input type="submit" name="Enviar" value="Ingresar" class="ingresar"></a>
		<!--Enlaces-->
		<a href="registrarse" class="recuerda">No Tienes Cuenta?</a>
		<a href="contrasena" class="recuerda2">No recuerdas tu Contraseña?</a>
	 </form>

 </div>



</body>
</html>
