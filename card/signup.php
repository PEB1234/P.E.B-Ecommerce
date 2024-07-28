
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

    <h1>Crea tu cuenta</h1>

    <form action="signup.php" method="POST">
      <input name="identificacion" type="text" placeholder="Ingrese identificación">
      <input name="nombres" type="text" placeholder="ingrese su nombre">
      <input name="apellidos" type="text" placeholder="ingrese su apellido">
      <input name="telefono" type="text" placeholder="ingrese su telefono">
      <input name="email_user" type="text" placeholder="ingrese su email">
      <input name="direccion" type="text" placeholder="ingrese su direccion">
      <input name="password" type="password" placeholder="ingrese su Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      
      <input type="submit" value="Registrar">
    </form>

  </body>
  <?php
require 'config/Conexion.php'; 
// Inicializar variables
$identificacion = $nombres = $apellidos = $telefono = $email_user = $password = $direccionfiscal = '';

// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identificacion = $_POST['identificacion'] ?? '';
    $nombres = $_POST['nombres'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $email_user = $_POST['email_user'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $direccionfiscal = $_POST['direccion'] ?? '';

    // Validación básica
    if (empty($identificacion) || empty($nombres) || empty($apellidos) || empty($telefono) || empty($email_user) || empty($password) || empty($direccionfiscal)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Preparar la consulta SQL
        $sql = "INSERT INTO persona (identificacion, nombres, apellidos, telefono, email_user, password, direccionfiscal) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);

        if ($stmt === false) {
            die('Error al preparar la consulta: ' . $conexion->error);
        }

        // Enlazar los parámetros
        $stmt->bind_param('sssssss', $identificacion, $nombres, $apellidos, $telefono, $email_user, $password, $direccionfiscal);

        // Ejecutar la consulta
        if ($stmt->execute()) {
          header('Location: ../index.php');
        } else {
            echo "Error al registrar. Inténtelo de nuevo: " . $stmt->error;
        }

        // Cerrar la consulta
        $stmt->close();
    }
    
    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

</html>