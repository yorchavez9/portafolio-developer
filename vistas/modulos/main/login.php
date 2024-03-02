<div class="modal fade" id="portfolioModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close portfolio__modal--colse" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <div class="modal-body portfolio__modal--body">
                <h2 class="portfolio__modal--title text-center mb-30">Iniciar sesión</h2>

                <form class="contact__form" method="POST">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                            <label for="correo" class="form-label">Ingrese su correo electrónico</label>
                            <input type="email" name="correo" class="contact__input--field" placeholder="Ingrese su correo">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                            <label for="password" class="form-label">Ingrese su contraseña</label>
                            <input type="password" name="contrasena" class="contact__input--field" placeholder="Ingrese su contraseña">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="contact__button primary__btn">Ingresar</button>
                    </div>

                    <?php
                    
                    $IngresoUsuario = new ControladorUsuarios();
                    $IngresoUsuario->ctrIngresoUsuario();

                    ?>

                </form>

            </div>
        </div>
    </div>
</div>