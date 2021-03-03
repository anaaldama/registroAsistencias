<?php 
 include 'conexion/conexion.php';

session_start();
if(!isset($_SESSION['usuario']))
{
  header('Location:login.php'); 
}

$materia='';
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	//$materia = filter_var(strtolower($_POST['materia']), FILTER_SANITIZE_STRING);

	$materia = trim(strtolower($_POST['materia']));
	 try {
          $insertar= $conexion->prepare('INSERT INTO materia (nombre) VALUES (:MATERIA)');
        $insertar->execute(array(
          ':MATERIA'=>$materia));
        header('Location: registra_materia.php');
		
        //
        } 
        catch (PDOException $e) {
          echo "Error".$e->getMessage();
        } 
}
require 'view/registra_materia.view.php';

 ?>