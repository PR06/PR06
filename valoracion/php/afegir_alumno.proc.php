<?php
include("conexion.php");
$alumno_id= $_REQUEST['alumno_id'];
$alumno_nombre= $_POST['alumno_nombre'];
$alumno_apellido= $_POST['alumno_apellido'];
$alumno_curso= $_POST['alumno_curso'];
$alumno_proyectoid = $_POST['alumno_proyectoid'];


$query="INSERT INTO tbl_alumno(alumno_nombre, alumno_apellido, alumno_curso, alumno_proyectoid) VALUES('$alumno_nombre','$alumno_apellido','$alumno_curso','$alumno_proyectoid') ";


$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: principal_admin.php");
}
else{
	echo "No se ha insertado :(";
}
?>