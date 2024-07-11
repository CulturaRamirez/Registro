<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ram</title>
    <link rel="stylesheet" href="css/CPU.css">

</head>
<body>
    
<p>
    <?php
	
	require 'Rconexion.php';
	
	$sql = "SELECT id, Nombre, Numero, credencial, clase FROM reg WHERE activo=1";
	$resultado = $mysqli->query($sql);
	
?>


		<div class="container">
			<div class="row">
				<h1 align="center">Datos</h1>
			</div>
			
			<div class="row" id="Registrar">
				<a href="Rnuevo.php" class="btn btn-primary">Registrar</a>
			</div>
			<p>
							<br>
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Numero de Telefono</th>
						<th>Credencial</th>
						<th>Clase</th>
						<th></th>
						<th></th>
						
					</tr>
				</thead>
				<tbody>
					<?php while($fila = $resultado->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $fila['id']; ?></td>
							<td><?php echo $fila['Nombre']; ?></td>
							<td><?php echo $fila['Numero']; ?></td>
							<td><?php echo $fila['credencial']; ?></td>
							<td><?php echo $fila['clase']; ?></td>
							<td id="btm1"><a href="Reditar.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning">Editar</a> </td>
							<td id="btm2"><a href="Reliminar.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">Eliminar</a> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>
	
	
<script src="js/Ram.js"></script>
</body>
</html>