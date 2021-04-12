<?php

    class TituloControlador{

        /*=============================================
        METODO PARA MOSTRAR TITULO DINAMICO
        =============================================*/

        static public function ctrTituloDinamico(){

            $routes = new ControladorRutaBase(true);
            $ruta = $routes->getRoutes();

            if(isset($_GET["titulo"])){
                echo ucfirst(str_replace("-", " ", $_GET["titulo"]));
            }elseif($ruta[1] == "inicio"){
                echo "César Alvarez";
            }elseif($ruta[1] == "contactos"){
                echo "Contactos";
            }elseif($ruta[1] == "acerca"){
                echo "Acerca de mi";
            }else{
                echo "César Alvarez";
            }

        }

    }