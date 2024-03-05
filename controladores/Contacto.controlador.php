<?php

class ControladorContactoMsg
{

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function ctrCrearContactoMsg()
	{

		if (isset($_POST["nombre"])) {

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre"])) {

				$tabla = "contactos";


				$datos = array(
					"nombre" => $_POST["nombre"],
					"correo" => $_POST["correo"],
					"mensaje" => $_POST["mensaje"]
				);

				$respuesta = ModeloContactoMsg::mdlIngresarContactoMsg($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Enviado con éxito",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function(result){

                            if(result.value){
                            
                                window.location = "ingreso";
    
                            }
    
                        });		

					</script>';
				}
			} else {

				echo '<script>

				Swal.fire({

						icon: "error",
						title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "ingreso";

						}

					});
				

				</script>';
			}
		}
	}

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarContactoMsg($item, $valor)
	{

		$tabla = "contactos";

		$respuesta = ModeloContactoMsg::MdlMostrarContactoMsg($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function ctrBorrarContactoMsg()
	{

		if (isset($_GET["idContactoMsg"])) {

			$tabla = "contactos";
			$datos = $_GET["idContactoMsg"];


			$respuesta = ModeloContactoMsg::mdlBorrarContactoMsg($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

				Swal.fire({
					  icon: "success",
					  title: "El mensaje ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "contactoMsg";

								}
							})

				</script>';
			}
		}
	}
}
