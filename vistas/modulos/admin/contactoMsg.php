<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="inicio" class="form-label fw-bold">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Contacto mensaje</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Administrar mensajes</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display tabla_contacto_msg" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Mensaje</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $item = null;
                                    $valor = null;

                                    $msgContacto = ControladorContactoMsg::ctrMostrarContactoMsg($item, $valor);

                                    foreach ($msgContacto as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $value["nombre"] ?></td>
                                            <td><?php echo $value["correo"] ?></td>
                                            <td><?php echo $value["mensaje"] ?></td>

                                            <td><?php echo $value["fecha"] ?></td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp btnEliminarContactoMsg" idContactoMsg="<?php echo $value["id_contacto"] ?>"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- BORRAR USUARIO -->

<?php
$borrarContactoMsg = new ControladorContactoMsg();
$borrarContactoMsg->ctrBorrarContactoMsg();
?>