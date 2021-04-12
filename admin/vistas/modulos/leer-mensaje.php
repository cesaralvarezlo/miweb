<!-- Content Wrapper.-->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">Leer Mensaje</h4>
                </div>               
            </div>
        </div>

    </div>
    <!-- Fin content-header -->

    <!-- Main content -->
    <section class="content">

        <!-- Container-fluid -->
        <div class="container-fluid">

            <!-- Row -->
            <div class="row">

                <!-- Col md 3 -->
                <div class="col-md-3">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Mensajes</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>

                        <?php

                            $contarMensajes = ControladorMensajes::ctrContarMensaje();

                        ?>

                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="mensaje" class="nav-link">
                                        <i class="fas fa-inbox"></i> Bandeja de Entrada
                                        <span class="badge bg-primary float-right"><?php echo $contarMensajes; ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Fin col md 3 -->

                <!-- Col md 9 -->
                <div class="col-md-9">

                    <div class="card card-primary card-outline">

                        <div class="card-header">
                            <h3 class="card-title">Leer Mail</h3>
                        </div> 

                        <?php

                            $id = (isset($_GET["id"])) ? $_GET["id"] : "";
                    
                            $mensajes  = ControladorMensajes::ctrObtenerMensajePorId($id);

                            $autor = $mensajes["autor"];
                            $correo = $mensajes["correo"];
                            $mensaje = $mensajes["mensaje"];
                            $creado = $mensajes["creado"];

                        ?> 

                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5><b>De: </b><?php echo ucwords($autor); ?></h5>
                                <h6><b>E-Mail: </b><?php echo $correo; ?>
                                    <span class="mailbox-read-time float-right"><?php echo $creado; ?></span>
                                </h6>
                            </div>    
                        </div>  

                        <div class="mailbox-read-message">

                            <p style="font-size: 18px; padding: 10px;"><?php echo $mensaje; ?></p>

                        </div>               
                        
                    </div>
                
                </div>
                <!-- Fin col md 9 -->

            </div>
            <!-- Fin row -->
        
        </div>
        <!-- fin Container-fluid -->
    
    </section>
    <!-- Fin Main content -->

</div>
<!-- Fin content-wrapper -->