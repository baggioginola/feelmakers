<script src="<?php echo JS; ?>validator.js" type="text/javascript"></script>
<script src="<?php echo JS; ?>bootbox.min.js"></script>
<script src="<?php echo JS; ?>custom/contact.js" type="text/javascript"></script>
<div class="container-fluid wide-content">
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
                    <strong>Dirección</strong><br>
                    <abbr title="address">
                        5 de Mayo 1204-A, San Pedro Cholula, Puebla, México
                    </abbr>
                </address>
                <address>
                    <strong>E-mail</strong><br>
                    <a href="mailto:contacto@feelmakers.mx">contacto@feelmakers.mx</a>
                </address>
            </div>
            <div class="map">
                <div id="publish-map-00000000-0000-0000-0000-000705083573" style="width: 100%; height: 100%"
                     height="100%" scrolling="no">
                    <iframe frameborder="0" height="250"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.9276588089538!2d-98.30657168509903!3d19.06691798709317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0e1299aa007%3A0x9d70ef60b6968fa8!2sFeelMakers+Wedding+Cinematography!5e0!3m2!1ses-419!2smx!4v1496799312182"
                            style="border:0" width="100%"></iframe>
                </div>
            </div>

        </div>

    </div>

</div>