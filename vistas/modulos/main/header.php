<button class="light__dark--btn style__fixed" id="light__to--dark">
    <svg class="dark--mode__icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
        <title>Oscuro</title>
        <path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z"></path>
    </svg>
    <svg class="light--mode__icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
        <title>Claro</title>
        <path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z"></path>
    </svg>
</button>

<!-- Start header area -->
<header class="header__section  header__transparent">
    <div class="header__sticky">
        <div class="container">
            <div class="main__header d-flex justify-content-between align-items-center">
                <div class="main__logo">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="index.html">
                            <img class="main__logo--img logo_light" src="vistas/dist/assets/img/logo/nav-log.png" alt="logo-img">
                            <img class="main__logo--img logo_dark" src="vistas/dist/assets/img/logo/nav-log-white.png" alt="logo-img">
                        </a></h1>
                </div>
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512">
                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                        </svg>
                        <span class="visually-hidden">Menú fuera del lienzo abierto</span>
                    </a>
                </div>
                <div class="main__header--right d-flex align-items-center d-none d-lg-block">
                    <div class="header__menu menu_border--none">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#home">Inicio
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#about">Acerca de </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#servives">Servicios </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#portfolio">Portafolio </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#blog">Blog
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#contact">Contacto </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <button class="primary__btn download__btn">
                        <svg class="download__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        Descargar CV
                    </button>
                    <a href="#" class="primary__btn download__btn" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                        <i class="fas fa-lock mx-2"></i>
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header area -->



<!-- Start Offcanvas header menu -->
<div class="offcanvas__header">
    <div class="offcanvas__inner">
        <div class="offcanvas__logo">
            <a class="offcanvas__logo_link" href="index.html">
                <img src="vistas/dist/assets/img/logo/nav-log.png" alt="Logo-img" width="158" height="36">
            </a>
            <button class="offcanvas__close--btn" data-offcanvas>close</button>
        </div>
        <nav class="offcanvas__menu">
            <ul class="offcanvas__menu_ul">
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="#home">Inicio</a>
                </li>
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="#about">Acerca de</a>
                </li>
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="#servives">Servicios</a>
                </li>
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="#portfolio">Portafolio</a>
                </li>
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="#blog">Blog</a>
                </li>
                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#contact">Contacto</a></li>

                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#contact">Login</a></li>
            </ul>
            <div class="offcanvas__download--btn">
                <button class="primary__btn download__btn">
                    <svg class="download__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    Descargar CV
                </button>
            </div>

            <div class="offcanvas__download--btn">
                <a href="#" class="popup-modal--open display-block primary__btn download__btn" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                    <svg class="download__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    Login
                </a>
            </div>

        </nav>
    </div>
</div>
<!-- End Offcanvas header menu -->


<!-- MODAL DEL LOGIN -->
<?php
include "login.php";
?>