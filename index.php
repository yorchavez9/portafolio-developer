<?php

/* CONTROLADORES */

require_once "controladores/plantilla.controlador.php";
require_once "controladores/Usuario.controlador.php";
require_once "controladores/Redes.Sociales.controlador.php";
require_once "controladores/Redes.contacto.controlador.php";
require_once "controladores/Perfil.controlador.php";


/* MODELOS */

require_once "modelos/Usuarios.modelo.php";
require_once "modelos/Redes.Sociales.modelo.php";
require_once "modelos/Redes.contacto.modelo.php";
require_once "modelos/Perfil.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();