<?php 

    class Conexion{

        static public function conectar(){

            try {

                $conexion = new PDO("mysql:host=localhost;dbname=miweb","root","root2021");

			    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
			    $conexion->exec("SET CHARACTER SET UTF8");

			    return $conexion;
                
            }catch(\Throwable $th) {

                echo 'Error: ' .$th->getMessage();
				die();
                
            }

        }

    }