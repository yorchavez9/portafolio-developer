

/*=============================================
ELIMINAR USUARIO
=============================================*/
$(".tabla_contacto_msg").on("click", ".btnEliminarContactoMsg", function(){

  var idContactoMsg = $(this).attr("idContactoMsg");

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

      window.location = "index.php?ruta=contactoMsg&idContactoMsg="+idContactoMsg;

    }

  })

})




