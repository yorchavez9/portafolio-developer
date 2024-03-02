

/*=============================================
EDITAR USUARIO
=============================================*/
$(".tabla_usuario").on("click", ".btnEditarUsuario", function(){

	var idUsuario = $(this).attr("idUsuario");
	
	var datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({

		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#id_usuario").val(respuesta["id_usuario"]);
			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarApellidos").val(respuesta["apellidos"]);
			$("#editarCorreo").val(respuesta["correo"]);
	
			$("#contrasenaActual").val(respuesta["contrasena"]);

		}

	});

})


/*=============================================
ELIMINAR USUARIO
=============================================*/
$(".tabla_usuario").on("click", ".btnEliminarUsuario", function(){

  var idUsuario = $(this).attr("idUsuario");

  Swal.fire({
    title: '¿Está seguro de borrar el usuario?',
    text: "¡Si no lo está puede cancelar la accíón!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar usuario!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=usuarios&idUsuario="+idUsuario;

    }

  })

})




