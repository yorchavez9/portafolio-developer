

/*=============================================
EDITAR PROYECTO
=============================================*/
$(".content_perfil").on("click", ".btnEditarPerfil", function(){

	var idPerfil = $(this).attr("idPerfil");

	
	var datos = new FormData();
	datos.append("idPerfil", idPerfil);

	$.ajax({

		url:"ajax/perfil.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#id_perfil").val(respuesta["id_perfil"]);
			$("#editNombre").val(respuesta["nombre"]);
			$("#editEspecializacion").val(respuesta["especializacion"]);
			$("#fotoActual").val(respuesta["foto"]);
			$("#cvActual").val(respuesta["cv"]);
			$("#editDescripcion").val(respuesta["descripcion"]);
		
		}

	});

})


/*=============================================
ELIMINAR PROYECTO
=============================================*/
$(".content_perfil").on("click", ".btnEliminarPerfil", function () {

    var idPerfil = $(this).attr("idPerfil");
    var foto = $(this).attr("foto");
    var cv = $(this).attr("cv");


    Swal.fire({
      title: "¿Está seguro de borrar el perfil?",
      text: "¡Si no lo está puede cancelar la accíón!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "Si, borrar perfil!",
    }).then(function (result) {
      if (result.value) {
        window.location =
          "index.php?ruta=perfil&idPerfil=" +
          idPerfil +
          "&foto=" +
          foto +
          "&cv=" +
          cv;
      }
    });
  });



