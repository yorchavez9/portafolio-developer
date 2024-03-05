

/*=============================================
EDITAR USUARIO
=============================================*/
$(".tabla_edu_expe").on("click", ".btnEditarEduExpe", function(){



	var idEduExpe = $(this).attr("idEduExpe");
	
	var datos = new FormData();
	datos.append("idEduExpe", idEduExpe);

	$.ajax({

		url:"ajax/eduExpe.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#id_exp_edu").val(respuesta["id_exp_edu"]);
			$("#editTipo").val(respuesta["tipo"]);
			$("#editTitulo").val(respuesta["titulo"]);
			$("#editDescripcion").val(respuesta["descripcion"]);
			$("#editFecha").val(respuesta["fecha"]);

		}

	});

})


/*=============================================
ELIMINAR USUARIO
=============================================*/
$(".tabla_edu_expe").on("click", ".btnEliminarEduExpe", function(){

  var idEduExpe = $(this).attr("idEduExpe");

  Swal.fire({
    title: '¿Está seguro de borrar?',
    text: "¡Si no lo está puede cancelar la accíón!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=eduExpe&idEduExpe="+idEduExpe;

    }

  })

})




