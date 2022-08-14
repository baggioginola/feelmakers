<script src="<?php echo JS; ?>validator.js" type="text/javascript"></script>
<script src="<?php echo JS; ?>bootbox.min.js"></script>
<script src="<?php echo JS; ?>custom/contact.js" type="text/javascript"></script>
<span class="anchor" id="contacto"></span>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
                 style="padding-right: 45px; padding-left: 45px; padding-top: 40px;">
                <form class="form-horizontal" role="form" id="contactForm" data-toggle="validator">
                    <h3 class="sub-header">Información Personal</h3>

                    <div class="form-group has-feedback">
                        <label for="id_nombre" class="col-lg-2 control-label">Nombre<span
                                style="color:#C10000;">*</span></label>

                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="id_nombre" placeholder="Nombre"
                                   required autocomplete="off" name="nombre">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="id_email" class="col-lg-2 control-label">Email<span
                                style="color:#C10000;">*</span></label>

                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="id_email" required
                                   name="email" placeholder="Email" autocomplete="off">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="id_telefono"
                               class="col-lg-2 control-label">Teléfono<span
                                style="color:#C10000;">*</span></label>

                        <div class="col-lg-10">
                            <input type="tel" class="form-control" id="id_telefono" required
                                   placeholder="Teléfono" autocomplete="off" name="telefono">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="id_message"
                               class="col-lg-2 control-label">Mensaje<span
                                style="color:#C10000;">*</span></label>

                        <div class="col-lg-10">
                                        <textarea class="form-control" placeholder="Mensaje" rows="6" cols="5"
                                                  required="required" name="mensaje" id="id_message"></textarea>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: right;">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary" id="id_submit">Aceptar
                            </button>
                            <button type="button" class="btn btn-primary" id="reset_button">Limpiar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <legend><span class="glyphicon glyphicon-globe"
                              style="font-size: 65%; padding-right: 10px;"></span>Contacto
                </legend>
                <address>
                    <strong>Feelmakers Wedding Cinematography</strong><br>
                    <abbr title="Phone">
                        Teléfonos:</abbr><br>
                    ​+01 222 704 91 09 <br>
                    +52 22 24 553 615
                </address>
                
                <address>
                    <strong>E-mail</strong><br>
                    <a href="mailto:contacto@feelmakers.mx">contacto@feelmakers.mx</a>
                </address>
            </div>
            

        </div>

    </div>

</div>