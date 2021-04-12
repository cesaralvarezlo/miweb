<?php

	require_once "../controladores/mensaje-controlador.php";
	require_once "../modelos/mensaje-modelo.php";

	class AjaxMensajes{

		/*============================================
		REVISAR MENSAJES
		=============================================*/

		public $revisionMensajes;

		public function ajaxRevisionMensaje(){

			$datos = $this->revisionMensajes;

			$respuesta = ControladorMensajes::ctrMensajeRevisado($datos);

			echo $respuesta;

		}

	}

	/*============================================
	OBJETOS - REVISAR MENSAJES
	=============================================*/

	if(isset($_POST["revisionMensajes"])){

		$a = new AjaxMensajes();
		$a -> revisionMensajes = $_POST["revisionMensajes"];
		$a -> ajaxRevisionMensaje();

	}
