<?php 
 
include 'conexion/conexion.php';

session_start();
if(!isset($_SESSION['usuario']))
{
  header('Location:login.php'); 
}

$nombre='';
$apellidop ='';
$apellidom ='';
$grupo='';
$especialidad='';

if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	//$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);

	$nombre = trim(strtolower($_POST['nombre']));
	$apellidop = trim(strtolower($_POST['apellidop']));
 	$apellidom = trim(strtolower($_POST['apellidom']));
 	$grupo=trim(strtolower($_POST['grupo']));
 	$especialidad=trim(strtolower($_POST['especialidad']));

  	$errores='';
  	
  	if (empty($nombre) or empty($apellidop) or empty($apellidom)or empty($grupo) or empty($especialidad)) 
  	{
  		$errores.='<li> Favor de rellenar todos los campos</li>';
  	}
  	else
  	{
  		$duplicado = $conexion->prepare('Select apellidop from alumnos WHERE grupo = :GRUPO and nombre=:NOMBRE and apellidop=:AP and apellidom=:AM LIMIT 1');
  		$duplicado->execute(array(
  			':GRUPO'=>$grupo,
  			':NOMBRE'=>$nombre,
  			':AP'=>$apellidop,
  			':AM'=>$apellidom));
      	$resultado = $duplicado->fetch(); 
		//var_dump($resultado);
      
      if($resultado != false)
      {
        $errores .='<li>El alumno ya existe</li>';
      }

      if ($errores=='') 
      {
       
       try {
          $insertar= $conexion->prepare('INSERT INTO alumnos (nombre,apellidop,apellidom,grupo,especialidad) VALUES (:NOMBRE,:AP,:AM,:GRUPO,:ESP)');
        $insertar->execute(array(
          ':NOMBRE'=>$nombre,
          ':AP'=>$apellidop,
          ':AM'=>$apellidom,
       	  ':GRUPO'=>$grupo,
       	  ':ESP'=>$especialidad));
        header('Location: contenido.php');
		
        //
        } 
        catch (PDOException $e) {
          echo "Error".$e->getMessage();
        } 
      }

  	}
}
require 'view/registra_alumnos.view.php';

 ?>