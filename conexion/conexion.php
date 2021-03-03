<?php 
try 
{
	$conexion = new PDO('mysql: host=localhost; dbname=asistencia2','root','');
	#$conexion = new PDO('mysql:host=localhost;dbname=imc', 'root', '');
	#echo "ok";
} 
catch (PDOException $e) 
{
	echo "Error".$e->getMessage();	
}

 ?>