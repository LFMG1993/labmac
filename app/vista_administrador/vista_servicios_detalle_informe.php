<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../modelo/datos-servicios-detalle-informe.php';

// Instancias
$controller = new ServiciosDetallesInforme();
// Coonsulta todos los proyectos
$ServiciosDetallesInforme = $controller->viewServiciosDetalles();

?>

<!-- Inicio del Contenido de la Página -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="page-title">
            <br>
            <h1>Servicios Detalles Informes
                <small>CIES - SENA</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <td class="text-center">id_detalles_informe</td>
                <td>Detalle_id</td>
                <td>Codigo</td>
                <td>Resultado</td>
                <td>Magnitud</td>
                <td></td>
            </thead>
            <tbody>
                <?php
                foreach ($ServiciosDetallesInforme as $data) {
                    if (empty($data['id_detalles_informe']) || 
                    empty($data['detalle_id']) || 
                    empty($data['codigo']) || 
                    empty($data['resultado']) || 
                    empty($data['magnitud'])) {

                    // Manejo del error: puedes omitir la iteración, mostrar un mensaje, etc.
                    continue; // Saltar a la siguiente iteración del bucle
                    }
                    // Datos para cargar en el formulario de modificar
                    $datos = $data['id_detalles_informe'] . "||" .
                            $data['detalle_id'] . "||" .
                            $data['codigo'] . "||" .
                            $data['resultado'] . "||" .
                            $data['magnitud'];
                ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $data['id_detalles_informe']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['detalle_id']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['codigo']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['resultado']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['magnitud']; ?>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditarServiosDetalleInforme" onclick="agregarformServicosDetalles('<?php echo $datos; ?>')">
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

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoServiciosDetalleInforme" onclick="agregarFormNuevo()">Crear Nuevo Servicio Detalle Informe
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