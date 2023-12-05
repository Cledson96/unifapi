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
                                    <h4 class="page-title">CADASTRAR CURSO</h4>
                                </div>
                            </div>
                        </div>
                        <form action="inc/functions-cursos.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div>
                                                <label class="mb-0"><b>Nome</b></label>
                                                <input type="text" class="form-control" maxlength="100"
                                                    name="nome_curso" id="placement" required />
                                            </div>
                                            <div class="m-t-20">
                                                <label class="mb-0"><b>Resumo curso</b></label>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3"
                                                    name="resumo_curso" placeholder="Resumo do curso"
                                                    required></textarea>
                                            </div>
                                            <div class="m-t-20">
                                                <label class="mb-0"><b>Descrição curso</b></label>
                                                <textarea id="textarea2" class="form-control" maxlength="22500" rows="5"
                                                    name="descricao_curso" placeholder="Descrção do curso"
                                                    required></textarea>
                                            </div>
                                            </br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <h6 class="text-muted">Tipo</h6>
                                                    <select class="select2 form-control mb-3 custom-select" name="tipo"
                                                        style="width: 100%; height:36px;">
                                                        <option value="graduacao">Graduação</option>
                                                        <option value="pos">Pós graduação</option>
                                                        <option value="extensao">Extensão</option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-muted">Períodos</h6>
                                                    <input type="number" name="periodo_curso" placeholder=""
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-muted">Modalidade</h6>
                                                    <select class="select2 form-control mb-3 custom-select"
                                                        name="modalidade_curso" style="width: 100%; height:36px;">
                                                        <option value="presencial">Presencial</option>
                                                        <option value="ead">Ead</option>

                                                    </select>
                                                </div>
                                            </div>
                                            </br>
                                            <div class="row">
                                                <div class="col-4 col-sm-12">
                                                    <h6 class="text-muted">Categoria</h6>
                                                    <select class="select2 form-control mb-3 custom-select"
                                                        name="categoria" style="width: 100%; height:36px;">
                                                        <?php
                                                            $sql_categoria = "SELECT * FROM `tbl_categorias`";
                                                            $result = mysqli_query($conn, $sql_categoria);

                                                            if (mysqli_num_rows($result) > 0) {
                                                                $firstIteration = true; 

                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                   
                                                                    $selected = $firstIteration ? 'selected' : '';

                                                                  
                                                                    echo '<option value="' . $row["id"] . '" ' . $selected . '>' . $row["nome"] . '</option>';

                                                                    
                                                                    $firstIteration = false;
                                                                }
                                                            }
                                                            ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-muted">Preço</h6>
                                                    <input type="number" name="valor_curso" placeholder="R$"
                                                        class="form-control" required>
                                                </div>

                                                <div class="col-4">
                                                    <h6 class="text-muted">Mostrar no site</h6>
                                                    <select class="select2 form-control mb-3 custom-select"
                                                        name="mostrar_site" style="width: 100%; height:36px;">
                                                        <option value="1">SIM</option>
                                                        <option value="0">NÃO</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Foto</h4>
                                            <p class="text-muted font-14">Selecione a imagem do curso</p>
                                            <div class="mb-3">
                                                <div class="dropzone heigth70px">
                                                    <div class="fallback">
                                                        <input name="foto_curso" type="file" accept="image/*" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="acao" value="cadastrar_cursos">

                                            <div class="text-center m-t-15">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light">Gravar
                                                    curso</button>
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