<?php
class ControladorPerfil
{


    /* =============================
    MOSTRAR PERFIL
    ============================= */

    static public function ctrMostrarPerfil($item, $valor)
    {

        $tabla = "perfil";

        $respuesta = ModeloPerfil::mdlMostrarPerfil($tabla, $item, $valor);

        return $respuesta;
    }

    /* =============================
    REGISTRO DE PERFIL
    ============================= */

    static public function ctrCrearPerfil()
    {

        if (isset($_POST["nombre"])) {

            if (!empty($_POST["nombre"])) {


                /* ============================
                        VALIDANDO IMAGEN
                    ============================ */

                $ruta = "vistas/img/foto/";

                if (isset($_FILES["foto"]["tmp_name"])) {

                    $extension = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);

                    $tipos_permitidos = array("jpg", "jpeg", "png");

                    if (in_array(strtolower($extension), $tipos_permitidos)) {

                        $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                        $ruta_imagen = $ruta . $nombre_imagen . "." . $extension;

                        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta_imagen)) {

                            echo "path_imagen subida correctamente.";
                        } else {

                            echo "Error al subir la imagen.";
                        }
                    } else {

                        echo "Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF.";
                    }
                }



                /* ================================
                VALIDANDO ARCHIVO
                ================================ */

                if (isset($_FILES["cv"]["tmp_name"]) && !empty($_FILES["cv"]["tmp_name"])) {
                    $tamaño_maximo = 20 * 1024 * 1024; // 20 MB en bytes
                
                    if ($_FILES["cv"]["size"] > $tamaño_maximo) {
                        echo
                        '<script>
                
                                Swal.fire({
                                    icon: "error",
                                    title: "¡El tamño del archivos es muy grande!",
                                    text: "El tamaño del archivo excede los 20 MB permitidos.",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar"
                                }).then(function(result) {
                                    if (result.value) {
                
                                        window.location = "perfil";
                
                                    }
                                })
                
                        </script>';
                        
                    } else {
                        // El tamaño del archivo es aceptable
                        // Procede con el procesamiento del archivo
                    }
                }

                $ruta = "vistas/archivo/";

                if (isset($_FILES["cv"]["tmp_name"])) {
                    $extension = pathinfo($_FILES["cv"]["name"], PATHINFO_EXTENSION);

                    $tipos_permitidos = array("pdf", "doc", "docx");

                    if (in_array(strtolower($extension), $tipos_permitidos)) {
                        $nombre_archivo = date("YmdHis") . rand(1000, 9999);

                        $ruta_archivo = $ruta . $nombre_archivo . "." . $extension;

                        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $ruta_archivo)) {
                            echo "Archivo subido correctamente.";
                        } else {
                            echo "Error al subir el archivo.";
                        }
                    } else {
                        echo "Solo se permiten archivos PDF, DOC, DOCX.";
                    }
                }



                $tabla = "perfil";


                $datos = array(
                    "cv" => $ruta_archivo,
                    "foto" => $ruta_imagen,
                    "nombre" => $_POST["nombre"],
                    "especializacion" => $_POST["especializacion"],
                    "descripcion" => $_POST["descripcion"]
                );

                $respuesta = ModeloPerfil::mdlIngresarPerfil($tabla, $datos);

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
            
                                    window.location = "perfil";
            
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
    EDITAR Perfil
    ============================= */

    static public function ctrEditarPerfil()
    {

        if (isset($_POST["editNombre"])) {

            if (preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚüÜ\s,.\']+$/u', $_POST["editNombre"])) {


                /* ============================
                    VALIDANDO IMAGEN
                ============================ */

                $ruta = "vistas/img/foto/";

                $ruta_img = $_POST["fotoActual"];

                if (isset($_FILES["editFoto"]["tmp_name"]) && !empty($_FILES["editFoto"]["tmp_name"])) {

                    if (file_exists($ruta_img)) {
                        unlink($ruta_img);
                    }

                    $extension = pathinfo($_FILES["editFoto"]["name"], PATHINFO_EXTENSION);

                    $tipos_permitidos = array("jpg", "jpeg", "png");

                    if (in_array(strtolower($extension), $tipos_permitidos)) {

                        $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                        $ruta_img = $ruta . $nombre_imagen . "." . $extension;

                        if (move_uploaded_file($_FILES["editFoto"]["tmp_name"], $ruta_img)) {

                            echo "path_imagen subida correctamente.";
                        } else {

                            echo "Error al subir la imagen.";
                        }
                    } else {

                        echo "Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF.";
                    }
                }


                /* ============================
                    VALIDANDO ARCHIVO
                ============================ */

                $ruta = "vistas/archivo/";

                $ruta_archivo = $_POST["cvActual"];

                if (isset($_FILES["editCv"]["tmp_name"]) && !empty($_FILES["editCv"]["tmp_name"])) {

                    if (file_exists($ruta_archivo)) {
                        unlink($ruta_archivo);
                    }

                    $extension = pathinfo($_FILES["editCv"]["name"], PATHINFO_EXTENSION);

                    $tipos_permitidos = array("pdf", "doc", "docx");

                    if (in_array(strtolower($extension), $tipos_permitidos)) {

                        $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                        $ruta_archivo = $ruta . $nombre_imagen . "." . $extension;

                        if (move_uploaded_file($_FILES["editCv"]["tmp_name"], $ruta_archivo)) {

                            echo "Archivo subida correctamente.";
                        } else {

                            echo "Error al subir la imagen.";
                        }
                    } else {

                        echo "Solo se permiten archivos de imagen JPG, JPEG, PNG.";
                    }
                }


                $tabla = "perfil";



                $datos = array(
                    "id_perfil" => $_POST["id_perfil"],
                    "foto" => $ruta_img,
                    "cv" => $ruta_archivo,
                    "nombre" => $_POST["editNombre"],
                    "especializacion" => $_POST["editEspecializacion"],
                    "descripcion" => $_POST["editDescripcion"]
                );

                $respuesta = ModeloPerfil::mdlEditarPerfil($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>
    
                        Swal.fire({
                              icon: "success",
                              title: "Los datos han sido editados correctamente",
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
    }


    /*  =========================
    BORRAR PERFIL
    ========================= */
    static public function ctrBorrarPerfil()
    {

        if (isset($_GET["idPerfil"])) {

            $tabla = "perfil";

            $datos = $_GET["idPerfil"];

            if ($_GET["foto"] != "") {

                unlink($_GET["foto"]);
                rmdir($_GET["foto"]);
            }
            if ($_GET["cv"] != "") {

                unlink($_GET["cv"]);
                rmdir($_GET["cv"]);
            }

            $respuesta = ModeloPerfil::mdlBorrarPerfil($tabla, $datos);

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

								window.location = "perfil";

								}
							})

				</script>';
            }
        }
    }
}
