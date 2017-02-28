<?php
include("conexion.php");
$profesor_id= $_REQUEST['profesor_id'];
$profesor_nombre= $_POST['profesor_nombre'];
$profesor_apellido= $_POST['profesor_apellido'];
$profesor_correo= $_POST['profesor_correo'];



$query="INSERT INTO tbl_profesor(profesor_nombre, profesor_apellido, profesor_correo) VALUES('$profesor_nombre','$profesor_apellido','$profesor_correo') ";


$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: principal_admin.php");
}
else{
	echo "No se ha insertado :(";
}
?>