<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
require_once 'datos-productos.php';
// Instancias
$conexion = new Conexion();
$misProductos = new MisProductos();

// Inicializar $accion si está definido en $_GET
$accion = isset($_GET['accion']) ? $_GET['accion'] : '';

if ($accion == 'registrar') {
    // Campos requeridos
    $camposRequeridos = ['codigo', 'precio_minimo', 'precio_maximo'];

    // Validar campos requeridos
    foreach ($camposRequeridos as $campo) {
        if (!isset($_POST[$campo]) || trim($_POST[$campo]) === '') {
            echo 5; // Campos requeridos no están definidos
            exit();
        }
    }

    // Obtener datos del formulario
    $codigo = $_POST['codigo'];
    $Nombre = $_POST['Nombre'];
    $precio_minimo = $_POST['precio_minimo'];
    $precio_maximo = $_POST['precio_maximo'];
    $medida = $_POST['medida'];
    $clase = $_POST['clase'];
    $codigo_familiar = $_POST['codigo_familiar'];
    $nombre_familia = $_POST['nombre_familia'];

    // Validamos si el usuario ya está registrado
    $codigoExiste = $misProductos->viewProductos($codigo);

    if (!empty($codigoExiste)) {
        // Registrar el usuario nuevo
        $array = [];
        $array['codigo'] = $codigo;
        $array['Nombre'] = $Nombre;
        $array['precio_minimo'] = $precio_minimo;
        $array['precio_maximo'] = $precio_maximo;
        $array['medida'] = $medida;
        $array['clase'] = $clase;
        $array['codigo_familiar'] = $codigo_familiar;
        $array['nombre_familia'] = $nombre_familia;
        $response = $misProductos->insertProducto($array);
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
    $array['codigou'] =  $_POST['codigou'];
    $array['nombreu'] = $_POST['nombreu'];
    $array['precio_minimou'] = $_POST['precio_minimou'];
    $array['precio_maximou'] = $_POST['precio_maximou'];
    $array['medidau'] = $_POST['medidau'];
    $array['claseu'] = $_POST['claseu'];
    $array['codigo_familiaru'] =  $_POST['codigo_familiaru'];
    $array['nombre_familiau'] =  $_POST['nombre_familiau'];

    $misProductos = new MisProductos();
    $response = $misProductos->updateProducto($array);
    if ($response) {
        echo 1; // Éxito
    } else {
        echo 0; // Error en la ejecución de la consulta
    }
} elseif ($accion == 'eliminar') {
    $codigo = $_POST['codigo'];

    $sql = "DELETE FROM producto WHERE codigo = :codigo";
    $del = $conexion->prepare($sql);
    $del->bindParam(":codigo", $codigo);

    if ($del->execute()) {
        echo 1; // Eliminación exitosa
    } else {
        echo 0; // Error al eliminar el usuario
    }
} else {
    echo "Error: Acción no válida"; // Manejar caso de acción no válida de manera genérica
}
