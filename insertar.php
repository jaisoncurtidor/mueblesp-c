<?php

// Aquí se declara la información sobre la base de datos

$host = "localhost";
$user = "root";
$contraseña = "";
$database = "mueblesp&c";


// Aquí se declara la conexión

$conexion = new mysqli($host, $user, $contraseña, $database);

// Aquí se verifica si esta tiene algún error

if($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}


// Aquí se crea el código que envía la información a la base de datos

if(isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $contacto = $_POST['contacto'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    
    $sql = "INSERT INTO formulario(nombre, apellidos, contacto, correo, mensaje)
                        VALUES ('$nombre', '$apellidos', '$contacto', '$correo', '$mensaje' )";

    if($conexion->query($sql) == true) {
        echo "Enviado";
    } else {
        die("todo valio verga" . $conexion->error);
    }
}
?>