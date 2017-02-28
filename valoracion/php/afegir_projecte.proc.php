<?php
include("conexion.php");
$proyecto_nombre= $_REQUEST['proyecto_nombre'];
$proyecto_fecha= $_POST['proyecto_fecha'];
$proyecto_nota= $_POST['proyecto_nota'];
$proyecto_tutor= $_POST['proyecto_tutor'];
$proyecto_comentarioTribunal = $_POST['proyecto_comentarioTribunal'];
$proyecto_estado= $_POST['proyecto_estado'];
$proyecto_codigo = $_POST['proyecto_codigo'];

$query="INSERT INTO tbl_proyecto(proyecto_nombre, proyecto_fecha, proyecto_nota, proyecto_tutor, proyecto_comentarioTribunal, proyecto_estado, proyecto_codigo) VALUES('$proyecto_nombre','$proyecto_fecha','$proyecto_nota','$proyecto_tutor','proyecto_comentarioTribunal','proyecto_estado','proyecto_codigo') ";


$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: principal_admin.php");
}
else{
	echo "No se ha insertado :(";
}
?>