<!-- Contenedor principal -->
<div class="contenedor-principal">

    <!-- contactos wrapper -->
    <div class="contacto-contenedor">

        <div class="page-titulo">
            <h1>Contactos</h1>
        </div>

        <!-- Contactos -->
        <div class="contacto-row">

            <div class="contacto-box">

                <h4>Escríbeme rellenando este formulario</h4>

                <div class="contacto-form">

                    <form method="post" class="form" autocomplete="off">

                        <div class="form-group">
                            <label>1- Explíca brevemente lo que necesitas</label>
                            <textarea name="nuevoMensaje" id="nuevoMensaje" placeholder="Escribe brevemente..." tabindex="1" maxlength="1000" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>2- Deja tus datos de contacto</label>
                            <span>Escribe tus datos de contacto para comunicarme por si tengo alguna duda y para enviarte el presupuesto.</span>

                            <div class="input-group">

                                <input type="text" name="nuevoNombre" id="nuevoNombre" placeholder="Tu nombre y apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙÑñ\s]{4,30}$" title ="Solo acepta letras desde 5 hasta 30 caracteres." required tabindex="2">

                                <input type="email" name="nuevoEmail" id="nuevoEmail" placeholder="Tu correo electrónico (Válido)" required tabindex="3">

                                <input type="tel" name="nuevoTelefono" id="nuevoTelefono" placeholder="Tu teléfono (Opcional)" pattern="[0-9\+ ]{1,14}$" title="Solo acepta numeros desde 1 hasta 14." tabindex="4">

                            </div>
                        </div>

                        <div class="form-group content-btn">

                            <input type="submit" value="Enviar" class="btn-form">
                            <input type="reset" value="Cancelar" class="btn-form">

                        </div>

                    </form>

                    <?php

                        $crearMensajes = new ControladorMensajes();
                        $crearMensajes -> ctrCrearMensajes();

                    ?>
                    
                </div>

                <!-- Mapa -->
                <div class="mapa-contenedor">

                    <div class="mapa-row">

                        <div class="box-info">

                            <h2>Información de Contacto</h2>

                            <div>
                                <span class="icon-mobile1"></span>
                                <p><b>Celular:&nbsp; </b>  0984 901941</p>
                            </div>
                            <div>
                                <span class="icon-mail5"></span>
                                <p><b>Email:&nbsp; </b> cesalvarez25@gmail.com</p>
                            </div>
                            <div>
                                <span class="icon-map-pin1"></span>
                                <p>Choré - San Pedro - Paraguay</p>
                            </div>
                            <div class="icon-social">
                                <div class="fb-share-button" data-href="https://cesaralvarez.com.py/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcesaralvarez.com.py%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                                <div class="fb-like" data-href ="https://cesaralvarez.com.py/" data-width= "" data-layout="button" data-action="like" data-size="large" data-share="false"></div>  
                            </div>

                        </div>

                        <div class="box-mapa">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14558.239589164437!2d-56.57286035!3d-24.18716285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1246298fbede204d!2sAllex%20Inform%C3%A1tica!5e0!3m2!1ses-419!2spy!4v1588277544205!5m2!1ses-419!2spy" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                
                        </div>

                    </div>

                </div>
                <!-- /Fin Mapa -->

            </div>

        </div>
        <!-- /Fin Contactos -->

    </div>
    <!-- /Fin contactos wrapper -->

</div>
<!-- /Fin Contenedor principal -->