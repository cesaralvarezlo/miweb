<!-- Login-container -->
<div class="container-login">

    <!-- Login-box -->
    <div class="login-box">

        <!-- Content -->
        <div class="card">

            <!-- Card-body -->
            <div class="card-body login-card-body">

                <p class="login-box-msg" style="font-size: 22px; font-weight: bold;">Iniciar Sesión</p>

                <form method="post" class="form" role="form">

                    <div class="input-group input-group-lg mb-3">
                        <input type="text" class="form-control px-2" placeholder="Usuario" name="ingUsuario" autofocus autocomplete="off" required style="font-size: 18px;" tabindex="1">
                        <div class="input-group-append">
                            <div class="input-group-text px-2">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <input type="password" class="form-control px-2" placeholder="Contraseña" name="ingPassword" required style="font-size: 1(px; font-weight: bold;" tabindex="2">
                        <div class="input-group-append">
                            <div class="input-group-text px-2">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-5" style="margin-top:10px; margin-bottom:5px;">
                            <button type="submit" class="btn btn-primary btn-block btn-flat" style="border-radius:5px;">Ingresar</button>
                        </div>
                    </div>

                </form>

                <?php

                    $login = new ControladorUsuarios();
                    $login -> ctrIngresoUsuario();

                ?>

            </div>
            <!-- Fin Card-body -->

        </div>
        <!-- Fin Content -->

    </div>
    <!-- Fin login-box -->

</div>
<!-- Fin container -->

