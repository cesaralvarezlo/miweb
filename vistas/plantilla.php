<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
            <?php 
                if(isset($_GET["ruta"])){
                    $tituloDinamico = TituloControlador::ctrTituloDinamico();
                }else{
                    echo "César Alvarez";
                }
            ?> 
        </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="keywords" content="Cesar Alvarez, Ingeniero informatico, freelance, sistema web, responsive">
        <meta name="description" content="Author: César Alvarez, Category: Sitio Web Personal">
        <meta name="author" content="César Alvarez">
		<meta name="theme-color" content="#3CB371">
		<meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="application-name" content="César Alvarez">
        <meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">

        <meta property="og:url" content="https://www.cesaralvarez.com.py/">
		<meta property="og:site_name" content="César Alvarez Blog">
	    <meta property="og:type" content="website">
	    <meta property="og:title" content="César Alvarez López">
	    <meta property="og:description" content="Author: César Alvarez, Category: Sitio Web Personal">
	  	<meta property="og:image" content="https://www.cesaralvarez.com.py/vistas/img/images-facebook.jpg">
	  	<meta property="fb:app_id" content="2211063325798593">

        <!-- Canonical -->
        <link rel="canonical" href="https://www.cesaralvarez.com.py/">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="<?php echo RUTA; ?>vistas/img/favicon.ico" sizes="16x16">
        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" href="<?php echo RUTA; ?>vistas/img/favicon.ico">

        <!-- CSS-->
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/fuentes/style.css">
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/css/main.css">
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/css/header.css">
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/css/inicio.css">
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/css/principal.css">
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/css/404.css">
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/css/animate.css">
        
        <!-- SCRIPT-->
        <script src="<?php echo RUTA; ?>vistas/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo RUTA; ?>vistas/js/lazyload.min.js"></script>
        <script src="<?php echo RUTA; ?>vistas/js/sweetalert2.all.min.js"></script>

        <!-- Slick -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/plugins/slick/slick-min.css">
        <link rel="stylesheet" href="<?php echo RUTA; ?>vistas/plugins/slick/slick-theme.css">
        <script src="<?php echo RUTA; ?>vistas/plugins/slick/slick.min.js"></script>

    </head>
    <body>
        
        <!-- Plugin Facebook -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0&appId=2211063325798593&autoLogAppEvents=1"></script>
        <!-- /Fin Plugin Facebook -->
        
        <!-- Header -->
        <header class="main-header">

            <?php

                include 'modulos/header.php';

            ?>

        </header>
        <!-- Fin Header -->

        <!-- Contenido -->
        <section class="main-section">

            <?php

                $rutas = new ControladorRutaBase(true);
                $ruta = $rutas->getRoutes();

                if(isset($_GET['ruta'])){

                    if($ruta[1] == 'inicio' ||
                        $ruta[1] == 'acerca' ||
                        $ruta[1] == 'contactos' ||
                        $ruta[1] == 'sistema' ||
                        $ruta[1] == 'administrable' ||
                        $ruta[1] == 'responsive'){

                        include 'modulos/'.$ruta[1].'.php';

                    }else{

                        include 'modulos/404.php';

                    }

                }else{

                    include 'modulos/inicio.php';
                
                }

            ?>

        </section>
        <!-- Fin Contenido -->

        <!-- Footer -->
        <footer class="main-footer">

            <?php

                include 'modulos/footer.php';

            ?>

        </footer>
        <!-- Fin Footer -->
        
        <script src="<?php echo RUTA; ?>vistas/js/function.js"></script>
    </body>
</html>