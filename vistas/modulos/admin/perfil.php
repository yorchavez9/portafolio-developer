<?php
$item = null;
$valor = null;

$perfil = ControladorPerfil::ctrMostrarPerfil($item, $valor);

$count = count($perfil);

?>
<div class="content-body">
    <div class="container-fluid content_perfil">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="Inicio">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Perfil</a></li>
            </ol>
            <?php
            if ($count <= 0) {
            ?>
                <div class="text-center mb-3">
                    <button type="" class="btn btn-primary w-25 mt-3" data-bs-toggle="modal" data-bs-target="#modalPerfil"><i class="fas fa-save"></i> Ingresar datos del perfil</button>
                </div>
            <?php
            }
            ?>
        </div>

        <?php
        foreach ($perfil as $key => $value) {
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo rounded text-center p-4">
                                <img src="<?php echo $value["foto"]?>" class="img-fluid rounded-circle w-25 " alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 text-center">
                        <a href="<?php echo $value["cv"]?>" class="btn btn-success" download><i class="fas fa-download"></i> Currículum vitae</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <div>
                                    <div class="settings-form">
                                        <h3 class="text-primary mb-3 fw-bold">Datos personales</h3>
                                        <form>
                                            <div class="row mb-2">
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label fw-bold h5">Nombre completo</label><br>
                                                    <span><?php echo $value["nombre"]?></span>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label fw-bold h5">Especialización</label><br>
                                                    <span><?php echo $value["especializacion"]?></span>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label fw-bold h5">Descripción</label><br>
                                                    <p><?php echo $value["descripcion"]?></p>
                                                </div>

                                            </div>

                                            <div class="mb-2">

                                                <a href="#" class="btn btn-primary mx-3 btnEditarPerfil" idPerfil="<?php echo $value["id_perfil"]?>" data-bs-toggle="modal" data-bs-target="#modalEditarPerfil"><i class="fas fa-edit"></i> Editar</a>

                                                <a href="#" class="btn btn-danger btnEliminarPerfil" idPerfil="<?php echo $value["id_perfil"]?>" foto="<?php echo $value["foto"]?>" cv="<?php echo $value["cv"]?>"><i class="fas fa-trash"></i> Editar</a>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>

    </div>
</div>

<!-- MODAL NUEVO PERFIL -->
<div class="modal fade" id="modalPerfil">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Ingresar datos del perfil</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="row mb-2">
                        <div class="form-group col-md-6">
                            <label for="nombre" class="form-label fw-bold">Ingrese nombre (<span class="text-danger">*</span>)</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidos" class="form-label fw-bold">Ingrese la especialización (<span class="text-danger">*</span>)</label>
                            <input type="text" name="especializacion" class="form-control" placeholder="Ingrese la especialización" required>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label for="nombre" class="form-label fw-bold">Ingrese una foto (<span class="text-danger">*</span>)</label>
                            <input type="file" name="foto" id="foto" class="form-control" accept=".png, .jpeg, .jpg" required>
                            <small>La foto debe tener 486px x 679px</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidos" class="form-label fw-bold">Ingrese la CV</label>
                            <input type="file" name="cv" id="cv" class="form-control" accept=".pdf, .doc, .docx">
                            <small>Solo se permite pdf o word</small>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group">
                            <label for="nombre" class="form-label fw-bold">Ingrese la descripción (<span class="text-danger">*</span>)</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese la descripción (Mínimo 5 palabras - Máximo 30 palabras)" required></textarea>
                            <div id="errorMensaje" style="color: red;"></div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <?php
                $crearPerfil = new ControladorPerfil();
                $crearPerfil->ctrCrearPerfil();
                ?>
            </form>
        </div>
    </div>
</div>


<!-- MODAL EDITAR PERFIL -->
<div class="modal fade" id="modalEditarPerfil">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Editar perfil</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id_perfil" id="id_perfil">
                    <div class="row mb-2">
                        <div class="form-group col-md-6">
                            <label for="nombre" class="form-label fw-bold">Ingrese nombre (<span class="text-danger">*</span>)</label>
                            <input type="text" name="editNombre" id="editNombre" class="form-control" placeholder="Ingrese nombre" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidos" class="form-label fw-bold">Ingrese la especialización (<span class="text-danger">*</span>)</label>
                            <input type="text" name="editEspecializacion" id="editEspecializacion" class="form-control" placeholder="Ingrese la especialización">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label for="editFoto" class="form-label fw-bold">Ingrese una foto (<span class="text-danger">*</span>)</label>
                            <input type="file" name="editFoto" id="editFoto" class="form-control" accept=".png, .jpeg, .jpg">
                            <input type="hidden" name="fotoActual" id="fotoActual">
                            <small>La foto debe tener 486px x 679px</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cv" class="form-label fw-bold">Ingrese la CV</label>
                            <input type="file" name="editCv" id="editCv" class="form-control" accept=".pdf, .doc, .docx">
                            <input type="hidden" name="cvActual" id="cvActual">
                            <small>Solo se permite pdf o word</small>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group">
                            <label for="descripcion" class="form-label fw-bold">Ingrese la descripción (<span class="text-danger">*</span>)</label>
                            <textarea name="editDescripcion" id="editDescripcion" class="form-control" placeholder="Ingrese la descripción (Mínimo 5 palabras - Máximo 30 palabras)" required></textarea>
                            <div id="errorMensaje" style="color: red;"></div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Actualizar</button>
                </div>
                <?php
                $editarPerfil = new ControladorPerfil();
                $editarPerfil->ctrEditarPerfil();
                ?>
            </form>
        </div>
    </div>
</div>


<!-- BORRAR USUARIO -->

<?php
$borrarPerfil = new ControladorPerfil();
$borrarPerfil->ctrBorrarPerfil();
?>


<!-- Script de validación de textarea -->
<script>
    $(document).ready(function() {
        $('#descripcion').on('input', function() {
            var words = this.value.trim().split(/\s+/);
            if (words.length >= 30) {
                $('#errorMensaje').text('Error: Se permiten solo 30 palabras.');
                $(this).on('keydown', function(e) {
                    // Permitir borrar si se alcanzó el límite
                    if (e.keyCode == 8 || e.keyCode == 46) {
                        return true;
                    }
                    // Evitar cualquier otro tipo de entrada
                    e.preventDefault();
                });
            } else {
                $('#errorMensaje').text('');
                $(this).off('keydown'); // Habilitar la entrada de nuevo
            }
        });
    });
</script>