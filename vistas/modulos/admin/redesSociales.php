<?php
$item = null;
$valor = null;

$RedeSociales = ControladorRedesSociales::ctrMostrarRedesSociales($item, $valor);

$countData = count($RedeSociales);
?>

<style>
    .fa-facebook {
        color: #1877F2;
        font-size: 20px;
    }
    .fa-twitter{
        color: #2393D0;
        font-size: 20px;
    }
    .fa-pinterest{
        color: #B7081B;
        font-size: 20px;
    }
    .fa-youtube{
        color: red;
        font-size: 20px;
    }
    .fa-tiktok{
        color: black;
        font-size: 20px;
    }
    .fa-linkedin{
        color: #0886CB;
        font-size: 20px;
    }
</style>
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="inicio" class="form-label fw-bold">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Redes sociales</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Administrar redes sociales</h4>
                    </div>
                    <div>
                        <?php
                        if($countData <= 0){
                        ?>
                        <button class="btn btn-primary mt-3 mx-4" data-bs-toggle="modal" data-bs-target="#modalNuevoRedes"><i class="fas fa-plus-circle"></i>Ingresar datos de redes sociales</button>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display tabla_redes" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Pinterest</th>
                                        <th>Youtube</th>
                                        <th>Tiktok</th>
                                        <th>Linkedin</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($RedeSociales as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><a href="<?php echo $value["facebook"] ?>" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></td>
                                            <td><a href="<?php echo $value["twitter"] ?>" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></td>
                                            <td><a href="<?php echo $value["pinterest"] ?>" target="_blank"><i class="fab fa-pinterest"></i> Pinterest</a></td>
                                            <td><a href="<?php echo $value["youtube"] ?>" target="_blank"><i class="fab fa-youtube"></i> Youtube</a></td>
                                            <td><a href="<?php echo $value["tiktok"] ?>" target="_blank"><i class="fab fa-tiktok"></i> Tiktok</a></td>
                                            <td><a href="<?php echo $value["linkedin"] ?>" target="_blank"><i class="fab fa-linkedin"></i> Linkedin</a></td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1 btnEditarRedes" idRedes="<?php echo $value["id_redes_social"] ?>" data-bs-toggle="modal" data-bs-target="#modalEditarRedes"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp btnEliminarRedes" idRedes="<?php echo $value["id_redes_social"] ?>"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="modalNuevoRedes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Datos de las redes sociales</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="facebook" class="form-label fw-bold">Ingrese el link de facebook</label>
                        <input type="text" name="facebook" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="twitter" class="form-label fw-bold">Ingrese el link de twitter</label>
                        <input type="text" name="twitter" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pinterest" class="form-label fw-bold">Ingrese el link de pinterest</label>
                        <input type="text" name="pinterest" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="youtube" class="form-label fw-bold">Ingrese el link de youtube</label>
                        <input type="text" name="youtube" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tiktok" class="form-label fw-bold">Ingrese el link de tiktok</label>
                        <input type="text" name="tiktok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="linkedin" class="form-label fw-bold">Ingrese el link de linkedin</label>
                        <input type="text" name="linkedin" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <?php
                $crearRedesSociales = new ControladorRedesSociales();
                $crearRedesSociales->ctrCrearRedesSociales();
                ?>
            </form>
        </div>
    </div>
</div>


<!-- MODAL DE EDITAR DE DATOS DE REDES SOCIALES -->
<div class="modal fade" id="modalEditarRedes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Actualizar las redes sociales</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <input type="hidden" name="id_redes_social" id="id_redes_social">
                    <div class="form-group">
                        <label for="facebook" class="form-label fw-bold">Facebook</label>
                        <input type="text" name="editFacebook" id="editfacebook" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="twitter" class="form-label fw-bold">Twitter</label>
                        <input type="text" name="editTwitter" id="edittwitter" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pinterest" class="form-label fw-bold">Pinterest</label>
                        <input type="text" name="editPinterest" id="editpinterest" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="youtube" class="form-label fw-bold">Youtube</label>
                        <input type="text" name="editYoutube" id="edityoutube" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tiktok" class="form-label fw-bold">Tiktok</label>
                        <input type="text" name="editTiktok" id="edittiktok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="linkedin" class="form-label fw-bold">Linkedin</label>
                        <input type="text" name="editLinkedin" id="editlinkedin" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Guardar</button>
                </div>
                <?php
                $editarRedesSociales = new ControladorRedesSociales();
                $editarRedesSociales->ctrEditarRedesSociales();
                ?>
            </form>
        </div>
    </div>
</div>

<!-- BORRAR REDES SOCIALES -->

<?php
$borrarRedesSociales = new ControladorRedesSociales();
$borrarRedesSociales->ctrBorrarRedesSociales();
?>