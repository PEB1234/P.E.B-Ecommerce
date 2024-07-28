<!DOCTYPE>
<html lang="es">
<head>
	<title>Registre su PQR</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/formulario10.css">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>

<div align="center">
	<h1> </h1>
</div>
	
	<h1 class="titulo">Registre su PQR</h1>

<main>
		<form action="agr_pqrm.php" class="formulario" id="formulario" method="POST">
			<!-- Grupo: identificacion -->
			<div class="formulario__grupo" id="grupo__nomProducto">
				<label for="identificacion" class="formulario__label">identificacion</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="identificacion" id="identificacion">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
			</div>

			<!-- Grupo: email -->
			<div class="formulario__grupo" id="grupo__idProducto">
				<label for="email" class="formulario__label">Email</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="email" id="email" placeholder="usuario@gmail.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
			</div>

			<!-- Grupo: codigo vendedor -->
			<div class="formulario__grupo" id="grupo__preCompra">
				<label for="cod_vendedor" class="formulario__label">Codigo vendedor</label>
				<div class="formulario__grupo-input">
					<input type="cod_vendedor" class="formulario__input" name="cod_vendedor" id="cod_vendedor" placeholder="2567">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
			</div>

			<!-- Grupo: fecha y estado -->
		<div class="formulario__grupo">
				<label class="formulario__label">Fecha</label>
	       		<input type="date" name="fechaEntrega" class="formulario__input">
			</div>
       	
		<div class="content-select">
       		<label for="tipo_pqr" class="formulario__label">Tipo de petición</label>
       		<select name="tipo_pqr">
       			<option value="queja">Queja</option>
       			<option value="reclamo">Reclamo</option>
       			<option value="peticion">Peticion</option>
       		</select>
       	</div>

       	<!-- Grupo: desccripción -->
			<textarea name="describcion" class="textarea" placeholder="Realiza breve descrición..."></textarea>

		<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div>
				<button type="submit" class="formulario__btn" onclick="alert('El producto ha sido guardado exitosamente');">Registrar</button>
			</div>
		</form>
	</main>
<?
include ('agr_pqrm.php');
?>
</body>
</html>