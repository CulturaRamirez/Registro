<?php
	
	require 'Rconexion.php';
	
	$id = $mysqli->real_escape_string($_GET['id']);
	
	
	//$sql = "DELETE FROM empleados5d WHERE id=$id";
	$sql = "UPDATE reg SET activo=0 WHERE id=$id";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO ELIMINADO';
		} else {
		echo 'ERROR AL ELIMINAR REGISTRO';
	}
	
	echo "<br/><a href='Rtabla.php' class='btn btn-primary'>Regresar</a>";
	
?>