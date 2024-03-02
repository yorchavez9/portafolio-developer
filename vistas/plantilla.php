<?php 
session_start();

if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

    include "modulos/admin/layouts/head.php";


    include "modulos/admin/layouts/footer.php";
    
}else{
    include "modulos/main/layouts/head.php";

    include "modulos/main/header.php";

    include "modulos/main/main.php";

    include "modulos/main/layouts/footer.php";

}
?>