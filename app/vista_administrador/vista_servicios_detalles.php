<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../modelo/datos-servicios-detalles.php.';

// Instancias
$controller = new ServiciosDetalles();
// Coonsulta todos los proyectos
$ServiciosDetalles = $controller->viewServiciosDetalles();

?>

<!-- Inicio del Contenido de la Página -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="page-title">
            <br>
            <h1>Servicios Detalles
                <small>CIES - SENA</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <td class="text-center">id_servicios_detalles</td>
                <td>Servicio_id</td>
                <td>Producto_id</td>
                <td>Cliente_id</td>
                <td>Costo</td>
                <td>Observaciones</td>
                <td></td>
            </thead>
            <tbody>
                <?php
                foreach ($ServiciosDetalles as $data) {
                    if (empty($data['id_servicios_detalles']) || 
                    empty($data['servicio_id']) || 
                    empty($data['producto_id']) || 
                    empty($data['costo']) || 
                    empty($data['observaciones'])) {

                    // Manejo del error: puedes omitir la iteración, mostrar un mensaje, etc.
                    continue; // Saltar a la siguiente iteración del bucle
                    }
                    // Datos para cargar en el formulario de modificar
                    $datos = $data['id_servicios_detalles'] . "||" .
                            $data['servicio_id'] . "||" .
                            $data['producto_id'] . "||" .
                            $data['costo'] . "||" .
                            $data['observaciones'];
                ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $data['id_servicios_detalles']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['servicio_id']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['producto_id']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['costo']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['observaciones']; ?>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditarServiosDetalles" onclick="agregarformServicosDetalles('<?php echo $datos; ?>')">
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

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoServiciosDetalles" onclick="agregarFormNuevo()">Crear Nuevo Servicio Detalle
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