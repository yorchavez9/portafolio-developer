<?php

require_once "Conexion.php";

class ModeloPerfil{

	/*=============================================
	MOSTRAR PERFIL
	=============================================*/

	static public function mdlMostrarPerfil($tabla, $item, $valor){

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
	REGISTRO PERFIL
	=============================================*/

	static public function mdlIngresarPerfil($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(cv, foto, nombre, especializacion, descripcion) VALUES (:cv, :foto, :nombre, :especializacion, :descripcion)");

		$stmt->bindParam(":cv", $datos["cv"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":especializacion", $datos["especializacion"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		
		
		$stmt = null;

	}

	/*=============================================
	EDITAR PEFIL
	=============================================*/

	static public function mdlEditarPerfil($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET cv = :cv, foto = :foto, nombre = :nombre, especializacion = :especializacion, descripcion = :descripcion WHERE id_perfil = :id_perfil");

		$stmt -> bindParam(":cv", $datos["cv"], PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":especializacion", $datos["especializacion"], PDO::PARAM_STR);
		$stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_perfil", $datos["id_perfil"], PDO::PARAM_INT);


		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;

	}


	/*=============================================
	BORRAR PEFIL
	=============================================*/

	static public function mdlBorrarPerfil($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_perfil = :id_perfil");

		$stmt -> bindParam(":id_perfil", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;


	}

}