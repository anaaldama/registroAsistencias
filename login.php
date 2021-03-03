<?php 
include 'conexion/conexion.php';

session_start();
if(isset($_SESSION['usuario']))
{
	header('Location:index.php'); 
}
 
	
 

if($_SERVER['REQUEST_METHOD']=='POST')
{
	//echo print_r($_POST,true);
	$usuario =filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
	$password =$_POST['password'];

	$password = hash('sha512',$password);
	$consulta= $conexion->prepare('Select * from usuarios WHERE usuario = :USER and password= :PASS');
	 $consulta-> execute(array(
	 	':USER'=>$usuario,':PASS'=>$password));


	 $resultado = $consulta->fetch();
	 //echo print_r($consulta,true);
	 //var_dump($resultado);



	 if($resultado != false)
	 {
	 	$_SESSION['usuario']=$usuario;
	 	header('Location:index.php');
	 }else
	 {
	 	header('Location:registrate.php');
	 }
}



require 'view/login.view.php';
 ?>