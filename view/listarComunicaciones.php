
            <!-- Breadcome start-->

            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Comunicaciones enviadas</h1>
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
                                                    <th data-field="Edificio" data-editable="true">Edificio</th>
                                                    <th data-field="Descripcion" data-editable="true">Descripcion</th>
                                                    <th data-field="Fecha" data-editable="true">Fecha</th>
                                                    <th data-field="Eliminiar" data-editable="true">Eliminiar</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php foreach ($c->Listar() as $row): ?>
                                                <tr>
                                                      <td></td>
                                                      <td><?php echo $row->direccionEdificio ?></td>
                                                      <td><?php echo $row->descripcionComunicacion ?></td>
                                                      <td><?php echo $row->fechaEnviado ?></td>
                                                      <td><a data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-remove"></span></a></td>



                                                      <!-- Modal -->
                                                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel"><h3>Se eliminara el mensaje</h3></h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <h4> <?php echo $row->descripcionComunicacion; ?></h4>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                              <a href="?c=Usuario&a=EliminarComunicacion&id=<?php echo $row->idComunicacion ?>" class="btn btn-danger">Eliminar</a>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>

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
