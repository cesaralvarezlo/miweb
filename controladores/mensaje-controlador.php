<?php

	class ControladorMensajes {

		/*===========================================
		CREAR MENSAJES
		=============================================*/

		static public function ctrCrearMensajes(){

			$tabla = "mensajes";

			if(isset($_POST["nuevoNombre"])){

				if(preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙÑñ\s]+$/', $_POST["nuevoNombre"]) &&
				   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) &&
				   preg_match('/^[a-zA-Z0-9áéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙÑñ\s\.,]+$/', $_POST["nuevoMensaje"])){

				   	#ENVIAR AL CORREO ELECTRONICO EL MENSAJE
					$correoDestino = "cesalvarez25@gmail.com";
					$asunto = "Correo desde mi web";
					$mensaje = "<html>
									<head>
										<title>Email Recibido</title>
									</head>
									<body>
										<p>======================================</p>
										<h2>Enviado por: " . $_POST["nuevoNombre"] . "</h2>
										<p><b>E-mail:</b> " . $_POST["nuevoEmail"] . "</p>
										<p><b>Teléfono:</b> " . $_POST["nuevoTelefono"] . "</p>
										<p><b>Mensaje:</b> " . $_POST["nuevoMensaje"] . "</p>
										<p>======================================</p>
									</body>
								</html>";

					$cabecera = "From: " . $_POST["nuevoEmail"] . "\r\n";
					$cabecera .= "MIME-Version: 1.0" . "\r\n";
					$cabecera .= "Content-type: text/html;charset=utf-8" . "\r\n";

					$envio = mail($correoDestino, $asunto, $mensaje, $cabecera);

					#ALMACENAR EN LA BASE DE DATOS EL MENSAJE
					$telefono = (!empty($_POST['nuevoTelefono'])) ? $_POST['nuevoTelefono'] : 'Desconocido';

					$datos = array("autor"=>$_POST["nuevoNombre"],
									"correo"=>$_POST["nuevoEmail"],
									"telefono"=>$telefono,
									"mensaje"=>$_POST["nuevoMensaje"]);
					
					$respuesta = ModelosMensajes::mdlCrearMensajes($tabla, $datos);
					
					#$envio == true && $respuesta == "ok"

					if($respuesta == "ok"){

						echo '<script>

                            swal({

                                type: "success",
                                title: "¡Exito!",
                                text: "El mensaje ha sido enviado correctamente.",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                                
                            }).then((result) => {

                                if (result.value) {

                                    window.location = "contactos";

                                }
                            })

						</script>';
					}

				}else{

					echo '<script>

                        swal({

                            type: "error",
                            title: "Ocurrió un error",
                            text: "Ups..No se pudo enviar el mensaje, no se permiten caracteres especiales. Intente de nuevo.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                            
                        }).then((result) => {
                        
                            if (result.value) {

                                window.location = "contactos";

                            }
                        })

					</script>';
				}

			}

		}

	}