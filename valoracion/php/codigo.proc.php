<?php 
		
		include 'conexion.php';
		
		$codigo = $_POST['codigo'];

		$codigo = mysqli_escape_string($conexion, $codigo);

		$sql="SELECT * FROM tbl_proyecto WHERE proyecto_codigo = '$codigo'";

		$resultado = mysqli_query($conexion, $sql);

		if (mysqli_num_rows($resultado)>0){
			if ($proyecto = mysqli_fetch_array($resultado)){
				if ($proyecto['proyecto_estado']=="empezar"){
					header('location:codigo.php?error=1');
				} elseif ($proyecto['proyecto_estado']=="encurso"){ 
					header('location:principal_publico.php?codigo='.$codigo);
				} else {
					header('location:codigo.php?error=2');
				} 
			}
		} else {
			header('location:codigo.php?error=0');
		}


?>