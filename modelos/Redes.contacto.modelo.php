<?php

require_once "conexion.php";

class ModeloRedesContacto{

	/*=============================================
	MOSTRAR REDES CONTACRTO
	=============================================*/

	static public function mdlMostrarRedesContacto($tabla, $item, $valor){

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
	REGISTRO DE REDES CONTACTO
	=============================================*/

	static public function mdlIngresarRedesContacto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(telefono, correo, whatsapp, github, direccion) VALUES (:telefono, :correo, :whatsapp, :github, :direccion)");

		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":whatsapp", $datos["whatsapp"], PDO::PARAM_STR);
		$stmt->bindParam(":github", $datos["github"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		
		
		$stmt = null;

	}

	/*=============================================
	EDITAR REDES CONTACTO
	=============================================*/

	static public function mdlEditarRedesContacto($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET telefono = :telefono, correo = :correo, whatsapp = :whatsapp, github = :github, direccion = :direccion WHERE id_redes_contacto = :id_redes_contacto");

		$stmt -> bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt -> bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt -> bindParam(":whatsapp", $datos["whatsapp"], PDO::PARAM_STR);
		$stmt -> bindParam(":github", $datos["github"], PDO::PARAM_STR);
		$stmt -> bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_redes_contacto", $datos["id_redes_contacto"], PDO::PARAM_INT);


		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;

	}


	/*=============================================
	BORRAR REDES CONTACTO
	=============================================*/

	static public function mdlBorrarRedesContacto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_redes_contacto = :id_redes_contacto");

		$stmt -> bindParam(":id_redes_contacto", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;


	}

}