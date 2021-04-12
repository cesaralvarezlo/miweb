<!-- Main header -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Navbar izquierdo -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Navbar derecho -->
    <ul class="navbar-nav ml-auto">

        <!-- Mensajes Dropdown Menu -->
        <li class="nav-item dropdown">

            <a class="nav-link" href="mensaje">
                <i class="far fa-comments"></i>

                <?php

                    $mensajeSinRevisar = new ControladorMensajes();
                    $mensajeSinRevisar -> ctrMensajeSinRevisar();

                ?>

            </a>

        </li>
        <!-- Fin Mensajes Dropdown Menu -->

        <!-- Usuario Dropdown Menu -->
        <li class="nav-item dropdown user-menu">

            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">

                <?php

                    if($_SESSION["foto"] != ""){

                        echo '<img src="'.$_SESSION["foto"].'" class="user-image img-circle elevation-2">';
                    }else{
                        echo '<img src="vistas/img/profile.jpg" class="user-image">';
                    }

                ?>

                <span class="d-none d-md-inline custom-user"><?php echo strtoupper($_SESSION["nombre"]); ?></span>
            </a>
            
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                
                <!-- User image -->
                <li class="user-header bg-primary" style="height:140px; padding-top: 20px">

                    <?php

                        if($_SESSION["foto"] != ""){

                            echo '<img src="'.$_SESSION["foto"].'" class="user-image img-circle elevation-2">';
                        }else{
                            echo '<img src="vistas/img/profile.jpg" class="user-image">';
                        }

                    ?>
                    <p class="custom-user"><?php  echo strtoupper($_SESSION["nombre"]); ?></p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="salir" class="btn btn-default btn-flat float-right">Cerrar Sesión</a>
                </li>

            </ul>

        </li>
        <!-- Fin Usuario Dropdown Menu -->

    </ul>

  </nav>
  <!-- Fin main header -->