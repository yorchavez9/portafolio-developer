<?php

class ControladorRedesContacto
{


    /*=============================================
	REGISTRO DE REDES DE CONTACTO
	=============================================*/

    static public function ctrCrearRedesContacto()
    {

        if (isset($_POST["telefono"])) {


            $tabla = "redes_contactos";

            $datos = array(
                "telefono" => $_POST["telefono"],
                "correo" => $_POST["correo"],
                "pinterest" => $_POST["pinterest"],
                "whatsapp" => $_POST["whatsapp"],
                "github" => $_POST["github"],
                "direccion" => $_POST["direccion"],
            );

            $respuesta = ModeloRedesContacto::mdlIngresarRedesContacto($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>

					Swal.fire({

						icon: "success",
						title: "¡Han sido guardados correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "redesContacto";

						}

					});
				

					</script>';
            }
        }
    }

    /*=============================================
	MOSTRAR REDES CONTACTO
	=============================================*/

    static public function ctrMostrarRedesContacto($item, $valor)
    {

        $tabla = "redes_contactos";

        $respuesta = ModeloRedesContacto::mdlMostrarRedesContacto($tabla, $item, $valor);

        return $respuesta;
    }

    /*=============================================
	EDITAR REDES CONTACTO
	=============================================*/

    static public function ctrEditarRedesContacto()
    {

        if (isset($_POST["id_redes_contacto"])) {

                $tabla = "redes_contactos";

                $datos = array(
                    "id_redes_contacto" => $_POST["id_redes_contacto"],
                    "telefono" => $_POST["editTelefono"],
                    "correo" => $_POST["editCorreo"],
                    "whatsapp" => $_POST["editWhatsapp"],
                    "github" => $_POST["editGithub"],
                    "direccion" => $_POST["editDireccion"]
                );

                $respuesta = ModeloRedesContacto::mdlEditarRedesContacto($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

					Swal.fire({
						  icon: "success",
						  title: "Los datos han sido editados con éxito",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "redesContacto";

									}
								})

					</script>';
                }
           
        }
    }

    /*=============================================
	BORRAR REDES CONTACTO
	=============================================*/

    static public function ctrBorrarRedesContacto()
    {

        if (isset($_GET["idRedesContacto"])) {

            $tabla = "redes_contactos";
            $datos = $_GET["idRedesContacto"];


            $respuesta = ModeloRedesContacto::mdlBorrarRedesContacto($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>

				Swal.fire({
					  icon: "success",
					  title: "Los datos han sido borrados correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "redesContacto";

								}
							})

				</script>';
            }
        }
    }
}
