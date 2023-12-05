<?php
	include "inc/security.php";
	protegePagina();
	include 'header.php'; 
	include 'inc/functions-cursos.php'; 
?>

<body class="fixed-left">
    <div id="wrapper">
        <?php include 'menu.php'; ?>
        <div class="content-page">
            <div class="content">
                <div class="topbar">
                    <nav class="navbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <div class="dropdown-item noti-title">
                                        <h5>Bem Vindo</h5>
                                    </div>
                                    <a class="dropdown-item text-danger" href="logout.php"><i
                                            class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>
                            </li>
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
                                    <h4 class="page-title">CADASTRAR CATEGORIA</h4>
                                </div>
                            </div>
                        </div>
                        <form action="inc/functions-cursos.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div>
                                                <label class="mb-0"><b>Nome</b></label>
                                                <input type="text" class="form-control" maxlength="100"
                                                    name="nome_curso" id="placement" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>