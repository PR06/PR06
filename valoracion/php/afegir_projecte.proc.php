<?php

include("conexion.php");
//echo $_GET['proyecto_fecha'];
$proyecto_nombre= $_REQUEST['proyecto_nombre'];
$proyecto_fecha= date("Y-m-d H:i:s", strtotime ($_POST['proyecto_fecha']));
$proyecto_nota= $_POST['proyecto_nota'];
$proyecto_tutor= $_POST['proyecto_tutor'];
$proyecto_comentarioTribunal = $_POST['proyecto_comentarioTribunal'];
//$proyecto_estado= $_POST['proyecto_estado'];
$proyecto_codigo = $_POST['proyecto_codigo'];
$proyecto_imagen = $_FILES['proyecto_imagen'];

$query="INSERT INTO tbl_proyecto(proyecto_nombre, proyecto_imagen, proyecto_fecha, proyecto_nota, proyecto_tutor, proyecto_comentarioTribunal, proyecto_estado, proyecto_codigo) VALUES('$proyecto_nombre','$proyecto_imagen', '$proyecto_fecha','$proyecto_nota','$proyecto_tutor','$proyecto_comentarioTribunal','empezar','$proyecto_codigo') ";


$resultado= $conexion->query($query);

if($resultado){
	header("Location: principal_admin.php");
}
else{
	echo "No se ha insertado :(";
	}
?>