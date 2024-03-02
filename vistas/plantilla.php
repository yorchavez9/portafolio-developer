<?php 
session_start();

if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

    include "modulos/admin/layouts/head.php";

    echo '<div id="main-wrapper">';

        include "modulos/admin/navHeader.php";

        include "modulos/admin/chatBox.php";

        include "modulos/admin/header.php";

        include "modulos/admin/sidebar.php";

        /* ===============
        CONTENIDO
        =============== */
        if(isset($_GET["ruta"])){

            if($_GET["ruta"] == "inicio" ||
               $_GET["ruta"] == "usuarios" ||
               $_GET["ruta"] == "redesSociales" ||
               $_GET["ruta"] == "salir"){
      
              include "modulos/admin/".$_GET["ruta"].".php";
      
            }else{
      
              include "modulos/admin/404.php";
      
            }
      
          }else{
      
            include "modulos/admin/inicio.php";
      
          }

    echo '</div>';

    include "modulos/admin/layouts/footer.php";
    
}else{
    include "modulos/main/layouts/head.php";

    include "modulos/main/header.php";

    include "modulos/main/main.php";

    include "modulos/main/layouts/footer.php";

}
?>