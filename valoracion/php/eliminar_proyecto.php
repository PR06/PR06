<?php
include 'conexion.php';
$proyecto_id= $_REQUEST['proyecto_id'];

$query="DELETE FROM tbl_proyecto WHERE proyecto_id = '$proyecto_id'";
$resultado = $conexion->query($query);

if ($resultado) {
	//echo 'Se elimino';
	header("Location: principal_admin.php");
}else {
	echo ' No se elimino';
		
	}