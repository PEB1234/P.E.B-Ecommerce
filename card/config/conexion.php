<?php
// Configuración de la conexión
$host = "localhost";
$user = "root";
$clave = "";
$bd = "db_tiendavirtual2";

// Establecer la conexión
$conexion = new mysqli($host, $user, $clave, $bd);

// Habilitar informes de errores
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Verificar la conexión
    if ($conexion->connect_errno) {
        throw new Exception("No se pudo conectar a la base de datos: " . $conexion->connect_error);
    }

    // Configurar el conjunto de caracteres
    $conexion->set_charset("utf8");

    // Si todo está bien, se puede continuar con el script
    echo "Conexión exitosa a la base de datos.";

} catch (Exception $e) {
    // Mostrar el mensaje de error
    echo $e->getMessage();
    exit();
}
?>