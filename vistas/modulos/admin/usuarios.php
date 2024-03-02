<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="inicio" class="form-label fw-bold">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Administrar usuarios</h4>
                    </div>
                    <div>
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalNuevoUsuario"><i class="fas fa-plus-circle"></i> Nuevo usuario</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $item = null;
                                    $valor = null;

                                    $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                                    foreach ($usuarios as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $value["nombre"] ?></td>
                                            <td><?php echo $value["apellidos"] ?></td>
                                            <td><?php echo $value["correo"] ?></td>

                                            <td><?php echo $value["fecha"] ?></td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1 btnEditarUsuario" idUsuario="<?php echo $value["id_usuario"] ?>" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp btnEliminarUsuario" idUsuario="<?php echo $value["id_usuario"] ?>" correo="<?php echo $value["correo"] ?>"><i class="fa fa-trash"></i></a>
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


<!-- MODAL NUEVO USUARIO -->
<div class="modal fade" id="modalNuevoUsuario">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold">Nuevo usuario</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre" class="form-label fw-bold">Ingrese nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellidos" class="form-label fw-bold">Ingrese apellidos</label>
                        <input type="text" name="apellidos" class="form-control" placeholder="Ingrese apellidos">
                    </div>
                    <div class="form-group">
                        <label for="correo" class="form-label fw-bold">Ingrese correo electrónico</label>
                        <input type="email" name="correo" class="form-control" placeholder="Ingrese corro electrónico">
                    </div>
                    <div class="form-group">
                        <label for="contrasena" class="form-label fw-bold">Ingrese la contraseña</label>
                        <input type="password" name="contrasena" class="form-control" placeholder="Ingrese la contraseña">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <?php
                $crearUsuario = new ControladorUsuarios();
                $crearUsuario->ctrCrearUsuario();
                ?>
            </form>
        </div>
    </div>
</div>