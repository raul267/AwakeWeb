
            <!-- Breadcome start-->

            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Conserjes</h1>
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
                                                    <th>Edificio</th>
                                                    <th data-field="Foto perfil" data-editable="true">Foto perfil</th>
                                                    <th data-field="Nombre" data-editable="true">Nombre</th>
                                                    <th data-field="Rut" data-editable="true">Rut</th>
                                                    <th data-field="Fecha nacimiento" data-editable="true">Fecha nacimiento</th>
                                                    <th data-field="Correo" data-editable="true">Correo</th>
                                                    <th data-field="Nacionalidad" data-editable="true">Nacionalidad</th>
                                                    <th data-field="Ultima Conexion" data-editable="true">Ultima Conexion</th>
                                                    <th data-field="Calificacion" data-editable="true">Calificacion</th>
                                                    <th data-field="Editar" data-editable="true">Ver perfil</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php foreach ($u->ListarConserjes() as $row): ?>
                                                <tr>
                                                      <td></td>
                                                      <td><?php echo $row->idEdificio ?></td>
                                                      <td><img class="fotoPerfilChica"src="<?php echo $row->fotoPerfil ?>" alt=""></td>
                                                      <td><?php echo $row->nombre ?></td>
                                                      <td><?php echo $row->rut ?></td>
                                                      <td><?php echo $row->fechaNacimiento ?></td>
                                                      <td><?php echo $row->correo ?></td>
                                                      <td><?php echo $row->Nacionalidad ?></td>
                                                      <td><?php echo $row->ultimaConexion ?></td>
                                                      <td>67.4</td>
                                                      <td class="centrado"><a href="?c=Usuario&a=Perfil&id=<?php echo $row->idUsuario ?>"<span class="glyphicon glyphicon-user"></span></a></td>
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
