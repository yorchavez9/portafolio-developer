<?php

/* CONTROLADORES */

require_once "controladores/plantilla.controlador.php";
require_once "controladores/Usuario.controlador.php";


/* MODELOS */

require_once "modelos/Usuarios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();