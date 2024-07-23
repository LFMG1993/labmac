<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
require_once 'datos-clientes.php';
// Instancias
$conexion = new Conexion();
// $misUsuarios = new misUsuarios();
$misClientes = new ControllerMisClientes();

// Inicializar $accion si está definido en $_GET
$accion = isset($_GET['accion']) ? $_GET['accion'] : '';

if ($accion == 'registrar') {
    // Campos requeridos
    // $camposRequeridos = ['identificacion', 'email', 'telefono'];
    $camposRequeridos = [
        'id_clientes',
        'tipo_doc',
        'identificacion',
        'nombre_empresa',
        'nombre_contacto',
        'direccion',
        'municipio',
        'telefono',
        'correo'
    ];
    
    // Validar campos requeridos
    foreach ($camposRequeridos as $campo) {
        if (!isset($_POST[$campo]) || trim($_POST[$campo]) === '') {
            echo 5; // Campos requeridos no están definidos
            exit();
        }
    }

    // Obtener datos del formulario
    $id_clientes = $_POST['id_clientes'];
    $tipo_doc = $_POST['tipo_doc'];
    $identificacion = $_POST['identificacion'];
    $nombre_empresa = $_POST['nombre_empresa'];
    $nombre_contacto = $_POST['nombre_contacto'];
    $direccion = $_POST['direccion'];
    $municipio = $_POST['municipio'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    
    // Validamos si el usuario ya está registrado
    $clienteExiste = $misClientes->viewClienteIdentificacion($identificacion);
    $response3 = $controller->countClientes();
    if ($response3) {
        // Registrar el cliente nuevo
        $array = [];
        $array['id_clientes'] = $id_clientes;
        $array['tipo_doc'] = $tipo_doc;
        $array['identificacion'] = $identificacion;
        $array['nombre_empresa'] = $nombre_empresa;
        $array['nombre_contacto'] = $nombre_contacto;
        $array['direccion'] = $direccion;
        $array['municipio'] = $municipio;
        $array['telefono'] = $telefono;
        $array['correo'] = $correo;
        $response = $misClientes->insertClientes($array);
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
    $array['rol_idu'] = $_POST['rol_idu'];
    $array['id_usuariou'] = $_POST['id_usuariou'];
    $misUsuarios = new misUsuarios();
    $response = $misUsuarios->updateUsuarios($array);
    if ($response) {
        echo 1; // Éxito
    } else {
        echo 0; // Error en la ejecución de la consulta
    }
} elseif ($accion == 'eliminar') {
    $codigo = $_POST['codigo'];
    $identificacion = $_POST['identificacion'];
    
    $sql = "DELETE FROM usuario WHERE codigo = :codigo AND identificacion = :identificacion";
    $del = $conexion->prepare($sql);
    $del->bindParam(":codigo", $codigo);
    $del->bindParam(":identificacion", $identificacion);
    
    if ($del->execute()) {
        echo 1; // Eliminación exitosa
    } else {
        echo 0; // Error al eliminar el usuario
    }
} else {
    echo "Error: Acción no válida"; // Manejar caso de acción no válida de manera genérica
}
