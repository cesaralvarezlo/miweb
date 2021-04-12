<?php

    require_once "controladores/plantilla-controlador.php";
    require_once "controladores/mensaje-controlador.php";
    require_once "controladores/usuario-controlador.php";

    require_once "modelos/mensaje-modelo.php";
    require_once "modelos/usuario-modelo.php";

    $plantilla = new ControladorPlantilla();
	$plantilla -> ctrPlantilla();