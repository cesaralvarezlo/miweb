<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <title>César Alvarez | Administrador</title>
        <meta charset="utf-8">
        <meta content="CC Software" name="author">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

        <link rel="manifest" href="vistas/js/manifest.json">
        <link rel="shortcut icon" href="vistas/img/favicon.ico">

        <meta name="description" content="César Alvarez">
        <meta name="theme-color" content="#5D6D7E">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="application-name" content="César Alvarez">
        <meta name="google" content="notranslate">
        
        <!-- jQuery -->
        <script src="vistas/plugins/jquery/jquery.min.js"></script>
        <script src="vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="vistas/plugins/jquery-ui/jquery-ui.min.css">        

        <!-- AdminLTE -->
        <script src="vistas/dist/js/adminlte.min.js"></script>
        <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">

        <!-- Bootstrap -->
        <script src="vistas/plugins/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="vistas/plugins/bootstrap/css/bootstrap.min.css">

        <!-- DataTables -->
        <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

        <!-- Sweetalert2 -->
        <script src="vistas/plugins/sweetalert2/sweetalert2.all.min.js"></script>

        <!-- Font-awesome -->
        <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">

        <!-- Stylo -->
        <link rel="stylesheet" href="vistas/css/main.css">

    </head>

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
       
        <?php

            if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

                echo '<div class="wrapper">';

                    /*---------- CABEZERA ----------*/
                    include "modulos/cabezote.php";

                    /*---------- MENU ----------*/
                    include "modulos/menu.php";

                    /*---------- CONTENIDO ----------*/
                    $rutas = array();
            
                    if(isset($_GET["ruta"])){

                        $rutas = explode("/", $_GET["ruta"]);

                        if($rutas[0] == "inicio" ||
                            $rutas[0] == "mensaje" ||
                            $rutas[0] == "usuario" ||
                            $rutas[0] == "leer-mensaje" ||
                            $rutas[0] == "salir"){

                            include "modulos/".$rutas[0].".php";
                
                        }else{

                            include "modulos/404.php";

                        }
      
                    }else{

                        include "modulos/inicio.php";

                    }

                    /*---------- FOOTER ----------*/
                    include "modulos/footer.php";

                echo '</div>';

            }else{

                include "modulos/login.php";

            }

        ?>

    <script src="vistas/js/functions.js"></script>
    <script src="vistas/js/mensaje.js"></script>
    <script src="vistas/js/usuario.js"></script>

    </body>

</html>