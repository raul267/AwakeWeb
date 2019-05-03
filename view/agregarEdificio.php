            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-contact-form" class="adminpro-form"  method="post" action="?c=Usuario&a=RegistrarEdificio">
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
                                                <h1>Registrar un edificio</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Asigna una comunidad</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <select class="form-control custom-select-value" name="idComunidad" id="idComunidad">
                                                  <option value="">Selecciona una comunidad</option>
                                                <?php foreach ($c->Listar() as $row): ?>
                                                  <option value="<?php echo $row->idComunidad ?>"><?php echo $row->nombreComunidad ?></option>
                                                <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Direccion</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="direccionEdificio" id="direccionEdificio" />
                                                <i class="fa fa-map login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Numero departamentos</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="numeroDepartamentos" id="numeroDepartamentos" />
                                                <i class="fa fa-map login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Tipo Enumeracion</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <select class="form-control custom-select-value" name="tipoEnumeracion">
                                                  <option value="">Seleccione una opcion</option>
                                                  <option value="1">Enumeraracion normal (1,2,3)</option>
                                                  <option value="2">Pares (2,4,6)</option>
                                                  <option value="3">Impares (1,3,5)</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg">Crear</button>
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
