<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../modelo/datos-clientes.php';

// Instancias
$controller = new ControllerMisClientes();
// Coonsulta todos los proyectos
$clientes = $controller->viewClientes();

?>

<!-- Inicio del Contenido de la Página -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="page-title">
            <h1>Clientes
                <small>CIES - SENA</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <td class="text-center">id_clientes</td>
                <td>tipo_doc</td>
                <td>identificacion</td>
                <td>nombre_empresa</td>
                <td>nombre_contacto</td>
                <td>direccion</td>
                <td>municipio</td>
                <td>telefono</td>
                <td>correo</td>
                <td></td>
            </thead>
            <tbody>
                <?php
                $cant = 1;
                foreach ($clientes as $data) {
                    // Datos para cargar en el formulario de modificar
                    $datos = $data['id_clientes'] . "||" .
                            $data['tipo_doc'] . "||" .
                            $data['identificacion'] . "||" .
                            $data['nombre_empresa'] . "||" .
                            $data['nombre_contacto'] . "||" .
                            $data['direccion'] . "||" .
                            $data['municipio'] . "||" .
                            $data['telefono'] . "||" .
                            $data['correo'];
                ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $data['id_clientes']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['tipo_doc']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['identificacion']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['nombre_empresa']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['nombre_contacto']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['direccion']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['municipio']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['telefono']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['correo']; ?>
                        </td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEdicionClientes" onclick="agregarformClientes('<?php echo $datos; ?>')">
                                <i>Edit</i>
                            </button>
                        </td>
                    <?php
                }
                    ?>
                    </tr>
            </tbody>
        </table>
    </div>
    <br />

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoCliente" onclick="agregarFormNuevo()">Crear Cliente
    </button>
    <br />

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Inicialización de DataTables -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>