<div class="login-form-area mg-t-30 mg-b-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3"></div>
            <form id="adminpro-contact-form" method="post" action="?c=Usuario&a=RegistrarGasto" enctype="multipart/form-data" class="adminpro-form">
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
                                    <h1>Agregar Gasto comun</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Numero departamento</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <select class="form-control custom-select-value" id="idDepartamento" name="idDepartamento">
                                      <option value="">Selecciona un Departamento</option>
                                      <?php foreach ($d->ListarDepaDDL() as $row): ?>
                                          <option value="<?php echo $row->idDepartamento ?>"><?php echo $row->numeroDepartamento ?></option>
                                      <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Desde</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="date" name="desde" id="desde" class="form-control custom-select-value"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Hasta</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="date" name="hasta" id="hasta" class="form-control custom-select-value"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Feha fechaVencimiento</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="date" name="fechaVencimiento" id="fechaVencimiento" class="form-control custom-select-value"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Monto</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="number" name="monto" id="monto" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Sube la imagen gasto comun</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="file" style="margin-top:20px;" name="imgGasto" id="imgGasto" value="">
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
