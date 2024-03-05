<?php

class ControladorEduExpe
{


    /*=============================================
	REGISTRO DE EDUCACION O EXPERIENCIA
	=============================================*/

    static public function ctrCrearEduExpe()
    {

        if (isset($_POST["tipo"])) {


            $tabla = "experiencia_educacion";


            $datos = array(
                "tipo" => $_POST["tipo"],
                "titulo" => $_POST["titulo"],
                "lugar" => $_POST["lugar"],
                "descripcion" => $_POST["descripcion"],
                "fecha" => $_POST["fecha"]
            );

            $respuesta = ModeloEduExpe::mdlIngresarEduExpe($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>

					Swal.fire({

						icon: "success",
						title: "¡El dato ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "eduExpe";

						}

					});
				

					</script>';
            }
        }
    }

	/*=============================================
	MOSTRAR EDUCACION O EXPERIENCIA
	=============================================*/

	static public function ctrMostrarEduExpe($item, $valor)
	{

		$tabla = "experiencia_educacion";

		$respuesta = ModeloEduExpe::mdlMostrarEduExpe($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR EDUCACION O EXPETIENCIA
	=============================================*/

	static public function ctrEditarEduExpe()
	{

		if (isset($_POST["id_exp_edu"])) {

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["id_exp_edu"])) {


				$tabla = "experiencia_educacion";

				

				$datos = array(
					"id_exp_edu" => $_POST["id_exp_edu"],
					"tipo" => $_POST["editTipo"],
					"titulo" => $_POST["editTitulo"],
					"lugar" => $_POST["editLugar"],
					"descripcion" => $_POST["editDescripcion"],
					"fecha" => $_POST["editFecha"]
					);
                    

				$respuesta = ModeloEduExpe::mdlEditarEduExpe($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					Swal.fire({
						  icon: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "eduExpe";

									}
								})

					</script>';
				}
			}
		}
	}

	/*=============================================
	BORRAR EDUCACION O EXPETIENCIA
	=============================================*/

	static public function ctrBorrarEduExpe()
	{

		if (isset($_GET["idEduExpe"])) {

			$tabla = "experiencia_educacion";
			$datos = $_GET["idEduExpe"];


			$respuesta = ModeloEduExpe::mdlBorrarEduExpe($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

				Swal.fire({
					  icon: "success",
					  title: "El dato ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "eduExpe";

								}
							})

				</script>';
			}
		}
	}
}
