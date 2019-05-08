<div class="login-form-area mg-t-30 mg-b-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3"></div>
            <form id="adminpro-contact-form" class="adminpro-form"  method="post" action="?c=Usuario&a=RegistrarDepartamentos">
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
                                    <h1>Registrar departamentos</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Asigna una edificio</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <select class="form-control custom-select-value" name="idEdificio" id="idEdificio">
                                      <option value="">Selecciona un edificio</option>
                                    <?php foreach ($e->Listar() as $row): ?>
                                      <option value="<?php echo $row->idEdificio ?>"><?php echo $row->direccionEdificio ?></option>
                                    <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Cantidad de departamentos</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="text" name="cantDepartamentos" id="cantDepartamentos" />
                                    <i class="fa fa-map login-user" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div id="nDepartamentos"></div>


                        <div class="row">

                            <div class="col-lg-4">
                                <div class="login-button-pro">
                                    <button type="submit" class="login-button login-button-lg">Crear</button>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="login-button-pro">
                                    <button class="btn btn-success"type="button" id="btnAgregarT">Agregar numero de departamentos</button>
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
