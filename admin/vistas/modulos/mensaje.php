<style>

    .dataTables_length{
        display: none;
    }

</style>
<!-- Content Wrapper.-->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">Administrar Mensajes</h4>
                </div>
                <div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="inicio"> Inicio</a></li>
					<li class="breadcrumb-item active">Mensajes</li>
					</ol>
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
                                    <a href="#" class="nav-link">
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
                        <!-- header -->
                        <div class="card-header">

                            <h3 class="card-title">Bandeja de Entrada</h3>

                        </div>
                        <!-- Fin header -->
                        
                        <!-- body -->
                        <div class="card-body p-2">
                            <div class="table-responsive mailbox-messages">

                                <table class="table table-striped dt-responsive tablas" width="100%">

                                    <thead style="display: none;">
                
                                        <tr>
                                    
                                            <th>Nombres</th>
                                            <th>Correo</th>
                                            <th>Fecha</th>
                                            <th>Borrar</th>

                                        </tr> 

                                    </thead> 

                                    <tbody>

                                        <?php 

                                            $mostrarMensajes = new ControladorMensajes();
                                            $mostrarMensajes -> ctrMostrarMensaje();

                                        ?>                                       
                  
                                    </tbody>

                                </table>

                            </div>

                        </div>
                        <!-- Fin body -->

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

<?php 

    $borrarMensaje = new ControladorMensajes();
    $borrarMensaje -> ctrBorrarMensaje();

?>   

<script>

    /*=============================================
    REVISION DE MENSAJES NUEVOS
    =============================================*/

    $(window).on("load",function(){

        var datos = new FormData();

        datos.append("revisionMensajes", 1);

        $.ajax({

            url:"ajax/mensaje-ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,

        })
        .done(function(respuesta){

        });

    });
    
</script>