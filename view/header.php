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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
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
                    <a href="#"><img src="<?php echo $_SESSION['fotoPerfil'] ?>" alt="" />
                    </a>
                    <h3><?php echo $_SESSION['nombre'] ?></h3>
                    <p>Ultima coneccion: <br> <?php echo $_SESSION['ultimaConexion'] ?></p>
                    <strong>AP+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" role="button" ><i class="fa big-icon fa-home"></i> <span class="mini-dn">Inicio</span> <span class=><i class=""></i></span></a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Mensajes</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="inbox.html" class="dropdown-item">Bandeja de entrada</a>
                                <a href="view-mail.html" class="dropdown-item">Escribir correo</a>
                            </div>
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
                                <a href="?c=Usuario&a=Comunidades" class="dropdown-item">Comunidades</a>
                                <a href="?c=Usuario&a=Alarmas" class="dropdown-item">Alarmas</a>
                                <a href="?c=Usuario&a=Edificios" class="dropdown-item">Edificios</a>
                                <a href="?c=Usuario&a=Tareas" class="dropdown-item">Tareas</a>
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
                                    <a href="#"><img src="img/logo/log.png" alt="" />
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
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="adminpro-icon adminpro-chat-pro"></span><span class="indicator-ms"></span></a>
                                            <div role="menu" class="author-message-top dropdown-menu animated flipInX">
                                                <div class="message-single-top">
                                                    <h1>Message</h1>
                                                </div>
                                                <ul class="message-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="assets/img/message/1.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/message/4.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/message/3.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/message/2.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="message-view">
                                                    <a href="#">View All Messages</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                            <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                                <div class="notification-single-top">
                                                    <h1>Notifications</h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-checked-pro"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-cloud-computing-down"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-shield"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-analytics-arrow"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notification-view">
                                                    <a href="#">View All Notification</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Opciones</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>Mi cuenta</a>
                                                </li>
                                                <li><a href="#"><span class="adminpro-icon adminpro-money author-log-ic"></span>Pagos usuarios</a>
                                                </li>
                                                <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Configuracion</a>
                                                </li>
                                                <li><a href="?c=Usuario&a=logOut"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Cerrar sesion</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                                <ul class="nav nav-tabs custon-set-tab">
                                                    <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="Notes" class="tab-pane fade in active">
                                                        <div class="notes-area-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                                <p>You have 10 new message.</p>
                                                            </div>
                                                            <div class="notes-list-area notes-menu-scrollbar">
                                                                <ul class="notes-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/5.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/3.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/4.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/5.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/6.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/3.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Projects" class="tab-pane fade">
                                                        <div class="projects-settings-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                                <p> You have 20 projects. 5 not completed.</p>
                                                            </div>
                                                            <div class="project-st-list-area project-st-menu-scrollbar">
                                                                <ul class="projects-st-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">1 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Software Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">2 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Graphic Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">3 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">4 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Business Card</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">5 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Ecommerce Business</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">6 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Woocommerce Plugin</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">7 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Wordpress Theme</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">9 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Settings" class="tab-pane fade">
                                                        <div class="setting-panel-area">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                <p> You have 20 Settings. 5 not completed.</p>
                                                            </div>
                                                            <ul class="setting-panel-list">
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show notifications</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                    <label class="onoffswitch-label" for="example">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Disable Chat</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                    <label class="onoffswitch-label" for="example3">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Enable history</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                    <label class="onoffswitch-label" for="example4">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show charts</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                    <label class="onoffswitch-label" for="example7">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Update everyday</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                    <label class="onoffswitch-label" for="example2">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Global search</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                    <label class="onoffswitch-label" for="example6">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Offline users</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                    <label class="onoffswitch-label" for="example5">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Inicio <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Correo <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="inbox.html">bandeja de entrada</a>
                                                </li>
                                                <li><a href="view-mail.html">Escribir mail</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Agregar <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="inbox.html">Comunidad</a>
                                                </li>
                                                <li><a href="view-mail.html">Edificio</a>
                                                </li>
                                                <li><a href="view-mail.html">Alarma</a>
                                                </li>
                                                <li><a href="view-mail.html">Usuarios</a>
                                                </li>
                                            </ul>
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
