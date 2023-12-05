<?php
	include "inc/security.php";
	protegePagina();
	include 'header.php'; 
	include 'inc/functions-cursos.php'; 
    include('inc/db_connection.php');
    $msg = $_GET['msg'];
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
                                        <h5>Bem vindo</h5>
                                    </div>
                                    <a class="dropdown-item text-danger" href="#"><i
                                            class="mdi mdi-power text-danger"></i> Sair</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
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

                                    <h4 class="page-title">Categorias</h4>
                                </div>
                            </div>
                        </div>

                        <?php
                            if ($msg == "success"){
                                echo '<div class="alert alert-success" role="alert">
                                            Curso alterado com sucesso.
                                        </div>';
                                }
                            if ($msg == "error"){
                                echo '<div class="alert alert-danger" role="alert">
                                            Erro para alterar Curso   
                                        </div>';
                                }
                            if ($msg == "deu_certo"){
                                echo '<div class="alert alert-success" role="alert">
                                            Curso removido com sucesso.
                                        </div>';
                                }
                            if ($msg == "erro"){
                                echo '<div class="alert alert-danger" role="alert">
                                            Erro para remover Curso   
                                        </div>';
                                }
                            ?>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body table-data">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">ID</th>
                                                        <th class="border-top-0">Nome</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    
                                                            $sql_categorias = "SELECT * FROM `tbl_categorias`";
                                                            $result = mysqli_query($conn, $sql_categorias);
                                                            if (mysqli_num_rows($result) > 0) {
                                                            while($row = mysqli_fetch_assoc($result)) { ?>

                                                    <tr>
                                                        <td>
                                                            <p><?= $row["id"]; ?></p>
                                                        </td>
                                                        <td>
                                                            <p><?= $row["nome"]; ?></p>
                                                        </td>

                                                    </tr>
                                                    <?php
                                                        }
                                                        } 
                                                        ?>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">

                                <form action="inc/functions-cursos.php" method="POST" enctype="multipart/form-data">

                                    <div class="card m-b-30">

                                        <div class="card-body">

                                            <div>
                                                <label class="mb-0"><b>Nome</b></label>
                                                <input type="text" class="form-control" maxlength="100" name="nome"
                                                    id="placement" required />
                                            </div>
                                            <div class="float-left mt-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Adicionar
                                                    categoria</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="acao" value="cadastrar_categoria">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php'; ?>