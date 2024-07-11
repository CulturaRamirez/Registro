<?php
	
	require 'Rconexion.php';
	
	$Nombre = $mysqli->real_escape_string($_POST['Nombre']);
	$numero = $mysqli->real_escape_string($_POST['Numero']);
	$credencial = $mysqli->real_escape_string($_POST['credencial']);
	$clase = $mysqli->real_escape_string($_POST['clase']);
	
	$sql = "INSERT INTO reg (Nombre, Numero, clase, credencial, activo) VALUES ('$Nombre', '$numero', '$credencial', '$clase', 1)";
	//echo $sql;
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO AGREGADO';
		
		} else {
		echo 'ERROR AL AGREGAR REGISTRO';
	}
	
	echo "<br/><a href='Rtabla.php' class='btn btn-primary'>Regresar</a>";
	
?>