<?php

/* CONTROLADORES */

require_once "controladores/plantilla.controlador.php";
require_once "controladores/Usuario.controlador.php";
require_once "controladores/Redes.Sociales.controlador.php";


/* MODELOS */

require_once "modelos/Usuarios.modelo.php";
require_once "modelos/Redes.Sociales.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();