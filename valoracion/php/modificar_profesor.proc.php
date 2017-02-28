<?php
include 'conexion.php';
$profesor_id= $_REQUEST['profesor_id'];
$profesor_nombre= $_POST['profesor_nombre'];
$profesor_apellido= $_POST['profesor_apellido'];
$profesor_correo= $_POST['profesor_correo'];


$query="UPDATE tbl_profesor SET profesor_nombre='$profesor_nombre', profesor_apellido='$profesor_apellido', profesor_correo='$profesor_correo'WHERE profesor_id='$profesor_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: principal_admin.php");
}else {
	echo ' No se modifico :(';
		
	
}