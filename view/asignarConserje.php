
            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-contact-form" class="adminpro-form" method="post" action="?c=Usuario&a=AsignarConserjeEdificio">
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
                                                <h1>Asignar conserje</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                  <p>Edificio</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <select class="form-control custom-select-value" name="idEdificio">
                                                  <option value="">Selecciona un Edificio</option>
                                                  <?php foreach ($c->listar() as $row): ?>
                                                    <option value="<?php echo $row->idEdificio ?>"><?php echo $row->direccionEdificio ?></option>
                                                  <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Conserje</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <select class="form-control custom-select-value" name="idUsuario">
                                                  <option value="">Selecciona un conserje</option>
                                              <?php foreach ($co->ListarConserjes() as $row): ?>
                                                  <option value="<?php echo $row->idUsuario ?>"><?php echo $row->nombre ?></option>
                                              <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg">Asignar</button>
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
