<?php
session_start();
include ("../model/database.php");
?>

<?php

$idAccion = $_REQUEST['idAccion'];
//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
    switch ($idAccion) {
   case 1:
         echo '
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
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
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
                                             ';
                                             $sql = mysqli_query($con, "SELECT * from comunidad c join usuario u on c.idAdmin = u.idUsuario;");

                                             mysqli_close($con);
                                             while ($row = mysqli_fetch_object($sql))
                                             {
																							 	echo '
																								<tr>
																									<td></td>
																									<td>'.$row->nombreComunidad.'</td>
																									<td>'.$row->direccionComunidad.'</td>
																									<td>'.$row->idUsuario.'</td>
																									<td>'.$row->telefonoUsuario.'</td>
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
																									<td class="centrado"><a href="?c=Usuario&a=EdificiosPorComunidad&id='. $row->idComunidad.'"<span class="glyphicon glyphicon-eye-open"></span></a></td>
																									<td class="centrado"><a href="#"<span class="glyphicon glyphicon-pencil"></span></a></td>
																								';
                                             }


                                            echo'  <tr>

                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>



         ';
         break;
   case 2:
         echo "i=1";
         break;
   case 3:
         echo "i=2";
         break;
}
  }

?>
