<?php
include 'conexion.php';
$profesor_id= $_REQUEST['profesor_id'];

$query="DELETE FROM tbl_profesor WHERE profesor_id = '$profesor_id'";
$resultado = $conexion->query($query);

if ($resultado) {
	//echo 'Se elimino';
	header("Location: principal_admin.php");
}else {
	echo ' No se elimino';
		
	}

