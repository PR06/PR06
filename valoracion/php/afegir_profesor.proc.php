<?php
include("conexion.php");
$profesor_id= $_REQUEST['profesor_id'];
$profesor_nombre= $_POST['profesor_nombre'];
$profesor_apellido= $_POST['profesor_apellido'];
$profesor_correo= $_POST['profesor_correo'];
$profesor_password = $_POST['profesor_password'];


$query="INSERT INTO tbl_profesor(profesor_nombre, profesor_apellido, profesor_correo, profesor_password) VALUES('$profesor_nombre','$profesor_apellido','$profesor_correo','$profesor_password') ";


$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: principal_admin.php");
}
else{
	echo "No se ha insertado :(";
}
?>