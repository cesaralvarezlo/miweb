<?php

    require_once "controladores/plantilla-controlador.php";
    require_once "controladores/ruta-controlador.php";
    require_once "controladores/titulo-controlador.php";
    require_once "controladores/mensaje-controlador.php";

    require_once "modelos/mensaje-modelo.php";

    $plantilla = new ControladorPlantilla();
    $plantilla -> ctrPlantilla();