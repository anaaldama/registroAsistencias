<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="Fork-Awesome/css/fork-awesome.min.css">
	<title>Contenido</title>
</head>
<body>

<div class="contenedor">
	<h1 class="titulo">Página principal</h1>
	<a href="cerrar.php" style="color:#FFFFFF" >Cerrar Sesión</a>
	<hr class="border">
	<div class="contenido">
		<article>
			<p> </p>
			<p>	</p>
			<font color="#286A5C" >
				<table cellspacing="2" cellpadding="2" border="0" width="100%">
					<tr>
						<td align="center" width="25%">
							<a>Asistencias</a>
						</td>
						<td align="center" width="25%">
							<a>Consulta</a>
						</td>
						<td align="center" width="25%">
							<a href="registra_alumnos.php">Alumnos</a>
						</td>
						<td align="center" width="25%">
							<a href="registra_materia.php">Materia</a>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<br><br>
							<p align="right">
								<?php
									echo $hoy = date("F j, Y, g:i a");
								?>
							</p>
						</td>
					</tr>
				</table>
			</font>
			
		</article>
	</div>
	
	
</div>


</body>
</html>