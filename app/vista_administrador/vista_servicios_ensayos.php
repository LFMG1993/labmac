<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../modelo/datos-servicios-ensayos.php.';

// Instancias
$controller = new ServiciosEnsayos();
// Coonsulta todos los proyectos
$ServiciosEnsayos = $controller->viewServiciosEnsayos();

?>

<!-- Inicio del Contenido de la Página -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="page-title">
            <br>
            <h1>Servicios de Ensayos
                <small>CIES - SENA</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <td class="text-center">id_servicios_ensayos</td>
                <td>cotizacion</td>
                <td>prefactura</td>
                <td>cliente_id</td>
                <td>fecha_solicitud</td>
                <td>fecha_pago</td>
                <td>Fecha_entrega</td>
                <td>Observaciones</td>
                
                <td></td>
            </thead>
            <tbody>
                <?php
                foreach ($ServiciosEnsayos as $data) {
                    if (empty($data['id_servicios_ensayos']) || 
                    empty($data['cotizacion']) || 
                    empty($data['prefactura']) || 
                    empty($data['cliente_id']) || 
                    empty($data['fecha_solicitud']) ||
                    empty($data['fecha_pago']) || 
                    empty($data['Fecha_entrega']) || 
                    empty($data['Observaciones'])
                    ) {

                    // Manejo del error: puedes omitir la iteración, mostrar un mensaje, etc.
                    continue; // Saltar a la siguiente iteración del bucle
                    }
                    // Datos para cargar en el formulario de modificar
                    $datos = $data['id_servicios_ensayos'] . "||" .
                            $data['cotizacion'] . "||" .
                            $data['prefactura'] . "||" .
                            $data['cliente_id'] . "||" .
                            $data['fecha_solicitud'] . "||" .
                            $data['fecha_pago'] . "||" .
                            $data['Fecha_entrega'] . "||" .
                            $data['Observaciones'];
                
                ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $data['id_servicios_ensayos']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['cotizacion']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['prefactura']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['cliente_id']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['fecha_solicitud']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['fecha_pago']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['Fecha_entrega']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['Observaciones']; ?>
                        </td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEditarServiosEnsayo" onclick="agregarformServicosDetalles('<?php echo $datos; ?>')">
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

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoServicioEnsayo" onclick="agregarFormNuevo()">Crear Nuevo Servicio de Ensayo
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