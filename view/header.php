<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Awake</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">-->
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="assets/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/form/all-type-forms.css">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/form.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- css proipios
    ============================================ -->
    <link rel="stylesheet" href="assets/css/miCSS.css">
    <!-- modernizr JS
		============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="?c=Usuario&a=MiPerfil"><img src="<?php echo $_SESSION['fotoPerfil'] ?>" alt="" />
                    </a>
                    <h3><?php echo $_SESSION['nombre'] ?></h3>
                    <p>Ultima coneccion: <br> <?php echo $_SESSION['ultimaConexion'] ?></p>
                    <strong></strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="?c=Usuario&a=Dashboard" role="button" ><i class="fa big-icon fa-home"></i> <span class="mini-dn">Inicio</span> <span class=><i class=""></i></span></a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-plus"></i> <span class="mini-dn">Agregar</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                          <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="?c=Usuario&a=IngresarUsuarios" class="dropdown-item">Usuario</a>
                            <a href="?c=Usuario&a=IngresarComunidad" class="dropdown-item">Comunidad</a>
                            <a href="?c=Usuario&a=agregarAlarma" class="dropdown-item">Alarma</a>
                            <a href="?c=Usuario&a=IngresarEdificio" class="dropdown-item">Edificio</a>
                            <a href="?c=Usuario&a=IngresarTareas" class="dropdown-item">Tarea</a>
                            <a href="?c=Usuario&a=AsignarConserje" class="dropdown-item">Asignar conserje</a>
                          </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-eye"></i> <span class="mini-dn">Listar</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                          <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="?c=Usuario&a=Usuarios" class="dropdown-item">Usuarios</a>
                            <a href="?c=Usuario&a=ListarConserjes" class="dropdown-item">Conserjes</a>
                            <a href="?c=Usuario&a=Comunidades" class="dropdown-item">Comunidades</a>
                            <a href="?c=Usuario&a=Alarmas" class="dropdown-item">Alarmas</a>
                            <a href="?c=Usuario&a=Edificios" class="dropdown-item">Edificios</a>
                            <a href="?c=Usuario&a=Tareas" class="dropdown-item">Tareas</a>
                          </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-star"></i> <span class="mini-dn">Calificaciones</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="?c=Usuario&a=VerPorcentajes" class="dropdown-item">Ver porcentajes</a>
                                
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Comunicaciones</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="?c=Usuario&a=AgregarComunicacion" class="dropdown-item">Escribir comunicacion</a>
                                <a href="?c=Usuario&a=ListarComunicaciones" class="dropdown-item">Ver comunicaciones</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="../assets/img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">

                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Opciones</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="?c=Usuario&a=MiPerfil"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>Mi cuenta</a>
                                                </li>
                                                <li><a href="?c=Usuario&a=logOut"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Cerrar sesion</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                      <li class="nav-item">
                                          <a href="?c=Usuario&a=Dashboard" role="button" ><i class="fa big-icon fa-home"></i> <span class="mini-dn">Inicio</span> <span class=><i class=""></i></span></a>
                                      </li>
                                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-plus"></i> <span class="mini-dn">Agregar</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                          <a href="?c=Usuario&a=IngresarUsuarios" class="dropdown-item">Usuario</a>
                                          <a href="?c=Usuario&a=IngresarComunidad" class="dropdown-item">Comunidad</a>
                                          <a href="?c=Usuario&a=agregarAlarma" class="dropdown-item">Alarma</a>
                                          <a href="?c=Usuario&a=IngresarEdificio" class="dropdown-item">Edificio</a>
                                          <a href="?c=Usuario&a=IngresarTareas" class="dropdown-item">Tarea</a>
                                          <a href="?c=Usuario&a=AsignarConserje" class="dropdown-item">Asignar conserje</a>
                                        </div>
                                      </li>

                                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-eye"></i> <span class="mini-dn">Listar</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                          <a href="?c=Usuario&a=Usuarios" class="dropdown-item">Usuarios</a>
                                          <a href="?c=Usuario&a=ListarConserjes" class="dropdown-item">Conserjes</a>
                                          <a href="?c=Usuario&a=Comunidades" class="dropdown-item">Comunidades</a>
                                          <a href="?c=Usuario&a=Alarmas" class="dropdown-item">Alarmas</a>
                                          <a href="?c=Usuario&a=Edificios" class="dropdown-item">Edificios</a>
                                          <a href="?c=Usuario&a=Tareas" class="dropdown-item">Tareas</a>
                                        </div>
                                      </li>
                                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-star"></i> <span class="mini-dn">Calificaciones</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                          <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                              <a href="?c=Usuario&a=VerPorcentajes" class="dropdown-item">Ver porcentajes</a>
                                              <a href="?c=Usuario&a=AsignarPorcentajes" class="dropdown-item">Asignar porcentajes</a>
                                              <a href="inbox.html" class="dropdown-item">Ver calificaiones</a>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Comunicaciones</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                          <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                              <a href="?c=Usuario&a=AgregarComunicacion" class="dropdown-item">Escribir comunicacion</a>
                                              <a href="?c=Usuario&a=ListarComunicaciones" class="dropdown-item">Ver comunicaciones</a>
                                          </div>
                                      </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
