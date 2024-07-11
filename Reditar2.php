<?php
	
	require 'Rconexion.php';
	
	$id = $mysqli->real_escape_string($_POST['id']);
	$Nombre = $mysqli->real_escape_string($_POST['Nombre']);
	$numero = $mysqli->real_escape_string($_POST['Numero']);
	$credencial = $mysqli->real_escape_string($_POST['credencial']);
	$clase = $mysqli->real_escape_string($_POST['clase']);
	
	
	$sql = "UPDATE reg SET Nombre='$Nombre', Numero='$numero', credencial='$credencial', clase='$clase' WHERE id=$id ";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO MODIFICADO';
		} else {
		echo 'ERROR AL MODIFICAR REGISTRO';
	}
	
	echo "<br/><a href='Rtabla.php' class='btn btn-primary'>Regresar</a>";
	
?>
