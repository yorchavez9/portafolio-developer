<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="inicio" class="form-label fw-bold">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Educación experiencia</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Administrar educación y experiencia</h4>
                    </div>
                    <div class="mx-4">
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalNuevoEduExpe"><i class="fas fa-plus-circle"></i> Nuevo educación o experiencia</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display tabla_edu_expe" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Tipo</th>
                                        <th>Título</th>
                                        <th>Lugar</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $item = null;
                                    $valor = null;

                                    $educacionExperiencia = ControladorEduExpe::ctrMostrarEduExpe($item, $valor);

                                    foreach ($educacionExperiencia as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $value["tipo"] ?></td>
                                            <td><?php echo $value["titulo"] ?></td>
                                            <td><?php echo $value["lugar"] ?></td>
                                            <td><?php echo $value["descripcion"] ?></td>

                                            <td><?php echo $value["fecha"] ?></td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1 btnEditarEduExpe" idEduExpe="<?php echo $value["id_exp_edu"] ?>" data-bs-toggle="modal" data-bs-target="#modalEditarEduExpe"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp btnEliminarEduExpe" idEduExpe="<?php echo $value["id_exp_edu"] ?>"><i class="fa fa-trash"></i></a>
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


<!-- MODAL NUEVO EDUCACION Y EXPERIENCIA -->
<div class="modal fade" id="modalNuevoEduExpe">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Nueva educación o experiencia</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tipo" class="form-label fw-bold">Selecione educación o experiencia (<span class="text-danger">*</span>)</label>
                        <select name="tipo" class="form-control" required>
                            <option value="" selected disabled>Selecione una opción</option>
                            <option value="educacion">Educación</option>
                            <option value="experiencia">Experiencia</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="nombre" class="form-label fw-bold">Ingrese el título (<span class="text-danger">*</span>)</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Ingrese el título" required>
                    </div>
                    <div class="form-group">
                        <label for="lugar" class="form-label fw-bold">Ingrese el lugar (<span class="text-danger">*</span>)</label>
                        <input type="text" name="lugar" class="form-control" placeholder="Ingrese el lugar" required>
                    </div>
                    <div class="form-group">
                        <label for="correo" class="form-label fw-bold">Ingrese la descripción</label>
                        <textarea name="descripcion" class="form-control" placeholder="Ingrese una descripción breve de 30 palabras"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="contrasena" class="form-label fw-bold">Ingrese la fecha (<span class="text-danger">*</span>)</label>
                        <input type="text" name="fecha" class="form-control" placeholder="10/02/2023 hasta 14/01/2024">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <?php
                $crearEduExpe = new ControladorEduExpe();
                $crearEduExpe->ctrCrearEduExpe();
                ?>
            </form>
        </div>
    </div>
</div>


<!-- MODAL NUEVO EDUCACION Y EXPERIENCIA -->
<div class="modal fade" id="modalEditarEduExpe">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Nueva educación o experiencia</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_exp_edu" id="id_exp_edu">
                    </div>
                    <div class="form-group">
                        <label for="tipo" class="form-label fw-bold">Selecione educación o experiencia (<span class="text-danger">*</span>)</label>
                        <select name="editTipo" id="editTipo" class="form-control">
                            <option value="" selected disabled>Selecione una opción</option>
                            <option value="educacion">Educación</option>
                            <option value="experiencia">Experiencia</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="titulo" class="form-label fw-bold">Ingrese el título (<span class="text-danger">*</span>)</label>
                        <input type="text" name="editTitulo" id="editTitulo" class="form-control" placeholder="Ingrese el título">
                    </div>
                    <div class="form-group">
                        <label for="lugar" class="form-label fw-bold">Ingrese el lugar (<span class="text-danger">*</span>)</label>
                        <input type="text" name="editLugar" id="editLugar" class="form-control" placeholder="Ingrese el lugar">
                    </div>
                    <div class="form-group">
                        <label for="correo" class="form-label fw-bold">Ingrese la descripción (<span class="text-danger">*</span>)</label>
                        <textarea name="editDescripcion" id="editDescripcion" class="form-control" placeholder="Ingrese una descripción breve de 30 palabras"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="contrasena" class="form-label fw-bold">Ingrese la fecha (<span class="text-danger">*</span>)</label>
                        <input type="text" name="editFecha" id="editFecha" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-update"></i> Guardar</button>
                </div>
                <?php
                $editaraEduExpe = new ControladorEduExpe();
                $editaraEduExpe->ctrEditarEduExpe();
                ?>
            </form>
        </div>
    </div>
</div>


<!-- BORRAR EDUCACION O EXPERIENCIA -->

<?php
$borrarEduExpe = new ControladorEduExpe();
$borrarEduExpe->ctrBorrarEduExpe();
?>