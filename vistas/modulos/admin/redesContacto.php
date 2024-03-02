<?php
$item = null;
$valor = null;

$RedesContacto = ControladorRedesContacto::ctrMostrarRedesContacto($item, $valor);

$countDataContacto = count($RedesContacto);
?>

<style>
    .fa-facebook {
        color: #1877F2;
        font-size: 20px;
    }
 
    .fa-whatsapp{
        color: #46E763;
        font-size: 20px;
    }
 
</style>
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="inicio" class="form-label fw-bold">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Redes de contacto</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Administrar redes de contacto</h4>
                    </div>
                    <div>
                        <?php
                        if($countDataContacto <= 0){
                        ?>
                        <button class="btn btn-primary mt-3 mx-4" data-bs-toggle="modal" data-bs-target="#modalNuevoRedesContacto"><i class="fas fa-plus-circle"></i>Ingresar datos de redes de contacto</button>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display tabla_redes_contacto" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>WhatsApp</th>
                                        <th>Github</th>
                                        <th>Dirección</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($RedesContacto as $key => $value) {
                                    ?>
                                        <tr>

                                            <td><?php echo $value["telefono"]?></td>
                                            <td><?php echo $value["correo"]?></td>
                                            <td><i class="fab fa-whatsapp"></i> +51 <?php echo $value["whatsapp"]?></td>
                                            <td><a href="<?php echo $value["github"]?>" target="_blank"><i class="fab fa-github"></i> Ver</a></td>
                                            <td><?php echo $value["direccion"]?></td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1 btnEditarRedesContacto" idRedesContacto="<?php echo $value["id_redes_contacto"] ?>" data-bs-toggle="modal" data-bs-target="#modalEditarRedesContacto"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp btnEliminarRedesContacto" idRedesContacto="<?php echo $value["id_redes_contacto"] ?>"><i class="fa fa-trash"></i></a>
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


<!-- MODAL DE DATOS DE REDES SOCIALES -->
<div class="modal fade" id="modalNuevoRedesContacto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Datos de contacto</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post">
                <div class="modal-body">

                    <div class="form-group mb-1">
                        <label for="telefono" class="form-label fw-bold">Ingrese el teléfono</label>
                        <input type="text" name="telefono" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="correo" class="form-label fw-bold">Ingrese el correo electrónico</label>
                        <input type="text" name="correo" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="whatsapp" class="form-label fw-bold">Ingrese el número de Whatsapp</label>
                        <input type="text" name="whatsapp" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="github" class="form-label fw-bold">Ingrese el link de github</label>
                        <input type="text" name="github" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="direccion" class="form-label fw-bold">Ingrese la dirección</label>
                        <input type="text" name="direccion" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <?php
                $crearRedesContacto = new ControladorRedesContacto();
                $crearRedesContacto->ctrCrearRedesContacto();
                ?>
            </form>
        </div>
    </div>
</div>


<!-- MODAL DE EDITAR DE DATOS DE REDES SOCIALES -->
<div class="modal fade" id="modalEditarRedesContacto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Editar redes de contacto</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post">
                <div class="modal-body">

                    <input type="hidden" name="id_redes_contacto" id="id_redes_contacto">

                    <div class="form-group mb-1">
                        <label for="telefono" class="form-label fw-bold">Teléfono</label>
                        <input type="text" name="editTelefono" id="editTelefono" class="form-control">
                    </div>

                    <div class="form-group mb-1">
                        <label for="correo" class="form-label fw-bold">Correo electrónico</label>
                        <input type="text" name="editCorreo" id="editCorreo" class="form-control">
                    </div>

                    <div class="form-group mb-1">
                        <label for="whatsapp" class="form-label fw-bold">Número de Whatsapp</label>
                        <input type="text" name="editWhatsapp" id="editWhatsapp" class="form-control">
                    </div>

                    <div class="form-group mb-1">
                        <label for="github" class="form-label fw-bold">Link de github</label>
                        <input type="text" name="editGithub" id="editGithub" class="form-control">
                    </div>

                    <div class="form-group mb-1">
                        <label for="direccion" class="form-label fw-bold">Dirección</label>
                        <input type="text" name="editDireccion" id="editDireccion" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <?php
                $editarRedesContacto = new ControladorRedesContacto();
                $editarRedesContacto->ctrEditarRedesContacto();
                ?>
            </form>
        </div>
    </div>
</div>


<!-- BORRAR REDES DE CONTACTO -->

<?php
$borrarRedesContacto = new ControladorRedesContacto();
$borrarRedesContacto->ctrBorrarRedesContacto();
?>