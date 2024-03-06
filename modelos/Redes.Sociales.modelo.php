<?php

require_once "Conexion.php";

class ModeloRedesSociales{

	/*=============================================
	MOSTRAR REDES SOCIALES
	=============================================*/

	static public function mdlMostrarRedesSociales($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		



		$stmt = null;

	}

	/*=============================================
	REGISTRO DE REDES SOCIALES
	=============================================*/

	static public function mdlIngresarRedesSociales($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(facebook, twitter, pinterest, youtube, tiktok, linkedin) VALUES (:facebook, :twitter, :pinterest, :youtube, :tiktok, :linkedin)");

		$stmt->bindParam(":facebook", $datos["facebook"], PDO::PARAM_STR);
		$stmt->bindParam(":twitter", $datos["twitter"], PDO::PARAM_STR);
		$stmt->bindParam(":pinterest", $datos["pinterest"], PDO::PARAM_STR);
		$stmt->bindParam(":youtube", $datos["youtube"], PDO::PARAM_STR);
		$stmt->bindParam(":tiktok", $datos["tiktok"], PDO::PARAM_STR);
		$stmt->bindParam(":linkedin", $datos["linkedin"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		
		
		$stmt = null;

	}

	/*=============================================
	EDITAR REDES SOCIALES
	=============================================*/

	static public function mdlEditarRedesSociales($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET facebook = :facebook, twitter = :twitter, pinterest = :pinterest, youtube = :youtube, tiktok = :tiktok, linkedin = :linkedin WHERE id_redes_social = :id_redes_social");

		$stmt -> bindParam(":facebook", $datos["facebook"], PDO::PARAM_STR);
		$stmt -> bindParam(":twitter", $datos["twitter"], PDO::PARAM_STR);
		$stmt -> bindParam(":pinterest", $datos["pinterest"], PDO::PARAM_STR);
		$stmt -> bindParam(":youtube", $datos["youtube"], PDO::PARAM_STR);
		$stmt -> bindParam(":tiktok", $datos["tiktok"], PDO::PARAM_STR);
		$stmt -> bindParam(":linkedin", $datos["linkedin"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_redes_social", $datos["id_redes_social"], PDO::PARAM_INT);


		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;

	}


	/*=============================================
	BORRAR REDES SOCIALES
	=============================================*/

	static public function mdlBorrarRedesSociales($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_redes_social = :id_redes_social");

		$stmt -> bindParam(":id_redes_social", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;


	}

}