            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Tareas</h1>
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
                                                    <th data-field="Estado" data-editable="true">Estado</th>
                                                    <th data-field="Edificio" data-editable="true">Edificio</th>
                                                    <th data-field="Fecha-hora" data-editable="true">Fecha-hora</th>
                                                    <th data-field="Usuario" data-editable="true">Usuario</th>
                                                    <th data-field="Descripcion" data-editable="true">Descripcion</th>
                                                    <th data-field="Editar" data-editable="true">Editar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($t->listar() as $row): ?>
                                                  <tr>
                                                    <td></td>
                                                    <td><?php if ($row->estadoTarea==0): ?>
                                                      <input type="button" class="estadoDanger"name="" value="">
                                                    <?php endif;  if ($row->estadoTarea==1): ?>
                                                      <input type="button" class="estadoSuccess"name="" value="">
                                                    <?php endif; ?>
                                                  </td>
                                                  <td><?php echo $row->direccionEdificio ?></td>
                                                  <td><?php echo $row->fechaTarea ?></td>
                                                  <td><?php if ($row->nombre ==null)
                                                  {
                                                    echo "No registrado";
                                                  }
                                                  else
                                                  {
                                                    echo $row->nombre;
                                                  } ?>
                                                </td>
                                                  <td><?php echo $row->descripcionTarea ?></td>
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
