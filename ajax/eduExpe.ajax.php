<?php

require_once "../controladores/EduExpe.controlador.php";
require_once "../modelos/EduExpe.modelo.php";

class AjaxEdueExpe{

	/*=============================================
	EDITAR EDUCACION O EXPERIENCIA
	=============================================*/	

	public $idEduExpe;

	public function ajaxEditarEduExpe(){

		$item = "id_exp_edu";
		$valor = $this->idEduExpe;

		$respuesta = ControladorEduExpe::ctrMostrarEduExpe($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR EDUCACION O EXPERIENCIA
=============================================*/
if(isset($_POST["idEduExpe"])){

	$editar = new AjaxEdueExpe();
	$editar -> idEduExpe = $_POST["idEduExpe"];
	$editar -> ajaxEditarEduExpe();

}

