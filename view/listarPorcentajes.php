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
                                        <th data-field="Edificio" data-editable="true">Edificio</th>
                                        <th data-field="Alarmas" data-editable="true">Alarmas</th>
                                        <th data-field="Tareas" data-editable="true">Tareas</th>
                                        <th data-field="Usuarios" data-editable="true">Usuarios</th>
                                        <th data-field="Recorrido" data-editable="true">Recorrido</th>
                                        <th data-field="Editar" data-editable="true">Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($p->listar() as $row): ?>
                                      <tr>
                                        <td></td>
                                        <td><?php echo $row->direccionEdificio ?></td>
                                        <td><?php echo $row->porcAlarmas.'%' ?></td>
                                        <td><?php echo $row->porcTareas.'%' ?></td>
                                        <td><?php echo $row->porcUsuarios.'%' ?></td>
                                        <td><?php echo $row->porcRecorrido.'%' ?></td>
                                      <td class="centrado"><a href="?c=Usuario&a=AsignarPorcentajes&id=<?php echo $row->idEdificio ?>"<span class="glyphicon glyphicon-pencil"></span></a></td>
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
