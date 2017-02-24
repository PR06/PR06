<?php 
	
	extract($_REQUEST);

	include 'conexion.php';

	$sql_proyectos = "SELECT * FROM tbl_proyecto LEFT JOIN tbl_profesor ON tbl_profesor.profesor_id = tbl_proyecto.proyecto_tutor ORDER BY proyecto_fecha DESC";
	$proyectos = mysqli_query($conexion, $sql_proyectos);

?>
<form>
	Ordenar proyecte per:
	<select name="filtro">
		<option>Data</option>
		<option>A-Z</option>
	</select>
</form>
<?php 

	if (mysqli_num_rows($proyectos)>0){
		while ($proyecto = mysqli_fetch_array($proyectos)) {
			$sql_alumnos = "SELECT * FROM tbl_proyecto INNER JOIN tbl_alumno ON tbl_alumno.alumno_proyectoid = tbl_proyecto.proyecto_id WHERE alumno_proyectoid = '$proyecto[proyecto_id]'";
			$alumnos = mysqli_query($conexion, $sql_alumnos);

			$sql_profesores = "SELECT * FROM tbl_proyecto INNER JOIN tbl_proyectoprofesor ON tbl_proyectoprofesor.pp_proyectoid = tbl_proyecto.proyecto_id INNER JOIN tbl_tribunal ON tbl_tribunal.tribunal_ppid = tbl_proyectoprofesor.pp_id INNER JOIN tbl_profesor ON tbl_profesor.profesor_id = tbl_tribunal.tribunal_profesorid WHERE pp_proyectoid = '$proyecto[proyecto_id]'";
			$profesores = mysqli_query($conexion, $sql_profesores);

			echo "<div class='profesor_proyecto'>";
				echo "<div class='proyecto_nombre'>";
					echo "<h3><b>Projecte:</b> $proyecto[proyecto_nombre]</h3>";
				echo "</div>";
				echo "<div class='project'>";
					echo "<div class='profesor_imagen'>";
						echo "<img src='$proyecto[proyecto_imagen]'/>";
					echo "</div>";
					echo "<div class='proyecto_info'>";
						echo "<b>Membres:</b> ";
						while ($alumno = mysqli_fetch_array($alumnos)) {
							echo "$alumno[alumno_nombre] $alumno[alumno_apellido], ";
						}
							echo "<br/>";
						echo "<b>Tutor:</b> $proyecto[profesor_nombre] $proyecto[profesor_apellido]";
							echo "<br/>";
						echo "<b>Tribunal:</b> ";
						while ($profesor = mysqli_fetch_array($profesores)) {
							echo "$profesor[profesor_nombre] $profesor[profesor_apellido], ";
							$pp_id = $profesor['pp_id'];
						}
							echo "<br/>";
						echo "<b>Dia i hora:</b> $proyecto[proyecto_fecha]";

						echo "<div class='valorar'>";
							if ($pp_id == $id){
								echo "<a style='color:green;' href='#'>Valorar</a>";
							} else {
								echo "<a style='color:red' href='#'>Valorar</a>";
							}
							echo "</div>";

					echo "</div>";

				echo "</div>";

			echo "</div>";

		}


	} else {
		echo "No hi ha cap projecte";
	}

	
		





?>