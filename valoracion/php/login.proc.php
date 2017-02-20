<?php
	session_start();

	include('conexion.php');

	$sql = "SELECT * FROM usuario WHERE usu_nombre='$usuario' AND usu_password='$password'";
	
	$resultado_usuario = mysqli_query($conexion, $sql);

	if(mysqli_num_rows($resultado_usuario)>0){
		$datos_usuario = mysqli_fetch_array($resultado_usuario);
		if($datos_usuario['usu_estado']==1){
			session_reset();
			$_SESSION['id_usuario']=$usuario;
			$_SESSION['tipo_usuario']=$datos_usuario['usu_tipo'];
			header("location: principal.php");
		} else {
			$_SESSION['error']="Usuario deshabilitado";
			header("location: index.php");
		}
	} else {
		$_SESSION['error']="Usuario/password incorrectos";
		header("location: index.php");
	}


?>