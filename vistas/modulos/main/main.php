<?php

$item = null;
$valor = null;

$perfils = ControladorPerfil::ctrMostrarPerfil($item, $valor);
$redesSociales = ControladorRedesSociales::ctrMostrarRedesSociales($item, $valor);
$proyectos = ControladorProyecto::ctrMostrarProyecto($item, $valor);
$educacionExperiencia = ControladorEduExpe::ctrMostrarEduExpe($item, $valor);
$redesContacto = ControladorRedesContacto::ctrMostrarRedesContacto($item, $valor);

$totalProyecto = count($proyectos);

?>
<main class="main__content_wrapper">

    <!-- Start Hero section -->
    <div class="hero__section hero__section--bg" id="home">
        <div class="container">
            <div class="hero__section--inner d-flex align-items-center">
                <div class="hero__thumbnail position__relative">
                    <img class="hero__thumbnail--media light_img" src="vistas/dist/main/assets/img/hero/hero-thumbnail.png" alt="img">
                    <img class="hero__thumbnail--media dark_img" src="vistas/dist/main/assets/img/hero/hero-man-dark.png" alt="img">
                    <div class="projects__budget d-flex align-items-center">
                        <span class="projects__budget--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </span>
                        <div class="projects__budget--content">
                            <span class="projects__budget--ammount"><?php echo $totalProyecto ?>+</span>
                            <span class="projects__budget--text">Proyectos completos</span>
                        </div>
                    </div>

                    <span class="logo__positioning one">
                        <img src="vistas/dist/main/assets/img/logo/logo-laravel.png" alt="logo">
                    </span>
                    <span class="logo__positioning one">
                        <img src="vistas/dist/main/assets/img/logo/react.png" style="margin-top: 10rem;" alt="logo">
                    </span>
                    <span class="logo__positioning one">
                        <img src="vistas/dist/main/assets/img/logo/logo-mysql.png" style="margin-top: 20rem;" alt="logo">
                    </span>
                    <span class="logo__positioning one">
                        <img src="vistas/dist/main/assets/img/logo/logo-php.png" style="margin-top: 30rem;" alt="logo">
                    </span>



                    <span class="logo__positioning two">
                        <img src="vistas/dist/main/assets/img/logo/logo-nodejs.png" alt="logo">
                    </span>
                    <span class="logo__positioning two">
                        <img src="vistas/dist/main/assets/img/logo/logo-javscript.png" style="margin-top: 9rem;" alt="logo">
                    </span>
                    <span class="logo__positioning two">
                        <img src="vistas/dist/main/assets/img/logo/logo-vuejs.png" style="margin-top: 20rem;" alt="logo">
                    </span>
                    <span class="logo__positioning two">
                        <img src="vistas/dist/main/assets/img/logo/logo-mongo.png" style="margin-top: 30rem;" alt="logo">
                    </span>

                </div>

                <div class="hero__content">
                    <?php
                    foreach ($perfils as $key => $value) {
                    ?>
                        <span class="hero__content--subtitle text__secondary mb-10">HOLA SOY</span>
                        <h3 class="hero__content--title mb-15">¡<?php echo $value["nombre"] ?>! </h3>
                        <h3 class="hero__content--subtitle2 mb-20"><?php echo $value["especializacion"] ?></h3>
                        <p class="hero__content--desc mb-30"><?php echo $value["descripcion"] ?></p>
                    <?php
                    }
                    ?>
                    <div class="hero__content--footer d-flex align-items-center">
                        <a class="btn hero__content--btn" href="#about">Acerca de mí</a>
                        <div class="social__share d-flex align-items-center">
                            <span class="social__share--title">Sígueme: </span>
                            <ul class="social__share--wrapper d-flex">

                                <?php

                                foreach ($redesSociales as $key => $value) {
                                ?>
                                    <li class="social__share--child">
                                        <a class="social__share--link" href="<?php echo $value["facebook"] ?>" target="_blank">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px">
                                                <path d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z" />
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="social__share--child">
                                        <a class="social__share--link" href="<?php echo $value["pinterest"] ?>" target="_blank">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px">
                                                <path d="M12,2C6.477,2,2,6.477,2,12c0,4.237,2.636,7.855,6.356,9.312c-0.087-0.791-0.167-2.005,0.035-2.868 c0.182-0.78,1.172-4.971,1.172-4.971s-0.299-0.599-0.299-1.484c0-1.391,0.806-2.428,1.809-2.428c0.853,0,1.265,0.641,1.265,1.408 c0,0.858-0.546,2.141-0.828,3.329c-0.236,0.996,0.499,1.807,1.481,1.807c1.777,0,3.143-1.874,3.143-4.579 c0-2.394-1.72-4.068-4.177-4.068c-2.845,0-4.515,2.134-4.515,4.34c0,0.859,0.331,1.781,0.744,2.282 c0.082,0.099,0.093,0.186,0.069,0.287c-0.076,0.316-0.244,0.995-0.277,1.134c-0.043,0.183-0.145,0.222-0.334,0.133 c-1.249-0.582-2.03-2.408-2.03-3.874c0-3.154,2.292-6.052,6.608-6.052c3.469,0,6.165,2.472,6.165,5.776 c0,3.447-2.173,6.22-5.189,6.22c-1.013,0-1.966-0.527-2.292-1.148c0,0-0.502,1.909-0.623,2.378 c-0.226,0.868-0.835,1.958-1.243,2.622C9.975,21.843,10.969,22,12,22c5.522,0,10-4.478,10-10S17.523,2,12,2z" />
                                            </svg>
                                            <span class="visually-hidden">Pinterest</span>
                                        </a>
                                    </li>
                                    <li class="social__share--child">
                                        <a class="social__share--link" href="<?php echo $value["twitter"] ?>" target="_blank">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px">
                                                <path d="M22,3.999c-0.78,0.463-2.345,1.094-3.265,1.276c-0.027,0.007-0.049,0.016-0.075,0.023c-0.813-0.802-1.927-1.299-3.16-1.299 c-2.485,0-4.5,2.015-4.5,4.5c0,0.131-0.011,0.372,0,0.5c-3.353,0-5.905-1.756-7.735-4c-0.199,0.5-0.286,1.29-0.286,2.032 c0,1.401,1.095,2.777,2.8,3.63c-0.314,0.081-0.66,0.139-1.02,0.139c-0.581,0-1.196-0.153-1.759-0.617c0,0.017,0,0.033,0,0.051 c0,1.958,2.078,3.291,3.926,3.662c-0.375,0.221-1.131,0.243-1.5,0.243c-0.26,0-1.18-0.119-1.426-0.165 c0.514,1.605,2.368,2.507,4.135,2.539c-1.382,1.084-2.341,1.486-5.171,1.486H2C3.788,19.145,6.065,20,8.347,20 C15.777,20,20,14.337,20,8.999c0-0.086-0.002-0.266-0.005-0.447C19.995,8.534,20,8.517,20,8.499c0-0.027-0.008-0.053-0.008-0.08 c-0.003-0.136-0.006-0.263-0.009-0.329c0.79-0.57,1.475-1.281,2.017-2.091c-0.725,0.322-1.503,0.538-2.32,0.636 C20.514,6.135,21.699,4.943,22,3.999z" />
                                            </svg>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="social__share--child">
                                        <a class="social__share--link" href="<?php echo $value["youtube"] ?>" target="_blank">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                <path d="M21.983 7.498s-.2-1.4-.801-2.101c-.802-.902-1.601-.902-2.002-.953C15.58 4.395 12.002 4.395 12.002 4.395s-3.578 0-6.179.049c-.401.051-1.201.051-2.002.953-.602.701-.802 2.101-.802 2.101S3 9.1 3 11.6v1.8c0 2.499.2 4.099.8 5.799.802.902 1.902.902 2.403 1.002 1.401.15 5.797.049 5.797.049s3.6.101 6.2-.05c.4-.051 1.2-.051 2.002-1.002.601-.7.801-2.2.801-2.2s.201-1.6.201-4.1v-1.8c0-2.5-.201-4.1-.801-5.8zm-11.982 7.7V9.102l5.4 3.1-5.4 3.1z" />
                                            </svg>

                                            <span class="visually-hidden">Youtube</span>
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Hero section -->

    <!-- Start sevices section -->
    <!--   <section class="services__section section--padding" id="servives">
        <div class="container">
            <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                <div class="section__heading max-width-580">
                    <span class="section__heading--subtitle text__secondary">CREATIVE SERVICE</span>
                    <h2 class="section__heading--title">What can i do for service
                        clients you</h2>
                </div>
                <div class="section__heading--right max-width-450">
                    <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                        with the the branded videoscustomers coming back for
                        services Makes best effort.</p>
                </div>
            </div>
            <div class="services__section--inner">
                <div class="row mb--n30">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="services__card">
                            <span class="services__card--icon color1 mb-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </span>
                            <div class="services__card--content">
                                <h3 class="services__card--title mb-15">Web Development</h3>
                                <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                <a class="services__card--link color1" href="services.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="services__card">
                            <span class="services__card--icon color2 mb-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                                    <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                                    <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                                    <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                                    <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                                </svg>
                            </span>
                            <div class="services__card--content">
                                <h3 class="services__card--title mb-15">Creative Design</h3>
                                <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                <a class="services__card--link color2" href="services.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="services__card">
                            <span class="services__card--icon color3 mb-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                </svg>
                            </span>
                            <div class="services__card--content">
                                <h3 class="services__card--title mb-15">Project Consultancy</h3>
                                <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                <a class="services__card--link color3" href="services.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="services__card">
                            <span class="services__card--icon color4 mb-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-headphones">
                                    <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                    <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                                </svg>
                            </span>
                            <div class="services__card--content">
                                <h3 class="services__card--title mb-15">24/7 Support</h3>
                                <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                <a class="services__card--link color4" href="services.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="services__card">
                            <span class="services__card--icon color5 mb-25">
                                <svg width="40" height="40" stroke="currentColor" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z"></path>
                                </svg>
                            </span>
                            <div class="services__card--content">
                                <h3 class="services__card--title mb-15">Awesome Idea</h3>
                                <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                <a class="services__card--link color5" href="services.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="services__card">
                            <span class="services__card--icon color6 mb-25">
                                <svg width="40" height="40" stroke="currentColor" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zm288 32c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32z"></path>
                                </svg>
                            </span>
                            <div class="services__card--content">
                                <h3 class="services__card--title mb-15">Development Design</h3>
                                <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                <a class="services__card--link color6" href="services.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End sevices section -->

    <!-- Start about section -->
    <section class="about__section about__section--bg section--padding" id="about">
        <div class="container">
            <div class="about__section--inner d-flex">
                <div class="about__content">
                    <div class="section__heading mb-30">
                        <span class="section__heading--subtitle text__secondary">ACERCA DE MÍ</span>
                        <h2 class="section__heading--title">Desarrollador fullStak</h2>
                    </div>
                    <div class="about__info">
                        <h3 class="about__info--title text__secondary mb-20">INFORMACIÓN PERSONAL:</h3>
                        <ul class="about__info--wrapper d-flex">
                            <li class="about__info--items">Nombre: Maras</li>
                            <li class="about__info--items">Apellido: Faron</li>
                            <li class="about__info--items">Dirección: Lima</li>
                            <li class="about__info--items">Teléfono: +51 921184010</li>
                            <li class="about__info--items">Edad: 24 años</li>
                            <li class="about__info--items">Correo electrónico: you@mail.com</li>
                            <li class="about__info--items">Nacionalidad: Tunecino</li>
                            <li class="about__info--items">Skype: Roben.Boris</li>
                            <li class="about__info--items">Freelance: Disponible</li>
                            <li class="about__info--items">Idiomas:Español, Francés, Inglés</li>

                        </ul>
                        <a class="about__btn primary__btn" href="#contact">Contratarme</a>
                    </div>
                </div>
                <div class="about__thumbnail">
                    <div class="about__thumbnail--media position__relative">
                        <img class="position__relative" src="vistas/dist/main/assets/img/other/about.png" alt="img">
                    </div>
                    <div class="about__experience text-center">
                        <h4 class="about__experience--title title-stroke">27+</h4>
                        <span class="about__experience--subtitle">Experiencia trabajando</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about section -->

    <!-- Start brand section -->
    <div class="brand__section brand__section--bg border__bottom section--padding">
        <div class="container">
            <div class="brand__section--inner">
                <div class="brand__logo--child">
                    <div class="brand__logo--items">
                        <img class="brand__logo--img brand_logo_light" src="vistas/dist/main/assets/img/logo/logo-javscript.png" alt="brand-logo">
                        <img class="brand__logo--img brand_logo_dark" src="vistas/dist/main/assets/img/logo/logo-javscript.png" alt="brand-logo">
                    </div>
                    <div class="brand__logo--items">
                        <img class="brand__logo--img brand_logo_light" src="vistas/dist/main/assets/img/logo/logo-laravel.png" alt="brand-logo">
                        <img class="brand__logo--img brand_logo_dark" src="vistas/dist/main/assets/img/logo/logo-laravel.png" alt="brand-logo">
                    </div>
                </div>
                <div class="brand__logo--child">
                    <div class="brand__logo--items">
                        <img class="brand__logo--img brand_logo_light" src="vistas/dist/main/assets/img/logo/logo-mongo.png" alt="brand-logo">
                        <img class="brand__logo--img brand_logo_dark" src="vistas/dist/main/assets/img/logo/logo-mongo.png" alt="brand-logo">
                    </div>
                    <div class="brand__logo--items">
                        <img class="brand__logo--img brand_logo_light" src="vistas/dist/main/assets/img/logo/logo-mysql.png" alt="brand-logo">
                        <img class="brand__logo--img brand_logo_dark" src="vistas/dist/main/assets/img/logo/logo-nodejs.png" alt="brand-logo">
                    </div>
                </div>
                <div class="brand__logo--child">
                    <div class="brand__logo--items">
                        <img class="brand__logo--img brand_logo_light" src="vistas/dist/main/assets/img/logo/logo-php.png" alt="brand-logo">
                        <img class="brand__logo--img brand_logo_dark" src="vistas/dist/main/assets/img/logo/logo-php.png" alt="brand-logo">
                    </div>
                    <div class="brand__logo--items">
                        <img class="brand__logo--img brand_logo_light" src="vistas/dist/main/assets/img/logo/logo-vuejs.png" alt="brand-logo">
                        <img class="brand__logo--img brand_logo_dark" src="vistas/dist/main/assets/img/logo/logo-vuejs.png" alt="brand-logo">
                    </div>
                </div>
                <div class="brand__logo--child">
                    <div class="brand__logo--items">
                        <img class="brand__logo--img brand_logo_light" src="vistas/dist/main/assets/img/logo/photoshop-logo.png" alt="brand-logo">
                        <img class="brand__logo--img brand_logo_dark" src="vistas/dist/main/assets/img/logo/photoshop-logo.png" alt="brand-logo">
                    </div>
                    <div class="brand__logo--items">
                        <img class="brand__logo--img brand_logo_light" src="vistas/dist/main/assets/img/logo/react.png" alt="brand-logo">
                        <img class="brand__logo--img brand_logo_dark" src="vistas/dist/main/assets/img/logo/react.png" alt="brand-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End brand section -->

    <!-- Start resume section -->
    <section class="resume__section section--padding">
        <div class="container">
            <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                <div class="section__heading max-width-580">
                    <span class="section__heading--subtitle text__secondary">EXPERIENCIA Y EDUCACIÓN</span>
                    <h2 class="section__heading--title">Currículum de experiencia y educación.</h2>
                </div>
                <div class="section__heading--right max-width-450">
                    <p class="section__heading--desc">Este currículum incluye detalles sobre mi experiencia laboral y mi educación, destacando mis logros y habilidades relevantes para mi carrera profesional.</p>
                </div>

            </div>
            <div class="resume__section--inner d-flex">

                <!-- EXPERIENCIA -->
                <div class="resume__step col-md-6">
                    <div class="border__position--style"> </div>
                    <?php
                    foreach ($educacionExperiencia as $key => $value) {
                        if ($value["tipo"] == "experiencia") {
                    ?>
                            <div class="resume__items">
                                <div class="border__round"></div>
                                <div class="resume__items--inner d-flex">
                                    <span class="resume__icons">
                                        <svg width="25" height="40" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"></path>
                                        </svg>
                                    </span>
                                    <div class="resume__content">
                                        <div class="resume__content--top d-flex align-items-center mb-10">
                                            <h3 class="resume__content--title"><?php echo $value["titulo"] ?></h3>
                                            <span class="resume__content--subtitle text-center"><?php echo $value["lugar"] ?></span>
                                        </div>
                                        <p class="resume__content--desc mb-20"><?php echo $value["descripcion"] ?></p>
                                        <span class="resume__date"><?php echo $value["fecha"] ?></span>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

                <!-- EDUCACIÓN -->
                <div class="resume__step col-md-6">
                    <div class="border__position--style"> </div>
                    <?php
                    foreach ($educacionExperiencia as $key => $value) {
                        if ($value["tipo"] == "educacion") {
                    ?>
                            <div class="resume__items">
                                <div class="border__round"></div>
                                <div class="resume__items--inner d-flex">
                                    <span class="resume__icons">
                                        <svg width="25" height="44" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"></path>
                                        </svg>
                                    </span>
                                    <div class="resume__content">
                                        <div class="resume__content--top d-flex align-items-center mb-10">
                                            <h3 class="resume__content--title"><?php echo $value["titulo"] ?></h3>
                                            <span class="resume__content--subtitle text-center"><?php echo $value["lugar"] ?></span>
                                        </div>
                                        <p class="resume__content--desc mb-20"><?php echo $value["descripcion"] ?></p>
                                        <span class="resume__date"><?php echo $value["fecha"] ?></span>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>
    <!-- End resume section -->

    <!-- Start skills Section -->
    <section class="skills__section section--padding pt-0">
        <div class="container">
            <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                <div class="section__heading max-width-580">
                    <span class="section__heading--subtitle text__secondary">HABILIDADES</span>
                    <h2 class="section__heading--title">Habilidad de los lenguajes de programación</h2>
                </div>
                <div class="section__heading--right max-width-450">
                    <p class="section__heading--desc">En esta sección, destacaré mis habilidades en diversos lenguajes de programación, mostrando mi experiencia y competencia en el desarrollo de software y la resolución de problemas técnicos.</p>
                </div>

            </div>
            <div class="skills__section--inner d-flex justify-content-between">
                <div class="skills__step">
                    <div class="skills__items">
                        <div class="skills__text">
                            <span class="skills__name">Node.js</span>
                            <span class="skills__count width_60">60%</span>
                        </div>
                        <div class="skills__field width_60">

                        </div>
                    </div>
                    <div class="skills__items">
                        <div class="skills__text">
                            <span class="skills__name">JavaScript</span>
                            <span class="skills__count width_75">75%</span>
                        </div>
                        <div class="skills__field width_75">

                        </div>
                    </div>
                    <div class="skills__items">
                        <div class="skills__text">
                            <span class="skills__name">Web Design</span>
                            <span class="skills__count width_90">90%</span>
                        </div>
                        <div class="skills__field width_90">

                        </div>
                    </div>
                </div>
                <div class="skills__step">
                    <div class="skills__items">
                        <div class="skills__text">
                            <span class="skills__name">HTML</span>
                            <span class="skills__count width_100">100%</span>
                        </div>
                        <div class="skills__field width_100">

                        </div>
                    </div>
                    <div class="skills__items">
                        <div class="skills__text">
                            <span class="skills__name">CSS</span>
                            <span class="skills__count width_90">90%</span>
                        </div>
                        <div class="skills__field width_90">

                        </div>
                    </div>
                    <div class="skills__items">
                        <div class="skills__text">
                            <span class="skills__name">React.js</span>
                            <span class="skills__count width_70">70%</span>
                        </div>
                        <div class="skills__field width_70">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End skills Section -->

    <!-- Start portfolio section -->
    <section class="portfolio__section portfolio__section--bg section--padding" id="portfolio">
        <div class="container">
            <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                <div class="section__heading max-width-580 text-center">
                    <h2 class="section__heading--title text-center" style="text-align: center;">Proyectos</h2>
                </div>
            </div>
            <div class="portfolio__section--inner">
                <div class="button-group filters-button-group mb-50">
                    <button class="filters__button--items button is-checked" data-filter="*">Show All</button>
                </div>
                <div class="portfolio__grid mb--n30">
                    <?php
                    foreach ($proyectos as $key => $value) {
                    ?>
                        <div class="element-item web" data-category="web">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#proyectoModal<?php echo $value["id_proyecto"] ?>">
                                    <div class="portfolio__image--card">
                                        <img src="<?php echo $value["imagen"] ?>" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
                                                <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                                            </svg>
                                        </span>
                                        <h3 class="portfolio__title text-white"><?php echo $value["titulo"] ?></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio section -->



    <!-- Start contact section -->
    <section class="contact__section contact__section--bg" id="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact__left">
                        <div class="section__heading mb-50">
                            <span class="section__heading--subtitle text__secondary">CONTACTO</span>
                            <h2 class="section__heading--title mb-10">Contáctame y trabajemos juntos!</h2>
                            <p class="section__heading--desc">¡Estoy listo/a para colaborar contigo! Completa el formulario o envíame un correo electrónico para ponernos en contacto.</p>
                        </div>


                        <form class="contact__form" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input type="text" class="contact__input--field" name="nombre" placeholder="Tu nombre completo">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input type="email" class="contact__input--field" name="correo" placeholder="Tu correo electrónico">
                                </div>
                            </div>

                            <textarea name="mensaje" class="contact__textarea--field" placeholder="Mensaje"></textarea>

                            <button type="submit" class="contact__button primary__btn">Enviar</button>

                            <?php
                            $crearContactoMensaje = new ControladorContactoMsg();
                            $crearContactoMensaje->ctrCrearContactoMsg();
                            ?>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__info">
                        <?php
                        foreach ($redesContacto as $key => $value) {
                        ?>
                            <div class="contact__info--items d-flex align-items-center">
                                <span class="contact__info--icon">
                                    <svg width="25" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                    </svg>
                                </span>
                                <div class="contact__info--content">
                                    <h3 class="contact__info--title">Llámame</h3>
                                    <p class="contact__info--desc">
                                        <a href="tel:+880254615566">+51 <?php echo $value["telefono"] ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact__info--items d-flex align-items-center">
                                <span class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </span>
                                <div class="contact__info--content">
                                    <h3 class="contact__info--title">Envíanos un correo electrónico</h3>
                                    <p class="contact__info--desc">
                                        <a href="mailto:info@example.com"><?php echo $value["correo"] ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact__info--items d-flex align-items-center">
                                <span class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="currentColor" d="M12 0C5.4 0 0 5.4 0 12c0 2.2.6 4.3 1.7 6.1L0 24l6.3-1.7c1.8 1 3.9 1.7 6.1 1.7 6.6 0 12-5.4 12-12S18.6 0 12 0zm5.4 15.3c-.3.9-1 1.7-1.9 2.1-.6.3-3.6 1.4-4.1 1.5-.5.2-1 .2-1.4 0-.5-.3-2-1.1-2.8-1.4-.7-.4-1.5-.2-2.1.3-.3.3-.3.5-.3.6 0 1.3-.1 2-.1.7 0 2.4.2 3.5 1.3.9.9 1.2 1.8 1.4 2.2.1.3-.1.6-.4.9z" />
                                    </svg>

                                </span>
                                <div class="contact__info--content">
                                    <h3 class="contact__info--title">Whatsapp</h3>
                                    <p class="contact__info--desc">+51 <?php echo $value["whatsapp"] ?></p>
                                </div>
                            </div>
                            <div class="contact__info--items d-flex align-items-center">
                                <span class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="currentColor" d="M12 0C5.4 0 0 5.4 0 12c0 5.3 3.4 9.8 8.1 11.4.6.1.8-.3.8-.6v-2.1c-3.3.7-4-1.6-4-1.6-.5-1.2-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 1.7 2.6 1.2 3.3.9.1-.7.4-1.2.7-1.5-2.6-.3-5.3-1.3-5.3-5.9 0-1.3.5-2.4 1.3-3.2-.1-.3-.6-1.5.1-3.2 0 0 1-.3 3.3 1.2 1-.3 2-.5 3-.5s2 .2 3 .5c2.3-1.5 3.3-1.2 3.3-1.2.7 1.7.2 2.9.1 3.2.8.8 1.3 1.9 1.3 3.2 0 4.6-2.7 5.6-5.3 5.9.4.4.8 1.1.8 2.2v3.3c0 .3.3.7.9.6C20.6 21.8 24 17.3 24 12c0-6.6-5.4-12-12-12z" />
                                    </svg>

                                </span>
                                <div class="contact__info--content">
                                    <h3 class="contact__info--title">Github</h3>
                                    <a href="<?php echo $value["github"] ?>" target="_blank">
                                        <p class="contact__info--desc">Ver github</p>
                                    </a>
                                </div>
                            </div>
                            <div class="contact__info--items d-flex align-items-center">
                                <span class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </span>
                                <div class="contact__info--content">
                                    <h3 class="contact__info--title">Dirección</h3>
                                    <p class="contact__info--desc"><?php echo $value["direccion"] ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact section -->

    <!-- Start contact map area -->
    <div class="contact__map--area">
        <div class="container">
            <iframe class="contact__map--iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7887.465355142307!2d-0.13384360843222626!3d51.4876034467734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760532743b90e1%3A0x790260718555a20c!2sU.S.%20Embassy%2C%20London!5e0!3m2!1sen!2sbd!4v1632035375945!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- End contact map area -->



    <!-- Start footer section -->
    <footer class="footer footer__section footer__bg">
        <div class="container">
            <div class="main__footer d-flex justify-content-between align-items-center">
                <p class="copyright__content mb-0">Desarrollado por <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="text-paragraph" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </span> by <span><a class="text__secondary" href="#">Apuuray</a></span>© 2024</p>
                <ul class="footer__menu d-flex">
                    <li><a class="footer__menu--link" href="shop.html">Términos & condiciones</a></li>
                    <li><a class="footer__menu--link" href="about.html"> política de privacidad</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

</main>



<?php
foreach ($proyectos as $key => $value) {

?>
    <!-- MODAL DE PROYECTOS -->
    <div class="modal fade" id="proyectoModal<?php echo $value["id_proyecto"] ?>" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered portfolio__modal--dialog">
            <div class="modal-content modal-content-height">
                <button type="button" class="btn-close portfolio__modal--colse" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <div class="modal-body portfolio__modal--body">
                    <h2 class="portfolio__modal--title text-center mb-30">Detalle del proyecto</h2>
                    <div class="portfolio__modal--info d-flex align-items-center mb-20">
                        <div class="portfolio__modal--info--list">
                            <p class="portfolio__modal--info--text">
                                <span class="portfolio__modal--info__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg></span>
                                Project :
                                <span class="portfolio__modal--info__name"><?php echo $value["titulo"] ?></span>
                            </p>
                            <p class="portfolio__modal--info--text">
                                <span class="portfolio__modal--info__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                        <polyline points="16 18 22 12 16 6"></polyline>
                                        <polyline points="8 6 2 12 8 18"></polyline>
                                    </svg></span>
                                Languajes :
                                <span class="portfolio__modal--info__name"><?php echo $value["lenguajes"] ?></span>
                            </p>
                        </div>
                        <div class="portfolio__modal--info--list">
                            <p class="portfolio__modal--info--text">
                                <span class="portfolio__modal--info__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg></span>
                                Client :
                                <span class="portfolio__modal--info__name"><?php echo $value["cliente"] ?></span>
                            </p>
                            <p class="portfolio__modal--info--text">
                                <span class="portfolio__modal--info__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline points="15 3 21 3 21 9"></polyline>
                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                    </svg></span>
                                Preview :
                                <a class="portfolio__modal--info__name" href="<?php echo $value["preview"] ?>" target="_blank" rel="noopener noreferrer">Ver preview</a>
                            </p>
                        </div>
                    </div>
                    <p class="portfolio__modal--info__desc mb-30">
                        <?php echo $value["descripcion"] ?>
                    </p>
                    <div class="portfolio__modal--info__media">
                        <img src="<?php echo $value["imagen"] ?>" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    # code...
}
?>