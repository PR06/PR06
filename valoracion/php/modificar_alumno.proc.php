<?php
include 'conexion.php';
$alumno_id= $_REQUEST['alumno_id'];
$alumno_nombre= $_POST['alumno_nombre'];
$alumno_apellido= $_POST['alumno_apellido'];
$alumno_curso= $_POST['alumno_curso'];


$query="UPDATE tbl_alumno SET alumno_nombre='$alumno_nombre', alumno_apellido='$alumno_apellido', alumno_curso='$alumno_curso' WHERE alumno_id='$alumno_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: principal_admin.php");
}else {
	echo ' No se modifico :(';
		
	
}