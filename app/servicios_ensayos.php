<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productiva</title>
    <?php
    include_once './librerias-css.php';
    ?>
    
</head>

<body id="page-top">
    <?php
    include_once '../app/menu-lateral.php';
    ?>
    <!-- Incio de la cabeza de pagina -->
    <div id="tablaEnsayos"></div>
    <!-- Fin cabeza de pagina -->
    <?php
    include_once './librerias-js.php';
    ?>
    <?php
    include_once './modales/modalusuario.php';
    ?>

    <script src="../controlador/funciones-servicios-ensayos.js"></script>

    

    <?php
    include_once './footer.php'
    ?>

<script>
    $(document).ready(function() {
        // Cargar la vista de usuario
        $('#tablaEnsayos').load('./vista_administrador/vista_servicios_ensayos.php', function() {
            // Inicializar DataTable después de cargar la vista
            $('#example').DataTable();
            // Inicializar las funciones de usuario
            initUsuario();
        });
    });
</script>

</body>

</html>