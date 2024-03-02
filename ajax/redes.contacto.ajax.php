<?php

require_once "../controladores/Redes.contacto.controlador.php";
require_once "../modelos/Redes.contacto.modelo.php";

class AjaxRedesContacto{

	/*=============================================
	EDITAR REDES CONTACTO
	=============================================*/	

	public $idRedesContacto;

	public function ajaxEditarRedesSociales(){

		$item = "id_redes_contacto";
		$valor = $this->idRedesContacto;

		$respuesta = ControladorRedesContacto::ctrMostrarRedesContacto($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR CONTACTO
=============================================*/
if(isset($_POST["idRedesContacto"])){

	$editar = new AjaxRedesContacto();
	$editar -> idRedesContacto = $_POST["idRedesContacto"];
	$editar -> ajaxEditarRedesSociales();

}

