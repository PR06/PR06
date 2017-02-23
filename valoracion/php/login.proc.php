<?php
session_start();
$usuario=$_POST['usuario'];
$password=$_POST['password'];

include("conexion.php");

$proceso= $conexion->query("SELECT * FROM tbl_proyectoprofesor WHERE pp_usuario='$usuario' AND pp_password ='$password'");

if($resultado = mysqli_fetch_array($proceso)){
	$_SESSION['profesor'] = $resultado['pp_id'];
	header("Location: principal_profesor.php");
	
}else{
	$sql = "SELECT * from tbl_admin WHERE admin_user='$usuario' && admin_password='$password'";
	$administradores = mysqli_query($conexion, $sql);

	if (mysqli_num_rows($administradores)>0){
		while ($admin = mysqli_fetch_array($administradores)) {
			$_SESSION['admin'] = $admin['admin_id'];
			header('Location:principal_admin.php');
		}
	}else{
		header('location:login.php');
	}
} 

?>