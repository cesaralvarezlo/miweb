<!-- Contenedor principal -->
<div class="contenedor-principal">

    <!-- Header wrapper -->
    <div class="header-wrapper">

        <!-- logotipo -->
        <div class="header-logo">
			<a href="<?php echo RUTA; ?>inicio" target="_parent" class="logotipo" title="Inicio">
				<img src="<?php echo RUTA; ?>vistas/img/logo.png" alt="CesarAlvarez">
			</a>
        </div>
        <!-- Fin logotipo -->
        
        <!-- navegacion principal -->
        <div class="navegacion-wrapper" id="navegacion-wrapper">

            <div class="header-navegacion">

                <div class="header-item">

                    <ul class="header-menu">

                        <li>
                            <a href="<?php echo RUTA; ?>inicio">INICIO</a>
                        </li>
                        <li>
                            <a class="desplazar" href="inicio#servicios">SERVICIOS</a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA; ?>acerca">ACERCA DE MI</a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA; ?>contactos">CONTACTOS</a>
                        </li>

                    </ul>

                </div>

            </div>
        
        </div>
        <!-- Fin navegacion principal -->

        <!-- navegacion mobil -->
        <div class="header-navegacion-mobile">
            <div class="header-menu-mobile">
                <span class="nav-menu">Menu</span>
                <span class="icon-menu5" id="btn-menu"></span>
            </div>
        </div>
        <!-- Fin navegacion mobil -->

    </div>
    <!--Fin Header wrapper -->

</div>
<!-- Fin Contenedor principal -->