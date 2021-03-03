<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="Fork-Awesome/css/fork-awesome.min.css">
	<title>Registrate</title>
</head>
<body>

<div class="contenedor">
	<h1 class="titulo">Registro de alumnos</h1>
	<hr class="border">

	<!-- Formulario -->
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario" name="login">
		<div class="form-grup">
			<i class="icono izquierda fa fa-user"></i><input type="text" name="nombre" class="usuario" placeholder="Nombre">
		</div>
		<br>
		<div class="form-grup">
			<i class="icono izquierda fa fa-user"></i><input type="text" name="apellidop" class="usuario" placeholder="Apellido Paterno">
		</div>
		<br>
		<div class="form-grup">
			<i class="icono izquierda fa fa-user"></i><input type="text" name="apellidom" class="usuario" placeholder="Apellido Materno">
		</div>
		<br>
		<div class="form-grup">
			<i class="icono izquierda fa fa-user"></i><input type="text" name="grupo" class="usuario" placeholder="Grupo">
		</div>
		<br>
		<div class="form-grup">
			<i class="icono izquierda fa fa-lock"></i><input type="text" name="especialidad" class="usuario" placeholder="Especialidad"><i class="submit_btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>
	
	<?php if (!empty($errores)):?>
		<div class="error">
			<?php echo $errores; ?>
		</div>
	<?php endif; ?>
	


	</form>
	<br>
	<p class="texto-registrate"> 
		Regresar a pagina Principal
		<a href="contenido.php">Regresar</a>
	</p>
</div>


</body>
</html>