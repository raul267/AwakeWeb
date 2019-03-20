
            <!-- Breadcome start-->

            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Comunidades</h1>
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
                                                    <th data-field="Nombre" data-editable="true">Nombre</th>
                                                    <th data-field="Direccion" data-editable="true">Direccion</th>
                                                    <th data-field="Administrador" data-editable="true">Administrador</th>
                                                    <th data-field="Numero Administrador" data-editable="true">Numero admin</th>
                                                    <th data-field="Contactar Administrador" data-editable="true">Contactar admin</th>
                                                    <th data-field="Conserjes" data-editable="true">Conserjes</th>
                                                    <th data-field="Ver edificios" data-editable="true">Ver edificios</th>
                                                    <th data-field="Editar" data-editable="true">Editar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php foreach ($co->listar() as $row): ?>
                                                      <td></td>
                                                      <td><?php echo $row->nombreComunidad ?></td>
                                                      <td><?php echo $row->direccionComunidad ?></td>
                                                      <td><?php echo $row->nombre ?></td>
                                                      <td><?php echo $row->telefonoUsuario ?></td>
                                                      <td class="centrado"><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></td>
                                                      <td><div class="support-list-img">
                                                          <a href="#"><img src="assets/img/notification/1.jpg" alt="" />
                                                          </a>
                                                          <a href="#"><img src="assets/img/notification/2.jpg" alt="" />
                                                          </a>
                                                          <a href="#"><img src="assets/img/notification/3.jpg" alt="" />
                                                          </a>
                                                          <a href="#"><img src="assets/img/notification/4.jpg" alt="" />
                                                          </a>
                                                      </div></td>
                                                      <td class="centrado"><a href="#"<span class="glyphicon glyphicon-eye-open"></span></a></td>
                                                      <td class="centrado"><a href="#"<span class="glyphicon glyphicon-pencil"></span></a></td>
                                                  </tr>
                                                    <?php endforeach; ?>


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
