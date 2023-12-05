<?php
	include "inc/security.php";
	protegePagina();
	include 'header.php'; 
	include 'inc/functions-extensao.php'; 
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
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <div class="dropdown-item noti-title">
                                            <h5>Bem vindo</h5>
                                        </div>
                                        <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
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
                                        <div class="float-right">
                                                <a type="button" href="cadastrar-extensao.php" class="btn btn-primary btn-lg btn-block">Adicionar Obra</a>
                                        </div>
                                        <h4 class="page-title">Extensão</h4>
                                    </div>
                                </div>
                            </div>

                            <?php
                            if ($msg == "success"){
                                echo '<div class="alert alert-success" role="alert">
                                            Extensão alterada com sucesso.
                                        </div>';
                                }
                            if ($msg == "error"){
                                echo '<div class="alert alert-danger" role="alert">
                                            Erro para alterar Extensão   
                                        </div>';
                                }
                            if ($msg == "deu_certo"){
                                echo '<div class="alert alert-success" role="alert">
                                            Extensão removido com sucesso.
                                        </div>';
                                }
                            if ($msg == "erro"){
                                echo '<div class="alert alert-danger" role="alert">
                                            Erro para remover Extensão   
                                        </div>';
                                }
                            ?>

                            <div class="row">                                
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body table-data">
                                            <h6 class="d-inline-block">Overview</h6>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0">ID</th>
                                                            <th class="border-top-0">Tipo</th>
                                                            <th class="border-top-0">Titulo</th>
                                                            <th class="border-top-0">Descrição</th>
                                                            <th class="border-top-0">Valor</th>
                                                            <th class="border-top-0">Status</th> 
                                                            <th class="border-top-0">Visível no site</th>
                                                            <th class="border-top-0">Ações</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                    
                                                            $sql_obra = "SELECT * FROM `tbl_obra`";
                                                            $result = mysqli_query($conn, $sql_obra);
                                                            if (mysqli_num_rows($result) > 0) {
                                                            while($row = mysqli_fetch_assoc($result)) { ?>
                                                                    
                                                            <tr>
                                                                <td><p><?= $row["id_obra"]; ?></p></td>
                                                                <td><p><?= $row["tipo_obra"]; ?></p></td>
                                                                <td><p><?= $row["titulo_obra"]; ?></p></td>
                                                                <td><p><?= $row["descricao_obra"]; ?></p></td>
                                                                <td><p><?= $row["valor_obra"]; ?></p></td>
                                                                <td><span class="badge badge-boxed  badge-primary"><?= $row["status_obra"]; ?></span></td>  
                                                                <td><?php if ($row["mostrar_site"] == '1'){ ?>
                                                                    <span class="badge badge-boxed  badge-primary">SIM</span> 
                                                                <?php }
                                                                else { ?>
                                                                    <span class="badge badge-boxed  badge-danger">NÃO</span> 
                                                               <?php } ?></td>  
                                                                <td><h5><a href="inc/deletar_extensao.php?id=<?= $row["id_obra"]; ?>" onclick="return confirm('Tem certeza que deseja deletar esta obra?')"><i class="mdi mdi-delete"></i></h5></a></td>
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
                            </div>
                        </div>
                    </div>
                </div>
<?php include 'footer.php'; ?>