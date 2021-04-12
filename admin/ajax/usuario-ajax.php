<?php

	require_once "../controladores/usuario-controlador.php";
	require_once "../modelos/usuario-modelo.php";

	class AjaxUsuarios{

		/*=============================================
		EDITAR USUARIO
		=============================================*/	
		public $idUsuario;

		public function ajaxEditarUsuario(){

			$item = "id";
			$valor = $this->idUsuario;

			$respuesta = ControladorUsuarios::ctrMostrarUsuario($item, $valor);

			echo json_encode($respuesta);

		}

		/*=============================================
		ACTIVAR USUARIO
		=============================================*/	
		public $estadoUsuario;

		public function ajaxActivarUsuario(){

			$tabla = "usuarios";

			$item1 = "estado";
			$valor1 = $this->estadoUsuario;

			$item2 = "id";
			$valor2 = $this->idUsuario;

			$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

		}

		/*=============================================
		VALIDAR NO REPETIR USUARIO
		=============================================*/	
		public $validarUsuario;

		public function ajaxValidarUsuario(){

			$item = "usuario";
			$valor = $this->validarUsuario;

			$respuesta = ControladorUsuarios::ctrMostrarUsuario($item, $valor);

			echo json_encode($respuesta);

		}
	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/
	if(isset($_POST["idUsuario"])){

		$editar = new AjaxUsuarios();
		$editar -> idUsuario = $_POST["idUsuario"];
		$editar -> ajaxEditarUsuario();

	}

	/*=============================================
	ACTIVAR USUARIO
	=============================================*/	

	if(isset($_POST["estadoUsuario"])){

		$activarUsuario = new AjaxUsuarios();
		$activarUsuario -> estadoUsuario = $_POST["estadoUsuario"];
		$activarUsuario -> idUsuario = $_POST["idUsuario"];
		$activarUsuario -> ajaxActivarUsuario();

	}

	/*=============================================
	VALIDAR NO REPETIR USUARIO
	=============================================*/

	if(isset( $_POST["validarUsuario"])){

		$valUsuario = new AjaxUsuarios();
		$valUsuario -> validarUsuario = $_POST["validarUsuario"];
		$valUsuario -> ajaxValidarUsuario();

	}