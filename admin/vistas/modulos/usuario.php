<!-- Content Wrapper.-->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h4 class="m-0 text-dark">Administrar Usuarios</h4> -->
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario"><i class="fa fa-plus"></i> Crear Usuario</button>
                </div>
                <div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="inicio"> Inicio</a></li>
					<li class="breadcrumb-item active">Usuarios</li>
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

                <!-- Col 12 -->
                <div class="col-md-12">

                    <div class="card card-success">

                        <!-- Card-body -->
                        <div class="card-body"> 

                            <div class="form-row">                        

                                <!-- Tabla usuarios -->                             
                                <div class="col custom-col">  

                                    <table class="table table-bordered table-striped dt-responsive table-sm tablas">   

                                        <thead>       
                                            <tr style="text-align:center">
                                                <th style="width:8px">N°</th>
                                                <th>Nombres</th>
                                                <th>Usuario</th>
                                                <th>Estado</th>
                                                <th>Foto</th>
                                                <th>Último Login</th>
                                                <th>Acción</th>
                                            </tr> 
                                        </thead>
                                        
                                        <tbody>

                                            <?php

                                                $item = null;
                                                $valor = null;

                                                $usuarios = ControladorUsuarios::ctrMostrarUsuario($item, $valor);

                                                foreach ($usuarios as $key => $value){

                                                    echo ' <tr>

                                                            <td class="text-center">'.($key+1).'</td>
                                                            <td>'.$value["nombre"].'</td>
                                                            <td>'.$value["usuario"].'</td>';

                                                            if($value["estado"] != 0){

                                                                echo '<td class="text-center"><span class="badge badge-success p-2 btnActivarUsuario" idUsuario="'.$value["id"].'" estadoUsuario="0" style="cursor:pointer">Activado</span></td>';

                                                            }else{

                                                                echo '<td class="text-center"><span class="badge badge-danger p-2 btnActivarUsuario" idUsuario="'.$value["id"].'" estadoUsuario="1" style="cursor:pointer">Desactivado</span></td>';

                                                            }

                                                            if($value["foto"] != ""){

                                                                echo '<td class="text-center">
                                                                    <img src="'.$value["foto"].'" class="img-thumbnail" width="40px">
                                                                </td>';


                                                            }else{

                                                                echo '<td class="text-center">
                                                                    <img src="vistas/img/profile.jpg" class="img-thumbnail" width="40px">
                                                                </td>';

                                                            }                                                                                          
                                                            echo '<td>'.$value["ultimo_login"].'</td>

                                                            <td class="text-center">
                                                                <div class="btn-group">
                                                                    
                                                                    <button class="btn btn-warning btn-sm btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-edit"></i></button>
            
                                                                    <button class="btn btn-danger btn-sm btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-trash-alt"></i></button>
            
                                                                </div>  
                                                            </td>
            
                                                    </tr>';

                                                }

                                            ?>
                                                                                                   
                                        </tbody> 
                                                                            
                                    </table>

                                </div>
                                <!-- Fin tabla usuarios --> 

                            </div>

                        </div>
                        <!-- Fin card-body -->                          

                    </div>
                
                </div>
                <!-- Fin Col -->

            </div>
            <!-- Fin row -->
        
        </div>
        <!-- fin Container-fluid -->

    </section>
    <!-- Fin Main content -->

</div>
<!-- Fin content-wrapper -->

<?php

    $eliminarUsuario = new ControladorUsuarios();
    $eliminarUsuario -> ctrBorrarUsuario();

?> 

