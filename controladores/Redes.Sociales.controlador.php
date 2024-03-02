<?php

class ControladorRedesSociales
{


    /*=============================================
	REGISTRO DE REDES SOCIALES
	=============================================*/

    static public function ctrCrearRedesSociales()
    {

        if (isset($_POST["facebook"])) {


            $tabla = "redes_sociales";

            $datos = array(
                "facebook" => $_POST["facebook"],
                "twitter" => $_POST["twitter"],
                "pinterest" => $_POST["pinterest"],
                "youtube" => $_POST["youtube"],
                "tiktok" => $_POST["tiktok"],
                "linkedin" => $_POST["linkedin"],
            );

            $respuesta = ModeloRedesSociales::mdlIngresarRedesSociales($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>

					Swal.fire({

						icon: "success",
						title: "¡Han sido guardados correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "redesSociales";

						}

					});
				

					</script>';
            }
        }
    }

    /*=============================================
	MOSTRAR REDES SOCIALES
	=============================================*/

    static public function ctrMostrarRedesSociales($item, $valor)
    {

        $tabla = "redes_sociales";

        $respuesta = ModeloRedesSociales::mdlMostrarRedesSociales($tabla, $item, $valor);

        return $respuesta;
    }

    /*=============================================
	EDITAR REDES SOCIALES
	=============================================*/

    static public function ctrEditarRedesSociales()
    {

        if (isset($_POST["id_redes_social"])) {

                $tabla = "redes_sociales";

                $datos = array(
                    "id_redes_social" => $_POST["id_redes_social"],
                    "facebook" => $_POST["editFacebook"],
                    "twitter" => $_POST["editTwitter"],
                    "pinterest" => $_POST["editPinterest"],
                    "youtube" => $_POST["editYoutube"],
                    "tiktok" => $_POST["editTiktok"],
                    "linkedin" => $_POST["editLinkedin"]
                );

                $respuesta = ModeloRedesSociales::mdlEditarRedesSociales($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

					Swal.fire({
						  icon: "success",
						  title: "Los datos han sido editados con éxito",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "redesSociales";

									}
								})

					</script>';
                }
           
        }
    }

    /*=============================================
	BORRAR REDES SOCIALES
	=============================================*/

    static public function ctrBorrarRedesSociales()
    {

        if (isset($_GET["idRedes"])) {

            $tabla = "redes_sociales";
            $datos = $_GET["idRedes"];


            $respuesta = ModeloRedesSociales::mdlBorrarRedesSociales($tabla, $datos);

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

								window.location = "redesSociales";

								}
							})

				</script>';
            }
        }
    }
}
