<?php

require_once "../controladores/Perfil.controlador.php";
require_once "../modelos/Perfil.modelo.php";

class AjaxPerfil{

	/*=============================================
	EDITAR PERFIL
	=============================================*/	

	public $idPerfil;

	public function ajaxPerfil(){

		$item = "id_perfil";
		$valor = $this->idPerfil;

		$respuesta = ControladorPerfil::ctrMostrarPerfil($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR CONTACTO
=============================================*/
if(isset($_POST["idPerfil"])){

	$editar = new AjaxPerfil();
	$editar -> idPerfil = $_POST["idPerfil"];
	$editar -> ajaxPerfil();

}

