            <div class="user-profile-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="user-profile-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="">
                                                    <img src="<?php echo $u->fotoPerfil ?>" class="fotoPerfil" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="user-profile-content">
                                                    <h2><?php echo $u->nombre ?></h2>
                                                    <p>
                                                      Rut: <?php echo $u->rut ?><br>
                                                      Correo: <?php echo $u->correo ?>
                                                    </p>
                                                    <p class="profile-des"><?php echo $u->descripcionUsuario ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="user-profile-social-list">
                                            <table class="table small m-b-xs">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong>542</strong> <a href="?c=Usuario&a=Alarmas">Alarmas</a>
                                                        </td>
                                                        <td>
                                                            <strong>222</strong> <a href="?c=Usuario&a=Tareas">Tareas</a>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                          <strong>542</strong> Recorrido Perimetral
                                                        </td>
                                                        <td>
                                                          <strong>612</strong> Calificacion de usuarios
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                            <div class="analytics-content">
                                              <div class="sparkline11-outline-icon">
                                                  <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                  <span><i class="fa fa-wrench"></i></span>
                                                  <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                              </div>
                                              <div class="sparkline11-graph">
                                                  <div id="gauge"></div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="user-prfile-activity-area mg-b-40 mg-t-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="post-user-profile-awrap shadow-reset">
                                <div class="user-profile-post">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="user-profile-img-post">
                                                <a href="#"><img src="<?php echo $_SESSION['fotoPerfil'] ?>" class="fotoPerfil" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="user-profile-post-name">
                                                <h2><a href="#">Usuario tato</a></h2>
                                                <p><span>Today 4:21 pm - 12.06.2014</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="profile-user-post-content">
                                                <p>Muy buen conserje, contraten mas como el </p>
                                                <div class="user-post-reply">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
            </div>
        </div>
    </div>
