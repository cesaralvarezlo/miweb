/*=============================================
ELIMINAR MENSAJE
=============================================*/

$(document).on("click", ".btnEliminarMensaje", function(){

    var idMensaje = $(this).attr("idMensaje");

    swal({
        
        title: '¿Está seguro de borrar?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar!'

    }).then((result)=>{

        if(result.value){

            window.location = "index.php?ruta=mensaje&idMensaje="+idMensaje;

        }

    })

});




