<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../modelo/val-admin.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <?php
    include_once './librerias-css.php';
    ?>
    
</head>

<body id="page-top">
    <?php
    include_once '../app/menu-lateral.php';
    ?>
    <!-- Incio de la cabeza de pagina -->
    <div id="tablaUsuario"></div>
    <!-- Fin cabeza de pagina -->
    <?php
    include_once './librerias-js.php';
    ?>
    <?php
    include_once './modales/modalusuario.php';
    ?>

    <script src="../controlador/funciones-usuarios.js"></script>

    

    <?php
    include_once './footer.php'
    ?>

<script>
    $(document).ready(function() {
        // Cargar la vista de usuario
        $('#tablaUsuario').load('./vista_administrador/vista_usuario.php', function() {
            // Inicializar las funciones de usuario
            initUsuario();
        });
    });
</script>

</body>

</html>