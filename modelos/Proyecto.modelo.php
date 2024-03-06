<?php

require_once "Conexion.php";

class ModeloProyecto{

	/*=============================================
	MOSTRAR PROYECTO
	=============================================*/

	static public function mdlMostrarProyectos($tabla, $item, $valor){

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
	REGISTRO PROYECTO
	=============================================*/

	static public function mdlIngresarProyecto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(titulo, cliente, lenguajes, preview, descripcion, imagen) VALUES (:titulo, :cliente, :lenguajes, :preview, :descripcion, :imagen)");

		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
		$stmt->bindParam(":lenguajes", $datos["lenguajes"], PDO::PARAM_STR);
		$stmt->bindParam(":preview", $datos["preview"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}


		$stmt = null;

	}

	/*=============================================
	EDITAR PROYECTO
	=============================================*/

	static public function mdlEditarProyecto($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
																titulo = :titulo, 
																cliente = :cliente, 
																lenguajes = :lenguajes, 
																preview = :preview, 
																descripcion = :descripcion, 
																imagen = :imagen 
																WHERE id_proyecto = :id_proyecto");

		$stmt -> bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt -> bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
		$stmt -> bindParam(":lenguajes", $datos["lenguajes"], PDO::PARAM_STR);
		$stmt -> bindParam(":preview", $datos["preview"], PDO::PARAM_STR);
		$stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt -> bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_proyecto", $datos["id_proyecto"], PDO::PARAM_INT);


		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;

	}


	/*=============================================
	BORRAR PROYECTO
	=============================================*/

	static public function mdlBorrarProyecto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_proyecto = :id_proyecto");

		$stmt -> bindParam(":id_proyecto", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;


	}

}