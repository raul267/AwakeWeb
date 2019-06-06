<div class="login-form-area mg-t-30 mg-b-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3"></div>
            <form id="adminpro-contact-form" method="post" action="?c=Usuario&a=IngresarComunicacion" class="adminpro-form">
                <div class="col-lg-6">
                    <div class="login-bg">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="logo">
                                    <a href="#"><img src="img/logo/logo.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-title">
                                    <h1>Enviar Comunicado</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Asigna un edificio</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <select class="form-control custom-select-value" id="idEdificio" name="idEdificio">
                                      <option value="">Selecciona un Edificio</option>
                                      <?php foreach ($e->listar() as $row): ?>
                                        <option value="<?php echo $row->idEdificio ?>"><?php echo $row->direccionEdificio ?></option>
                                      <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Descripcion</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <textarea maxlength="500" rows="8" cols="80"  class="form-control custom-select-value" onkeyup="contarcaracteres2() " onpaste="contarcaracteres2() " id="descripcionTarea" name="descripcionTarea"></textarea>
                                    <label id="cantidad" style="color:black">500 caracteres</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <div class="login-button-pro">
                                    <button type="submit" class="login-button login-button-lg">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
<!-- Contact End-->
</div>
</div>
