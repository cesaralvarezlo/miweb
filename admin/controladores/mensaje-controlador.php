<?php

	class ControladorMensajes{

		/*============================================
		MOSTRAR MENSAJES
		=============================================*/
		static public function ctrMostrarMensaje(){

			$tabla = "mensajes";

			$respuesta = ModeloMensajes::mdlMostrarMensaje($tabla);

			if(!$respuesta){

				echo '<tr class="d-flex justify-content-center">
	
						<td>No hay datos disponible</td>
						
					</tr>';
			}else{

				foreach ($respuesta as $key => $value){

					echo '<tr>
							<td style="font-size: 16px;">
								<a href="index.php?ruta=leer-mensaje&id='.$value["id"].'" title="Ver Mensaje">'.ucfirst($value["autor"]).'</a>
							</td>
							<td style="font-size: 16px;"><b>'.$value["correo"].'</b></td>

							<td class="mailbox-date" style="font-size: 16px;">'.$value["creado"].'</td>
							<td class="text-center">
								<button class="btn btn-danger btn-sm btnEliminarMensaje" idMensaje="'.$value["id"].'"><i class="far fa-trash-alt"></i></button>
							</td>
						</tr>';

				}
			
			}

		}

		/*===========================================
		OBTENER MENSAJE POR ID
		=============================================*/

		static public function ctrObtenerMensajePorId(){

			if(isset($_GET["id"])){

				$tabla = "mensajes";

				$id = $_GET["id"];

				$respuesta = ModeloMensajes::mdlObtenerMensajePorId($tabla, $id);

				return $respuesta;	
			
			}

    	}

    	
    	/*============================================
		BORRAR MENSAJES
		=============================================*/

		static public function ctrBorrarMensaje(){

			if(isset($_GET["idMensaje"])){

				$tabla = "mensajes";
				$datos = $_GET["idMensaje"];

				$respuesta = ModeloMensajes::mdlBorrarMensaje($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						swal({

							type: "success",
							title: "¡El mensaje se ha borrado correctamente!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"

						}).then((result)=>{

							if(result.value){
							
								window.location = "mensaje";

							}

						});
				
					</script>';

				}

			}

		}

    	/*============================================
		MENSAJES SIN REVISAR
		=============================================*/
		static public function ctrMensajeSinRevisar(){

			$tabla = "mensajes";

			$respuesta = ModeloMensajes::mdlMensajeSinRevisar($tabla);

			$sumaRevision = 0;

			foreach ($respuesta as $key => $value) {

				if($value["revision"] == 0){

					++$sumaRevision;

					echo '<span class="badge badge-danger navbar-badge">'.$sumaRevision.'</span>';
				
				}

			}

		}

		/*============================================
		MENSAJES REVISADOS
		=============================================*/
		static public function ctrMensajeRevisado($datos){

			$tabla = "mensajes";

			$datosController = $datos;

			$respuesta = ModeloMensajes::mdlMensajeRevisado($tabla, $datosController);

			echo $respuesta;

		}

		/*=============================================
		CONTAR TODOS LOS MENSAJES
		=============================================*/

	 	static public function ctrContarMensaje(){

	        $tabla = "mensajes";

			$respuesta = ModeloMensajes::mdlContarMensaje($tabla);

			return $respuesta;

		}

	}