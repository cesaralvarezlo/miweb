<?php

	require_once "conexion-db.php";

	class ModeloMensajes{

		/*============================================
		OBTENER MENSAJES
		=============================================*/
		static public function mdlMostrarMensaje($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY creado DESC LIMIT 15");

			$stmt->execute();
			return $stmt -> fetchAll();

			$stmt->close();
			$stmt = null;

		}

		/*===========================================
		OBTENER MENSAJE POR ID
		=============================================*/

		static public function mdlObtenerMensajePorId($tabla, $id){

	        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
	        
	        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);
	       
	        $stmt->execute();
	        return $stmt->fetch(PDO::FETCH_ASSOC);

	        $stmt->close();
			$stmt = null;

	 	}

		/*============================================
		BORRAR MENSAJE
		=============================================*/
		static public function mdlBorrarMensaje($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

			$stmt->bindParam(":id", $datos, PDO::PARAM_INT);

			if($stmt->execute()){

				return "ok";

			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*============================================
		SELECCIONAR MENSAJE SIN REVISAR
		=============================================*/
		static public function mdlMensajeSinRevisar($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT revision FROM $tabla");

			$stmt -> execute();
			return $stmt -> fetchAll();

			$stmt -> close();
			$stmt = null;

		}

		/*============================================
		ACTUALIZAR MENSAJE REVISADO
		=============================================*/

		static public function mdlMensajeRevisado($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET revision = :revision");

			$stmt -> bindParam(":revision", $datos, PDO::PARAM_INT);

			if($stmt -> execute()){

				return "ok";

			}else{

				return "error";
			}


			$stmt -> close();
			$stmt = null;

		}

		/*=============================================
		CONTAR TODOS LOS MENSAJES
		=============================================*/

	 	static public function mdlContarMensaje($tabla){

	        $stmt = Conexion::conectar()->prepare("SELECT count(*) FROM $tabla");
	       
			$stmt -> execute();
			$count = $stmt -> fetch(PDO::FETCH_NUM);

	        return reset($count); 

	        $stmt -> close();
			$stmt = null;

		}

	}