<?php
if (isset($_POST["submit"])) {
	if (!empty($_POST["identificacion"]) && strlen($_POST["identificacion"])) {
		echo $_POST["identificacion"] ."<br/>"	;
	}
	if (!empty($_POST["email"]) && strlen($_POST["email"])) {
		echo $_POST["email"] ."<br/>"	;
	}
	if (!empty($_POST["cod_vendedor"]) && strlen($_POST["cod_vendedor"])) {
		echo $_POST["cod_vendedor"] ."<br/>"	;
	}
	if (!empty($_POST["fechaEntrega"]) && strlen($_POST["fechaEntrega"])) {
		echo $_POST["fechaEntrega"] ."<br/>"	;
	}
	if (!empty($_POST["tipo_pqr"]) && strlen($_POST["tipo_pqr"])) {
		echo $_POST["tipo_pqr"] ."<br/>"	;
	}
	if (!empty($_POST["describcion"]) && strlen($_POST["describcion"])) {
		echo $_POST["describcion"] ."<br/>"	;
	}

}

$conexion = mysqli_connect("localhost","root","","db_tiendavirtual2")
	or
		die("Problemas con la conexion");

mysqli_query($conexion, "insert into pqr
	(identificacion,
	email,
	cod_vendedor,
	fechaEntrega,
	tipo_pqr,
	describcion)
	
	values($_REQUEST[identificacion],
	'$_REQUEST[email]',
	$_REQUEST[cod_vendedor],
	'$_REQUEST[fechaEntrega]',
	'$_REQUEST[tipo_pqr]',
	'$_REQUEST[describcion]')")
	or
		die("Problemas con el comando mysql " .mysqli_error($conexion));
		mysqli_close($conexion);
		echo "El registro fue guardado correctamente en la base de datos";
