<?php

	class ControladorRutaBase{

		private $basepath;
		private $uri;
		private $base_url;
		private $routes;
		private $route;

	    private function getCurrentUri(){

			$this->basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
			$this->uri = substr($_SERVER['REQUEST_URI'], strlen($this->basepath));
			if (strstr($this->uri, '?')) $this->uri = substr($this->uri, 0, strpos($this->uri, '?'));
			$this->uri = '/' . trim($this->uri, '/');

			return $this->uri;

		}
 		
 		/*============================================
        METODO PARA OBTENER LA MATRIZ DE LA URL
        =============================================*/

		public function getRoutes(){

			$this->base_url = $this->getCurrentUri();
			$this->routes = explode('/', $this->base_url);

			return $this->routes;

		}

		/*=============================================
        METODO PARA BASE URL DEL PROYECTO
        =============================================*/

		public function ctrBaseUrl(){

	        $base = dirname($_SERVER["SCRIPT_NAME"]);
	        $base = str_replace('\\','/',$base);

	        if($base == '/'){ 

	        	$base = NULL; 

	        }

	        define('RUTA', 'http://'.$_SERVER['HTTP_HOST'].$base.'/');

	    }

	}

	$rutas = new ControladorRutaBase();
	$rutas -> ctrBaseUrl();

