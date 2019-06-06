<!-- Data table area Start-->
<div class="admin-dashone-data-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Gastos Comunes</h1>
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
                                        <th data-field="Numero Departamento" data-editable="true">Numero Departamento</th>
                                        <th data-field="Desde" data-editable="true">Desde</th>
                                        <th data-field="Hasta" data-editable="true">Hasta</th>
                                        <th data-field="Fecha vencimiento" data-editable="true">Fecha vencimiento</th>
                                        <th data-field="Monto" data-editable="true">Monto</th>
                                        <th data-field="Editar" data-editable="true">Ver gasto comun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->model_gc->listar() as $row): ?>
                                      <tr>
                                        <td></td>
                                        <td><?php echo $row->numeroDepartamento ?></td>
                                        <td><?php echo $row->desde ?></td>
                                        <td><?php echo $row->hasta ?></td>
                                        <td><?php echo $row->fechaVencimiento ?></td>
                                        <td><?php echo $row->monto ?></td>
                                      <td class="centrado"><a target="_blank" href="<?php echo $row->imgGasto ?>"<span class="glyphicon glyphicon-list-alt"></span></a></td>
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
