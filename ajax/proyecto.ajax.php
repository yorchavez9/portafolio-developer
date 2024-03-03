<?php

require_once "../controladores/Proyecto.controlador.php";
require_once "../modelos/Proyecto.modelo.php";

class AjaxProyecto{

	/*=============================================
	EDITAR PROYECTO
	=============================================*/	

	public $idProyecto;

	public function ajaxProyecto(){

		$item = "id_proyecto";
		$valor = $this->idProyecto;

		$respuesta = ControladorProyecto::ctrMostrarProyecto($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR PROYECTO
=============================================*/
if(isset($_POST["idProyecto"])){

	$editar = new AjaxProyecto();
	$editar -> idProyecto = $_POST["idProyecto"];
	$editar -> ajaxProyecto();

}

