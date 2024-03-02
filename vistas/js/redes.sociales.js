

/*=============================================
EDITAR REDES SOCIALES
=============================================*/
$(".tabla_redes").on("click", ".btnEditarRedes", function(){

	var idRedes = $(this).attr("idRedes");

	
	var datos = new FormData();
	datos.append("idRedes", idRedes);

	$.ajax({

		url:"ajax/redes.sociales.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#id_redes_social").val(respuesta["id_redes_social"]);
			$("#editfacebook").val(respuesta["facebook"]);
			$("#edittwitter").val(respuesta["twitter"]);
			$("#editpinterest").val(respuesta["pinterest"]);
			$("#edityoutube").val(respuesta["youtube"]);
			$("#edittiktok").val(respuesta["tiktok"]);
			$("#editlinkedin").val(respuesta["linkedin"]);
	

		}

	});

})


/*=============================================
ELIMINAR REDES SOCIALES
=============================================*/
$(".tabla_redes").on("click", ".btnEliminarRedes", function(){

  var idRedes = $(this).attr("idRedes");

  Swal.fire({
    title: '¿Está seguro de borrar los datos?',
    text: "¡Si no lo está puede cancelar la accíón!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar los datos!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=redesSociales&idRedes="+idRedes;

    }

  })

})




