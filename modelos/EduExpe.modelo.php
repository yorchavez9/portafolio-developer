<?php

require_once "conexion.php";

class ModeloEduExpe{

	/*=============================================
	MOSTRAR EDUCACION EXPERIENCIA
	=============================================*/

	static public function mdlMostrarEduExpe($tabla, $item, $valor){

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
	REGISTRO DE EDUCACION O EXPETIENCIA
	=============================================*/

	static public function mdlIngresarEduExpe($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(tipo, titulo, lugar, descripcion, fecha) VALUES (:tipo, :titulo, :lugar, :descripcion, :fecha)");

		$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":lugar", $datos["lugar"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		
		
		$stmt = null;

	}

	/*=============================================
	EDITAR EXPERIENCIA O EDUCACION
	=============================================*/

	static public function mdlEditarEduExpe($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
                                                                tipo = :tipo, 
                                                                titulo = :titulo, 
                                                                lugar = :lugar, 
                                                                descripcion = :descripcion, 
                                                                fecha = :fecha
                                                                WHERE id_exp_edu = :id_exp_edu");

		$stmt -> bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt -> bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt -> bindParam(":lugar", $datos["lugar"], PDO::PARAM_STR);
		$stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_exp_edu", $datos["id_exp_edu"], PDO::PARAM_INT);


		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;

	}


	/*=============================================
	BORRAR EDUCACION O EXPERIENCIA
	=============================================*/

	static public function mdlBorrarEduExpe($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_exp_edu = :id_exp_edu");

		$stmt -> bindParam(":id_exp_edu", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

	

		$stmt = null;


	}

}