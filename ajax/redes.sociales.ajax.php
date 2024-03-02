<?php

require_once "../controladores/Redes.Sociales.controlador.php";
require_once "../modelos/Redes.Sociales.modelo.php";

class AjaxRedesSociales{

	/*=============================================
	EDITAR REDES SOCIALES
	=============================================*/	

	public $idRedes;

	public function ajaxEditarRedesSociales(){

		$item = "id_redes_social";
		$valor = $this->idRedes;

		$respuesta = ControladorRedesSociales::ctrMostrarRedesSociales($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR USUARIO
=============================================*/
if(isset($_POST["idRedes"])){

	$editar = new AjaxRedesSociales();
	$editar -> idRedes = $_POST["idRedes"];
	$editar -> ajaxEditarRedesSociales();

}

