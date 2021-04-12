/*=============================================
SUBIENDO LA FOTO DEL USUARIO
=============================================*/
$(".fotoUser").on("change", function(){

	var imagen = this.files[0];
	
	/*=======VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG=======*/
  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

  		$(".nuevaFoto").val("");

  		swal({
		    title: "Error al subir la imagen",
		    text: "¡La imagen debe estar en formato JPG o PNG!",
		    type: "error",
		    confirmButtonText: "¡Cerrar!"
		});

  	}else if(imagen["size"] > 500000){

  		$(".nuevaFoto").val("");

  		swal({
		    title: "Error al subir la imagen",
		    text: "¡La imagen no debe pesar más de 500kb!",
		    type: "error",
		    confirmButtonText: "¡Cerrar!"
		});

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$(".previsualizar").attr("src", rutaImagen);

  		})

      }
      
});

/*=============================================
EDITAR USUARIO
=============================================*/

$(".btnEditarUsuario").on("click", function(){

	var idUsuario = $(this).attr("idUsuario");
	
	var datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({

		url:"ajax/usuario-ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
        dataType: "json",
    
    })
    .done(function(respuesta){

        $("#editarNombre").val(respuesta["nombre"]);
        $("#editarUsuario").val(respuesta["usuario"]);
        $("#fotoActual").val(respuesta["foto"]);
        $("#passwordActual").val(respuesta["password"]);

        if(respuesta["foto"] != ""){

            $(".previsualizar").attr("src", respuesta["foto"]);

        }

    });   

});

/*=============================================
ACTIVAR USUARIO
=============================================*/
$(document).on("click", ".btnActivarUsuario", function(){

	var idUsuario = $(this).attr("idUsuario");
	var estadoUsuario = $(this).attr("estadoUsuario");

	var datos = new FormData();
 	datos.append("idUsuario", idUsuario);
  	datos.append("estadoUsuario", estadoUsuario);

  	$.ajax({

	    url:"ajax/usuario-ajax.php",
	    method: "POST",
	    data: datos,
	    cache: false,
        contentType: false,
        processData: false,

    })
    .done(function(){

    });

  	if(estadoUsuario == 0){

  		$(this).removeClass('badge-success');
  		$(this).addClass('badge-danger');
  		$(this).html('Desactivado');
  		$(this).attr('estadoUsuario',1);

  	}else{

  		$(this).addClass('badge-success');
  		$(this).removeClass('badge-danger');
  		$(this).html('Activado');
  		$(this).attr('estadoUsuario',0);

  	}

});

/*=============================================
REVISAR SI EL USUARIO YA ESTÁ REGISTRADO
=============================================*/

$("#nuevoUsuario").on("change", function(){

    $(".alert").remove();

    var usuario = $(this).val();

    var datos = new FormData();
    datos.append("validarUsuario", usuario);

    $.ajax({
        url:"ajax/usuario-ajax.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
    })
    .done(function(respuesta){
            
        if(respuesta){

            $("#nuevoUsuario").parent().after('<div class="alert alert-warning">Este usuario ya existe en la base de datos</div>');

            $("#nuevoUsuario").val("");

        }

    });

});

/*============================================
ELIMINAR USUARIO
=============================================*/

$(document).on("click", ".btnEliminarUsuario", function(){

    var idUsuario = $(this).attr("idUsuario");
    var fotoUsuario = $(this).attr("fotoUsuario");
	var usuario = $(this).attr("usuario");

    swal({

        title: '¿Está seguro de borrar el usuario?',
        text: "¡Si no lo está puede cancelar la accíón!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar usuario!'
		
    }).then((result)=>{

        if(result.value){
			
			window.location = "index.php?ruta=usuario&idUsuario="+idUsuario+"&usuario="+usuario+"&fotoUsuario="+fotoUsuario;

        }

    })

});





