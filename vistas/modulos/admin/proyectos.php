<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="inicio" class="form-label fw-bold">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Proyectos</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Administrar proyectos</h4>
                    </div>
                    <div class="mx-4">
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalNuevoProyecto"><i class="fas fa-plus-circle"></i> Nuevo proyecto</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display tabla_proyecto" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Título</th>
                                        <th>Cliente</th>
                                        <th>Lenguajes</th>
                                        <th>preview</th>
                                        <th>descripcion</th>
                                        <th>imagen</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $item = null;
                                    $valor = null;

                                    $proyectos = ControladorProyecto::ctrMostrarProyecto($item, $valor);

                                    foreach ($proyectos as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $value["titulo"] ?></td>
                                            <td><?php echo $value["cliente"] ?></td>
                                            <td><?php echo $value["lenguajes"] ?></td>
                                            <td><?php echo $value["preview"] ?></td>
                                            <td><?php echo $value["descripcion"] ?></td>
                                            <td>
                                                <?php
                                                if ($value["imagen"] != null) {
                                                ?>
                                                    <img src="<?php echo $value["imagen"]?>" class=" img-fluid" width="100px" height="40px" alt="">
                                                <?php
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1 btnEditarProyecto" idProyecto="<?php echo $value["id_proyecto"] ?>" data-bs-toggle="modal" data-bs-target="#modalEditarProyecto"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp btnEliminarProyecto" idProyecto="<?php echo $value["id_proyecto"] ?>" imagen="<?php echo $value["imagen"] ?>"><i class="fa fa-trash"></i></a>
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


<!-- MODAL NUEVO PROYECTO -->
<div class="modal fade" id="modalNuevoProyecto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Nuevo proyecto</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titulo" class="form-label fw-bold">Ingrese el título</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Ingrese nombre">
                    </div>
                    <div class="form-group">
                        <label for="cliente" class="form-label fw-bold">Ingrese el cliente</label>
                        <input type="text" name="cliente" class="form-control" placeholder="Ingrese apellidos">
                    </div>
                    <div class="form-group">
                        <label for="lenguajes" class="form-label fw-bold">Ingrese los lenguajes de programación</label>
                        <input type="text" name="lenguajes" class="form-control" placeholder="Ingrese corro electrónico">
                    </div>
                    <div class="form-group">
                        <label for="preview" class="form-label fw-bold">Ingrese el link del demo</label>
                        <input type="text" name="preview" class="form-control" placeholder="Ingrese la contraseña">
                    </div>
                    <div class="form-group">
                        <label for="preview" class="form-label fw-bold">Ingrese la descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagen" class="form-label fw-bold">Ingrese la imagen</label>
                        <input type="file" name="imagen" id="imagen" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <?php
                $crearProyecto = new ControladorProyecto();
                $crearProyecto->ctrCrearProyecto();
                ?>
            </form>
        </div>
    </div>
</div>


<!-- MODAL EDITAR PROYECTO -->
<div class="modal fade" id="modalEditarProyecto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Editar usuario</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <input type="hidden" name="id_usuario" id="id_usuario">
                    <div class="form-group">
                        <label for="nombre" class="form-label fw-bold">Nombre</label>
                        <input type="text" name="editarNombre" id="editarNombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="apellidos" class="form-label fw-bold">Apellidos</label>
                        <input type="text" name="editarApellidos" id="editarApellidos" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="correo" class="form-label fw-bold">Correo electrónico</label>
                        <input type="email" name="editarCorreo" id="editarCorreo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contrasena" class="form-label fw-bold">Ingrese la contraseña</label>
                        <input type="password" class="form-control" name="editarContrasena" placeholder="Escriba la nueva contraseña">
                        <input type="hidden" id="contrasenaActual" name="contrasenaActual">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Actualizar</button>
                </div>
                <?php
                $editarUsuario = new ControladorProyecto();
                $editarUsuario->ctrEditarProyecto();
                ?>
            </form>
        </div>
    </div>
</div>

<!-- BORRAR USUARIO -->

<?php
$borrarProyecto = new ControladorProyecto();
$borrarProyecto->ctrBorrarProyecto();
?>