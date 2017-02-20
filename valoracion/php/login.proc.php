<?php
session_start();
$usuario=$_POST['usuario'];
$password=$_POST['password'];

include("conexion.php");

$proceso= $conexion->query("SELECT * FROM tbl_profesor WHERE profesor_correo='$usuario' AND profesor_password ='$password'");

if($resultado = mysqli_fetch_array($proceso)){
	$_SESSION['u_usuario'] = $usuario;
	header("Location: formulario_tribu.php");
	
}else{
	header("Location: login.php");
	
}

?>