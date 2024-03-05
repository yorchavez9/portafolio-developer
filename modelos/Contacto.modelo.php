<?php

require_once "conexion.php";

class ModeloContactoMsg{

	/*=============================================
	MOSTRAR CONTACTO MENSAJE
	=============================================*/

	static public function mdlMostrarContactoMsg($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id_contacto DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		



		$stmt = null;

	}

	/*=============================================
	REGISTRO DE MENSAJE DE CONTACTO
	=============================================*/

	static public function mdlIngresarContactoMsg($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, correo, mensaje) VALUES (:nombre, :correo, :mensaje)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		
		
		$stmt = null;

	}

	/*=============================================
	BORRAR MENSAJE CONTACTO
	=============================================*/

	static public function mdlBorrarContactoMsg($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_contacto = :id_contacto");

		$stmt -> bindParam(":id_contacto", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;


	}

}