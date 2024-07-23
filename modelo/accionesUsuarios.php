<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
require_once 'datos-usuarios.php';
// Instancias
$conexion = new Conexion();
$misUsuarios = new misUsuarios();

// Inicializar $accion si está definido en $_GET
$accion = isset($_GET['accion']) ? $_GET['accion'] : '';

if ($accion == 'registrar') {
    // Campos requeridos
    $camposRequeridos = ['identificacion', 'email', 'telefono'];
    
    // Validar campos requeridos
    foreach ($camposRequeridos as $campo) {
        if (!isset($_POST[$campo]) || trim($_POST[$campo]) === '') {
            echo 5; // Campos requeridos no están definidos
            exit();
        }
    }

    // Obtener datos del formulario
    $identificacion = $_POST['identificacion'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $rol_id = 1; // Asignar el valor adecuado para rol_id
    
    // Validamos si el usuario ya está registrado
    $usuarioExiste = $misUsuarios->viewUsuario($identificacion);
    
    if (count($usuarioExiste) < 1) {
        // Registrar el usuario nuevo
        $array = [];
        $array['identificacion'] = $identificacion;
        $array['usuario'] = $usuario;
        $array['contrasena'] = $contrasena;
        $array['email'] = $email;
        $array['telefono'] = $telefono;
        $array['rol_id'] = $rol_id;
        $response = $misUsuarios->insertUsuarios($array);
        if ($response) {
            echo 1; // Registro exitoso
        } else {
            echo 0; // Error al registrar el usuario
        }
    } else {
        echo 4; // El usuario ya está registrado
    }
} elseif ($accion == 'modificar') {
    require_once 'conexion.php';
    $conexion = new Conexion();
    $array['identificacionu'] =  $_POST['identificacionu'];
    $array['usuariou'] = $_POST['usuariou'];
    $array['contrasenau'] = $_POST['contrasenau'];
    $array['emailu'] =$_POST['emailu'];
    $array['telefonou'] = $_POST['telefonou'];
    
    
    
    $misUsuarios = new misUsuarios();
    $response = $misUsuarios->updateUsuarios($array);
    if ($response) {
        echo 1; // Éxito
    } else {
        echo 0; // Error en la ejecución de la consulta
    }
} elseif ($accion == 'eliminar') {
    $identificacion = $_POST['identificacion'];
    
    $sql = "DELETE FROM usuario WHERE identificacion = :identificacion";
    $del = $conexion->prepare($sql);
    $del->bindParam(":identificacion", $identificacion);
    
    if ($del->execute()) {
        echo 1; // Eliminación exitosa
    } else {
        echo 0; // Error al eliminar el usuario
    }
} else {
    echo "Error: Acción no válida"; // Manejar caso de acción no válida de manera genérica
}
