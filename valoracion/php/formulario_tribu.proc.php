<?php 
	include 'conexion.php';
	extract($_REQUEST);


	$sql = "UPDATE tbl_proyecto SET proyecto_estado='encurso' WHERE proyecto_id = '$id' ";
	mysqli_query($conexion, $sql);

	header('location:formulario_tribu.php');

?>