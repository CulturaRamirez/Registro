<?php
	
	require 'Rconexion.php';
	
	$id = $mysqli->real_escape_string($_GET['id']);
	
	$sql = "SELECT  Nombre , Numero, credencial, clase FROM reg WHERE id=$id LIMIT 1";
	$resultado = $mysqli->query($sql);
	
	$fila = $resultado->fetch_assoc();
	
	
	
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/nuevo.css">
		
		<title>Ram</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1 align="center">Ram</h1>
			</div>
			<center>
			<div class="row">
				<div class="col-md-8">
					<form id="registro" name="registro" method="POST" action="Reditar2.php" autocomplete="off">
						<div class="form-group">
							<label for="Nombre">Nombre de la Marca</label>
							<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introduce el nombre" value="<?php echo $fila['Nombre']; ?>" autofocus required>
							<input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
						</div>
						<div class="form-group">
							<label for="Numero">Numero de Telefono</label>
							<input type="number" class="form-control" id="Numero" name="Numero" value="<?php echo $fila['Numero']; ?>" placeholder="Introduce el Numero" required>
						</div>
						<div class="form-group">
							<label for="credencial">Credencial</label>
							<input type="text" class="form-control" id="credencial" name="credencial" value="<?php echo $fila['credencial']; ?>" placeholder="Introduce la clase" required>
						</div>
						<div class="form-group">
							<label for="clase">Clase</label>
							<input type="text" class="form-control" id="clase" name="clase" value="<?php echo $fila['clase']; ?>" placeholder="Introduce la clase" required>
						</div>
						
						<div class="form-group">
							<button class="btn btn-primary" id="Rguarda" name="Rguarda" type="submit">Guarda</button>
						</div>
					</form>
				</div>
			</div>
		</div>
</center>
		
		
		
	</body>
</html>				