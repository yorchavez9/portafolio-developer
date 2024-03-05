<?php
class ControladorProyecto
{


    /* =============================
    MOSTRAR PROYECTO
    ============================= */

    static public function ctrMostrarProyecto($item, $valor)
    {

        $tabla = "proyectos";

        $respuesta = ModeloProyecto::mdlMostrarProyectos($tabla, $item, $valor);

        return $respuesta;
    }

    /* =============================
    REGISTRO DE PROYECTO
    ============================= */

    static public function ctrCrearProyecto()
    {

        if (isset($_POST["titulo"])) {

            if (!empty($_POST["titulo"])) {


                /* ============================
                        VALIDANDO IMAGEN
                    ============================ */

                $ruta = "vistas/img/imagen/";

                if (isset($_FILES["imagen"]["tmp_name"])) {

                    $extension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);

                    $tipos_permitidos = array("jpg", "jpeg", "png");

                    if (in_array(strtolower($extension), $tipos_permitidos)) {

                        $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                        $ruta_imagen = $ruta . $nombre_imagen . "." . $extension;

                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_imagen)) {

                            echo "path_imagen subida correctamente.";
                        } else {

                            echo "Error al subir la imagen.";
                        }
                    } else {

                        echo "Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF.";
                    }
                }


                $tabla = "proyectos";


                $datos = array(
                    "titulo" => $_POST["titulo"],
                    "cliente" => $_POST["cliente"],
                    "lenguajes" => $_POST["lenguajes"],
                    "preview" => $_POST["preview"],
                    "descripcion" => $_POST["descripcion"],
                    "imagen" => $ruta_imagen
                );

                $respuesta = ModeloProyecto::mdlIngresarProyecto($tabla, $datos);

                if($respuesta == "ok"){
                    echo
                    '<script>
            
                            Swal.fire({
                                icon: "success",
                                title: "¡Los datos se guardaron con éxitos!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then(function(result) {
                                if (result.value) {
            
                                    window.location = "proyectos";
            
                                }
                            })
            
                    </script>';


                }
                
            } else {
                echo
                '<script>
        
                        Swal.fire({
                            icon: "error",
                            title: "¡El nombre del usuario no puede llevar caracteres espciales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result) {
                            if (result.value) {
        
                                window.location = "perfil";
        
                            }
                        })
        
                </script>';
            }
        }
    }

    /* =============================
    EDITAR PROYECTO
    ============================= */

    static public function ctrEditarProyecto()
    {

        if (isset($_POST["id_proyecto"])) {

            if (preg_match('/^[a-zA-Z0-9áéíóúÁÉÍÓÚüÜ\s,.\']+$/u', $_POST["id_proyecto"])) {


                /* ============================
                    VALIDANDO IMAGEN
                ============================ */

                $ruta = "vistas/img/imagen/";

                $ruta_img = $_POST["imagenActual"];

                if (isset($_FILES["editImagen"]["tmp_name"]) && !empty($_FILES["editImagen"]["tmp_name"])) {

                    if (file_exists($ruta_img)) {
                        unlink($ruta_img);
                    }

                    $extension = pathinfo($_FILES["editImagen"]["name"], PATHINFO_EXTENSION);

                    $tipos_permitidos = array("jpg", "jpeg", "png");

                    if (in_array(strtolower($extension), $tipos_permitidos)) {

                        $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                        $ruta_img = $ruta . $nombre_imagen . "." . $extension;

                        if (move_uploaded_file($_FILES["editImagen"]["tmp_name"], $ruta_img)) {

                            echo "path_imagen subida correctamente.";
                        } else {

                            echo "Error al subir la imagen.";
                        }
                    } else {

                        echo "Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF.";
                    }
                }


                $tabla = "proyectos";



                $datos = array(
                    "id_proyecto" => $_POST["id_proyecto"],
                    "titulo" => $_POST["editTitulo"],
                    "cliente" => $_POST["editCliente"],
                    "lenguajes" => $_POST["editLenguajes"],
                    "preview" => $_POST["editPreview"],
                    "descripcion" => $_POST["editDescripcion"],
                    "imagen" => $ruta_img
                );

                $respuesta = ModeloProyecto::mdlEditarProyecto($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>
    
                        Swal.fire({
                              icon: "success",
                              title: "Los datos han sido editados correctamente",
                              showConfirmButton: true,
                              confirmButtonText: "Cerrar"
                              }).then(function(result) {
                                        if (result.value) {
    
                                        window.location = "proyectos";
    
                                        }
                                    })
    
                        </script>';
                }
            }
        }
    }


    /*  =========================
    BORRAR PROYECTO
    ========================= */
    static public function ctrBorrarProyecto()
    {

        if (isset($_GET["idProyecto"])) {

            $tabla = "proyectos";

            $datos = $_GET["idProyecto"];

            if ($_GET["imagen"] != "") {

                unlink($_GET["imagen"]);
                rmdir($_GET["imagen"]);
            }
            

            $respuesta = ModeloProyecto::mdlBorrarProyecto($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>

				Swal.fire({
					  type: "success",
					  title: "El perfil ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "proyectos";

								}
							})

				</script>';
            }
        }
    }
}
