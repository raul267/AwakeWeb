            <!-- Breadcome start-->

            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1><?php echo $_SESSION['nombre']." tus edificios son:" ?></h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
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
                                                    <th data-field="Comunidad" data-editable="true">Comunidad</th>
                                                    <th data-field="Direccion" data-editable="true">Direccion</th>
                                                    <th data-field ="Numero pisos">Numero pisos</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                          <?php if ($_SESSION['idTipo'] >0): ?>
                                            <?php foreach ($e->ListarAdministrador($idAdmin) as $row): ?>
                                              <tr>
                                                  <td></td>
                                                  <td><?php echo $row->nombreComunidad ?></td>
                                                  <td><a href="?c=Usuario&a=ListarEdificio&id=<?php echo $row->idEdificio ?>"><?php echo $row->direccionEdificio ?></a></td>
                                                  <td><?php echo $row->numeroPisos; ?></td>
                                              </tr>
                                            <?php endforeach; ?>
                                          <?php elseif ($_SESSION['idTipo'] == 0): ?>
                                            <?php foreach ($e->Listar() as $row): ?>
                                              <tr>
                                                  <td></td>
                                                  <td><?php echo $row->nombreComunidad ?></td>
                                                  <td><a href="?c=Usuario&a=ListarEdificio&id=<?php echo $row->idEdificio ?>"><?php echo $row->direccionEdificio ?></a></td>
                                                  <td><?php echo $row->numeroPisos; ?></td>
                                              </tr>
                                            <?php endforeach; ?>
                                          <?php endif; ?>
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
