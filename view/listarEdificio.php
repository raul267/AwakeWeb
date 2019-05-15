<!-- Breadcome start-->

<!-- Data table area Start-->
<div class="" style="margin-top:10px;">
  <div class="admin-dashone-data-table-area">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="sparkline8-list shadow-reset">
                      <div class="sparkline8-hd">
                          <div class="main-sparkline8-hd">
                              <?php if ($e->nombreEdificio != null): ?>
                                <h2>Nmbre edificio <?php echo $e->nombreEdificio ?></h2>
                              <?php endif; ?>
                              <h1>Direccion: <?php echo $e->direccionEdificio ?></h1>
                          </div>
                          <div class="row" style="margin:10px;">
                              <div class="col-md-12 col-sm-12">
                                  <a href="?c=Usuario&a=Propietarios" class="btn btn-primary" style="font-size:40px; width:100%;">Propietarios</a>
                              </div>
                          </div>

                          <div class="row" style="margin:10px;">
                              <div class="col-md-12 col-sm-12">
                                  <a href="?c=Usuario&a=ListarConserjes" class="btn btn-primary" style="font-size:40px; width:100%;">Conserjes</a>
                              </div>
                          </div>

                          <div class="row" style="margin:10px;">
                              <div class="col-md-12 col-sm-12">
                                  <a href="?c=Usuario&a=Tareas" class="btn btn-primary" style="font-size:40px; width:100%;">Tareas</a>
                              </div>
                          </div>
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
