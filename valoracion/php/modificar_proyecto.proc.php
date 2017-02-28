<?php
include 'conexion.php';
$proyecto_id= $_REQUEST['proyecto_id'];
$proyecto_nombre= $_POST['proyecto_nombre'];
$proyecto_imagen= $_POST['proyecto_imagen'];
$proyecto_fecha= $_POST['proyecto_fecha'];
$proyecto_nota = $_POST['proyecto_nota'];
$proyecto_tutor= $_POST['proyecto_tutor'];
$proyecto_comentarioTribunal = $_POST['proyecto_comentarioTribunal'];
$proyecto_estado = $_POST['proyecto_estado'];
$proyecto_codigo= $_POST['proyecto_codigo'];


$query="UPDATE tbl_proyecto SET proyecto_nombre='$proyecto_nombre', proyecto_fecha='$proyecto_fecha', proyecto_nota='$proyecto_nota', proyecto_tutor=$proyecto_tutor, proyecto_comentarioTribunal=$proyecto_comentarioTribunal, proyecto_estado=$proyecto_estado, proyecto_codigo=$proyecto_codigo WHERE proyecto_id='$proyecto_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: principal_admin.php");
}else {
	echo ' No se modifico :(';
		
	
}