<?php
include 'conexion.php';
$alumno_id= $_REQUEST['alumno_id'];

$query="DELETE FROM tbl_alumno WHERE alumno_id = '$alumno_id'";
$resultado = $conexion->query($query);

if ($resultado) {
	//echo 'Se elimino';
	header("Location: principal_admin.php");
}else {
	echo ' No se elimino';
		
	}