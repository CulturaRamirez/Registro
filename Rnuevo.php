<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		
		
		
		<title>Ram</title>
		<link rel="stylesheet" href="css/nuevo.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1 align="center">REGISTRO</h1>
			</div>
			<center>
			<div class="row">
				<div class="col-md-8">
					<form id="registro" name="registro" method="POST" action="Rguarda.php" autocomplete="off" class="fom">
						<div class="form-group">
							<label for="Nombre">Nombre</label>
							<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introduce el nombre" autofocus required>
						</div>
						<div class="form-group">
						<label for="Numero">Numero de Telefono</label>
							<input type="number" class="form-control" id="Numero" name="Numero" placeholder="Introduce el Numero" required>
						</div>
						<div class="form-group">
						<label for="credencial">Credencial</label>
							<input type="text" class="form-control" id=" credencial" name="credencial" placeholder="Si o No" required>
						</div>
						<div class="form-group">
						<label for="clase">Clase</label>
							<input type="text" class="form-control" id=" clase" name="clase" placeholder="Introduce el Precio" required>
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