<!--=====================================
MODAL CREAR USUARIO
======================================-->
<!-- Modal crear Usuario -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog" data-backdrop="static">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">

                <!-- Modal header -->
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Fin Modal header -->

                <!-- Modal body -->
                <div class="modal-body">               

                    <div class="container-fluid">

                        <div class="form-row">

                            <!-- ENTRADA PARA EL NOMBRE -->
                            <div class="col">
                                <div class="form-group">
                                    <label>Nombres:</label>
                                    <input class="form-control form-control-lg" type="text" name="nuevoNombre" id="nuevoNombre" tabindex="1" placeholder="Ingrese el nombre" autofocus required style="text-transform: uppercase;">
                                </div>
                            </div>
                                                        
                        </div>

                         <div class="form-row">

                            <!-- ENTRADA PARA EL USUARIO -->
                            <div class="col">
                                <div class="form-group">
                                    <label>Usuario:</label>
                                    <input class="form-control form-control-lg" type="text" name="nuevoUsuario" id="nuevoUsuario" tabindex="2" placeholder="Ingresar usuario" required>
                                </div>
                            </div>  

                        </div>

                        <div class="form-row">

                            <!-- ENTRADA PARA LA CONTRASEÑA -->
                            <div class="col">
                                <div class="form-group">
                                    <label>Contraseña:</label>                              
                                    <input type="password" class="form-control form-control-lg" name="nuevoPassword" tabindex="3" placeholder="Ingresar contraseña" required>                                                                 
                                </div>
                            </div>
                                                 
                        </div>  

                        <div class="form-row"> 

                            <!-- ENTRADA PARA SUBIR FOTO -->
                            <div class="col">
                                <div class="form-group">
                                    <label>SUBIR FOTO - Tamaño recomendado 500 x 500:</label>  
                                    <input type="file" class="form-control form-control-lg fotoUser" id="nuevaFoto" name="nuevaFoto" tabindex="4"><br>
                                    <img src="vistas/img/profile.jpg" class="img-thumbnail previsualizar" width="100px">
                                </div>
                            </div>

                        </div>                                       
                    
                    </div>            

                </div>
                <!-- Fin Modal body -->

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                </div> 
                <!-- fin Modal footer -->              

            </form>
             <!-- fin form -->

            <?php

                $crearUsuario = new ControladorUsuarios();
                $crearUsuario -> ctrCrearUsuario();

            ?>            

        </div>

    </div>

</div>
<!-- Fin modal crear usuario -->

<!--=====================================
MODAL EDITAR USUARIO
======================================-->
<!-- Modal Editar Usuario -->
<div id="modalEditarUsuario" class="modal fade" role="dialog" data-backdrop="static">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">

                <!-- Modal header -->
                <div class="modal-header">
                    <h5 class="modal-title">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Fin Modal header -->

                <!-- Modal body -->
                <div class="modal-body">               

                    <div class="container-fluid">

                        <div class="form-row">

                            <!-- ENTRADA PARA EDITAR EL NOMBRE -->
                            <div class="col">
                                <div class="form-group">
                                    <label>Editar Nombres:</label>
                                    <input class="form-control form-control-lg" type="text" name="editarNombre" id="editarNombre" tabindex="1" required style="text-transform: uppercase;">
                                </div>
                            </div>
                                                        
                        </div>

                         <div class="form-row">

                            <!-- ENTRADA PARA EDITAR EL USUARIO -->
                            <div class="col">
                                <div class="form-group">
                                    <label>Editar Usuario:</label>
                                    <input class="form-control form-control-lg" type="text" name="editarUsuario" id="editarUsuario" value="" readonly>
                                </div>
                            </div>  

                        </div>

                        <div class="form-row">

                            <!-- ENTRADA PARA EDITAR LA CONTRASEÑA -->
                            <div class="col">
                                <div class="form-group">

                                    <label>Editar Contraseña:</label>                              
                                    <input type="password" class="form-control form-control-lg" name="editarPassword" id="editarPassword" placeholder="Escriba la nueva contraseña"  tabindex="2" required>  

                                    <input type="hidden" name="passwordActual" id="passwordActual">
                                               
                                </div>
                            </div>
                                                 
                        </div>  

                        <div class="form-row"> 

                            <!-- ENTRADA PARA EDITAR FOTO -->
                            <div class="col">
                                <div class="form-group">
                                    <label>EDITAR FOTO - Tamaño recomendado 500 x 500:</label>  
                                    <input type="file" class="form-control form-control-lg fotoUser" id="editarFoto" name="editarFoto" tabindex="3"><br>
                                    <img src="vistas/img/profile.jpg" class="img-thumbnail previsualizar" width="100px">

                                    <input type="hidden" name="fotoActual" id="fotoActual">
                                </div>
                            </div>

                        </div>                                       
                    
                    </div>            

                </div>
                <!-- Fin Modal body -->

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
                </div> 
                <!-- fin Modal footer -->              

            </form>
             <!-- fin form -->

            <?php

                $editarUsuario = new ControladorUsuarios();
                $editarUsuario -> ctrEditarUsuario();

            ?>            

        </div>

    </div>

</div>
<!-- Fin modal editar usuario -->

