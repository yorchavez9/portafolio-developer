

/*=============================================
EDITAR REDES DE CONTACTO
=============================================*/
$(".tabla_redes_contacto").on("click", ".btnEditarRedesContacto", function(){

	var idRedesContacto = $(this).attr("idRedesContacto");

	
	var datos = new FormData();
	datos.append("idRedesContacto", idRedesContacto);

	$.ajax({

		url:"ajax/redes.contacto.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#id_redes_contacto").val(respuesta["id_redes_contacto"]);
			$("#editTelefono").val(respuesta["telefono"]);
			$("#editCorreo").val(respuesta["correo"]);
			$("#editWhatsapp").val(respuesta["whatsapp"]);
			$("#editGithub").val(respuesta["github"]);
			$("#editDireccion").val(respuesta["direccion"]);

	

		}

	});

})


/*=============================================
ELIMINAR REDES DE NCONTACTO
=============================================*/
$(".tabla_redes_contacto").on("click", ".btnEliminarRedesContacto", function(){

  var idRedesContacto = $(this).attr("idRedesContacto");

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

      window.location = "index.php?ruta=redesContacto&idRedesContacto="+idRedesContacto;

    }

  })

})




