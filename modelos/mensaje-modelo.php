<?php
	
	require_once 'admin/'.substr('modelos/conexion-db.php', 0);

	class ModelosMensajes {

		/*============================================
		CREAR MENSAJES
		=============================================*/
		static public function mdlCrearMensajes($tabla, $datos){

			try {
			
				$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (autor, correo, telefono, mensaje, creado) VALUES (:autor, :correo, :telefono, :mensaje, NOW())");

				$stmt->bindParam(":autor", $datos["autor"], PDO::PARAM_STR);
				$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
				$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
				$stmt->bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);

				if($stmt->execute()){

					return "ok";
					
				}else{

					return "error";
					
				}

				$stmt -> close();
				$stmt = null;

			}catch(\Throwable $th) {

				echo 'Hubo un error: ' . $th->getMessage();

			}

		}

	}