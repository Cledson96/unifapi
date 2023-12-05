<?php
	include "inc/security.php";
	protegePagina();
	include 'header.php'; 
	include 'inc/functions-obras.php'; 
    $id_obra = $_GET['id'];

    $sql_obras = "SELECT * FROM `tbl_obra` WHERE id_obra =$id_obra ";
    $result = mysqli_query($conn, $sql_obras);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
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
                                            <h5>Bem Vindo</h5>
                                        </div>
                                        <a class="dropdown-item text-danger" href="logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
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
                                        <h4 class="page-title">EDITAR OBRA/IMÓVEL <?= $row['id_obra']; ?></h4>
                                    </div>
                                </div>
                            </div>
                        <form action="inc/functions-obras.php" method="POST" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <input class="form-control" type="text" name="id_obra" value="<?= $row["id_obra"]; ?>" style="display:none" />
                                            <div>
                                                <label class="mb-0"><b>Título</b></label>
                                                <input type="text" class="form-control" maxlength="100" name="titulo_obra" id="placement" value="<?= $row['titulo_obra']; ?>" />
                                            </div>
                                            <div class="m-t-20">
                                                <label class="mb-0"><b>Descrição</b></label>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3" name="descricao_obra" ><?= $row['descricao_obra']; ?></textarea>
                                            </div>  
                                            </br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="text-muted">Tipo de obra</h6>
                                                    <select class="select2 form-control mb-3 custom-select" name="tipo_obra" style="width: 100%; height:36px;" value="<?= $row['tipo_obra']; ?>">
                                                        <option value="Residência">Residência</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="text-muted">Status da obra</h6>
                                                    <select class="select2 form-control mb-3 custom-select" name="status_obra" style="width: 100%; height:36px;">
                                                        <option value="Na planta" <?=$row["status_obra"] == "Na planta" ? "selected" : ""; ?> >Na planta</option>
                                                        <option value="Em andamento" <?=$row["status_obra"] == "Em andamento" ? "selected" : ""; ?> >Em andamento</option>
                                                        <option value="Concluída" <?=$row["status_obra"] == "Concluída" ? "selected" : ""; ?> >Concluída</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="text-muted">Preço</h6>
                                                    <input type="text" name="valor_obra" placeholder="R$" value="<?= $row['valor_obra']; ?>" class="form-control">
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="text-muted">Mostrar no site</h6>
                                                    <select class="select2 form-control mb-3 custom-select" name="mostrar_site" style="width: 100%; height:36px;">
                                                        <option value="1" <?=$row["mostrar_site"] == "1" ? "selected" : ""; ?> >SIM</option>
                                                        <option value="0" <?=$row["mostrar_site"] == "0" ? "selected" : ""; ?> >NÃO</option>
                                                    </select>
                                                </div>                                                
                                            </div>  
                                        </div>
                                    </div>                
                                </div> 
            
                                <div class="col-lg-6">                                             
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Imagens</h4>
                                            <p class="text-muted font-14">Selecione as imagens da obra/imóvel</p>
                                            <div class="mb-3">
                                                <div class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple="multiple">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="acao" value="alterar_obras" >

                                            <div class="text-center m-t-15">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">SALVAR ALTERAÇÃO</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>   
                            </div> 
                        </div>
                    </div>
                    <?php } } ?> 
                </div>
<?php include 'footer.php'; ?>