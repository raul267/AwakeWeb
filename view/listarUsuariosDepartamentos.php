
            <!-- Breadcome start-->

            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Usuarios</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-4" style="margin-top:10px;">
                                              <div class="login-input-area">
                                                  <select class="form-control custom-select-value" name="filtroEdificio" id="filtroEdificio">
                                                    <option value="">Selecciona un edificio</option>
                                                      <?php foreach ($e->Listar() as $row): ?>
                                                          <option value="<?php echo $row->idEdificio ?>"><?php echo $row->direccionEdificio ?></option>
                                                      <?php endforeach; ?>
                                                  </select>

                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Exportacion basica</option>
                                                <option value="all">Exportar todo</option>
                                                <option value="selected">Exportar elementos seleccionados</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="Rut" data-editable="true">Rut</th>
                                                    <th data-field="Nombre" data-editable="true">Nombre</th>
                                                    <th data-field="Correo" data-editable="true">Correo</th>
                                                    <th data-field="departamento" data-editable="true">departamento</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <div class="" id="divFiltroUsuario" >
                                                  
                                              </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table area End-->
        </div>
    </div>
