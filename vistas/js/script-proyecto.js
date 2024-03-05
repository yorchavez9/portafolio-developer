/*=============================================
SUBIENDO LA IMAGEN DEL PROYECTO
=============================================*/
$("#nuevoImagen").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png" && imagen["type"] != "image/jpg"){

  		$("#nuevoImagen").val("");

  		 Swal.fire({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG, PNG o JPEG!",
		      icon: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 2000000){

  		$("#nuevoImagen").val("");

  		 Swal.fire({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      icon: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$("#nuevoImagenPreview").attr("src", rutaImagen);

  		})

  	}
})


/* SUBIENDO IMAGEN EDITANDO */

$("#editImagen").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png" && imagen["type"] != "image/jpg"){

  		$("#editImagen").val("");

  		 Swal.fire({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG, PNG o JPEG!",
		      icon: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 2000000){

  		$("#editImagen").val("");

  		 Swal.fire({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      icon: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$("#editImagenPreview").attr("src", rutaImagen);

  		})

  	}
})



/*=============================================
EDITAR PROYECTO
=============================================*/
$(".tabla_proyecto").on("click", ".btnEditarProyecto", function(){

	var idProyecto = $(this).attr("idProyecto");

	
	var datos = new FormData();
	datos.append("idProyecto", idProyecto);

	$.ajax({

		url:"ajax/proyecto.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#id_proyecto").val(respuesta["id_proyecto"]);
			$("#editTitulo").val(respuesta["titulo"]);
			$("#editCliente").val(respuesta["cliente"]);
			$("#editLenguajes").val(respuesta["lenguajes"]);
			$("#editPreview").val(respuesta["preview"]);
			$("#editDescripcion").val(respuesta["descripcion"]);
			$("#imagenActual").val(respuesta["imagen"]);

      if(respuesta["imagen"] != null){
        $("#editImagenPreview").attr("src", respuesta["imagen"]);
      }
		
		}

	});

})


/*=============================================
ELIMINAR PROYECTO
=============================================*/
$(".tabla_proyecto").on("click", ".btnEliminarProyecto", function () {

	
    var idProyecto = $(this).attr("idProyecto");
    var imagen = $(this).attr("imagen");


    Swal.fire({
      title: "¿Está seguro de borrar el proyecto?",
      text: "¡Si no lo está puede cancelar la accíón!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "Si, borrar proyecto!",
    }).then(function (result) {
      if (result.value) {
        window.location =
          "index.php?ruta=proyectos&idProyecto=" +
          idProyecto +
          "&imagen=" +
          imagen;
      }
    });
  });



