<?php

	include 'conexion.php';
	extract($_REQUEST);

	$sql_alumnos = "SELECT * FROM tbl_alumno LEFT JOIN tbl_publiconota ON tbl_publiconota.pn_alumnoid = tbl_alumno.alumno_id LEFT JOIN tbl_tribunalnota ON tbl_tribunalnota.tn_alumnoid = tbl_alumno.alumno_id LEFT JOIN tbl_proyecto ON tbl_proyecto.proyecto_id = tbl_alumno.alumno_proyectoid ORDER BY alumno_apellido ASC";

	$alumnos = mysqli_query($conexion, $sql_alumnos);
	if (mysqli_num_rows($alumnos)>0){
	echo "<table class='tablaAlumno'>";
		echo "<tr>";
			echo "<th>Nom</th>";
			echo "<th>Cognoms</th>";
			echo "<th>Curs</th>";
			echo "<th>Nota projecte</th>";
			echo "<th>Nota tribunal</th>";
			echo "<th>Nota públic</th>";
		echo "</tr>";
	while ($alumno = mysqli_fetch_array($alumnos)) {
		echo "<tr>";
			echo "<td>$alumno[alumno_nombre]</td>";
			echo "<td>$alumno[alumno_apellido]</td>";
			echo "<td>$alumno[alumno_curso]</td>";
			echo "<td>$alumno[proyecto_nota]</td>";
			echo "<td>$alumno[tn_notatribunal]</td>";
			echo "<td>$alumno[pn_nota]</td>";
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "Encara no has insertat cap alumne";
}
?>