<?php
	include "inc/security.php";
    include "inc/functions.php";
	protegePagina();
	include 'header.php'; 
?>

    <body class="fixed-left">
        <div id="wrapper">
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
                    <i class="ion-close"></i>
                </button>

                <div class="topbar-left">
                    <div class="text-center">
                        <a href="dashboard.php" class="logo"><img src="assets/images/logo.png" height="14" alt="logo"></a>
                    </div>
                </div>
               

                <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                    <?php include 'menu.php'; ?>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="content-page">
                <div class="content">

                    <div class="topbar">
                        <nav class="navbar-custom">
                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <div class="dropdown-item noti-title">
                                            <h5>Bem vindo</h5>
                                        </div>
                                        <a class="dropdown-item text-danger" href="logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>  
                                </li>
                            </ul>

                            <ul class="list-inline menu-left mb-0">
                            </ul>
                            <div class="clearfix"></div>
                        </nav>
                    </div>

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="float-right">
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-xl-3">
                                    <div class="card mini-stat">
                                        <div class="mini-stat-icon text-right">
                                            <i class="mdi mdi-hospital-building"></i>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="text-uppercase mb-3">Vestibular</h6>
                                            <div class="float-right">
                                                <p class="mb-0"><b>no site: </b><?= qtdObrasSite(); ?></p>
                                            </div>
                                            <h4 class="mb-0"><i class="mdi mdi-arrow-right text-primary"></i><?= qtdObras();?><small class="ml-2"></small></h4>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4 col-xl-3">
                                    <div class="card mini-stat">
                                        <div class="mini-stat-icon text-right">
                                            <i class="mdi mdi-hospital-building"></i>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="text-uppercase mb-3">Notícias</h6>
                                            <div class="float-right">
                                                <p class="mb-0"><b>no site: </b><?= qtdObrasSite(); ?></p>
                                            </div>
                                            <h4 class="mb-0"><i class="mdi mdi-arrow-right text-primary"></i><?= qtdObras();?><small class="ml-2"></small></h4>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-4 col-xl-3">
                                    <div class="card mini-stat">
                                        <div class="mini-stat-icon text-right">
                                            <i class="mdi mdi-hospital-building"></i>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="text-uppercase mb-3">Cursos</h6>
                                            <div class="float-right">
                                                <p class="mb-0"><b>no site: </b><?= qtdObrasSite(); ?></p>
                                            </div>
                                            <h4 class="mb-0"><i class="mdi mdi-arrow-right text-primary"></i><?= qtdObras();?><small class="ml-2"></small></h4>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4 col-xl-3">
                                    <div class="card mini-stat">
                                        <div class="mini-stat-icon text-right">
                                            <i class="mdi mdi-hospital-building"></i>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="text-uppercase mb-3">Extensão & Pós</h6>
                                            <div class="float-right">
                                                <p class="mb-0"><b>no site: </b><?= qtdObrasSite(); ?></p>
                                            </div>
                                            <h4 class="mb-0"><i class="mdi mdi-arrow-right text-primary"></i><?= qtdObras();?><small class="ml-2"></small></h4>
                                        </div>
                                    </div>
                                </div>                                        
                            </div>
                        </div>
                    </div>
                </div> 
<?php include 'footer.php'; ?>