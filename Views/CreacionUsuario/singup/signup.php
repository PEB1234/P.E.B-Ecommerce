
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crea tu cuenta</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css2/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Crea tu cuenta  </h1>
    <span>o <a href="login.php">inicia sesion</a></span>

    <form action="signup.php" method="POST">
      <input name="identificacion" type="text" placeholder="Ingrese identificación">
      <input name="nombres" type="text" placeholder="ingrese su nombre">
      <input name="apellidos" type="text" placeholder="ingrese su apellido">
      <input name="telefono" type="text" placeholder="ingrese su telefono">
      <input name="email_user" type="text" placeholder="ingrese su email">
      <input name="direccion" type="text" placeholder="ingrese su direccion">
      <input name="password" type="password" placeholder="ingrese su Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      
      <input type="submit" value="Submit">
    </form>

  </body>
<?php
if (isset($_POST["submit"])) {
if (!empty($_POST["identificacion"]) && strlen($_POST["identificacion"])<=20 && !is_numeric($_POST["identificacion"]) ) {
    echo $_POST["identificacion"] ."<br/>"; 
  }
  if (!empty($_POST["nombres"]) && strlen($_POST["nombres"])<=20 && !is_numeric($_POST["nombres"]) ) {
    echo $_POST["nombres"] ."<br/>"; 
  }
if (!empty($_POST["apellidos"]) && strlen($_POST["apellidos"])<=20 && !is_numeric($_POST["apellidos"]) ) {
    echo $_POST["apellidos"] ."<br/>"; 
  }
  if (!empty($_POST["telefono"]) && strlen($_POST["telefono"])<=20 && is_numeric($_POST["telefono"]) ) {
    echo $_POST["telefono"] ."<br/>"; 
  }
if (!empty($_POST["email_user"]) && strlen($_POST["email_user"]) ) {
    echo $_POST["email_user"] ."<br/>"; 
  }
  if (!empty($_POST["password"]) && strlen($_POST["password"]) ) {
    echo $_POST["password"] ."<br/>"; 
  }
  if (!empty($_POST["direccion"]) && strlen($_POST["direccion"]) ) {
    echo $_POST["direccion"] ."<br/>"; 
  }
}


$conexion = mysqli_connect("localhost","root","","db_tiendavirtual")
  or
    die("Problemas con la conexion");

mysqli_query($conexion, "insert into persona
  (identificacion,
  nombres,
  apellidos,
  telefono,
  email_user,
  password,
  direccionfiscal
  ) 
  values($_REQUEST[identificacion],
  '$_REQUEST[nombres]',
  '$_REQUEST[apellidos]',
  $_REQUEST[telefono],
  '$_REQUEST[email_user]',
  '$_REQUEST[password]',
  '$_REQUEST[direccion]')")
  or
    die("Problemas con el comando mysql " .mysqli_error($conexion));
    mysqli_close($conexion);
    echo "El registro fue guardado correctamente en la base de datos";
?>

</html>
