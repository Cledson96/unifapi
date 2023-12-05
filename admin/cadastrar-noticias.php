<?php
	include "inc/security.php";
	protegePagina();
	include 'header.php'; 
	include 'inc/functions-noticias.php'; 
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
                                        <h4 class="page-title">CADASTRAR OBRA/IMÓVEL</h4>
                                    </div>
                                </div>
                            </div>
                        <form action="inc/functions-obras.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div>
                                                <label class="mb-0"><b>Título</b></label>
                                                <input type="text" class="form-control" maxlength="100" name="titulo_obra" id="placement" required />
                                            </div>
                                            <div class="m-t-20">
                                                <label class="mb-0"><b>Descrição</b></label>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3" name="descricao_obra" placeholder="Descrição do imóvel"></textarea>
                                            </div>  
                                            </br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="text-muted">Tipo de obra</h6>
                                                    <select class="select2 form-control mb-3 custom-select" name="tipo_obra" style="width: 100%; height:36px;">
                                                        <option value="Residência">Residência</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="text-muted">Status da obra</h6>
                                                    <select class="select2 form-control mb-3 custom-select" name="status_obra" style="width: 100%; height:36px;">
                                                        <option value="Na planta">Na planta</option>
                                                        <option value="Em andamento">Em andamento</option>
                                                        <option value="Concluída">Concluída</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="text-muted">Preço</h6>
                                                    <input type="text" name="valor_obra" placeholder="R$" class="form-control">
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="text-muted">Mostrar no site</h6>
                                                    <select class="select2 form-control mb-3 custom-select" name="mostrar_site" style="width: 100%; height:36px;">
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
                                            <h4 class="mt-0 header-title">Imagens</h4>
                                            <p class="text-muted font-14">Selecione as imagens da obra/imóvel</p>
                                            <div class="mb-3">
                                                <div class="dropzone">
                                                    <div class="fallback">
                                                        <input name="foto_obra[]" type="file" accept="image/*" multiple="multiple" >
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="acao" value="cadastrar_obras" >

                                            <div class="text-center m-t-15">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Gravar obra</button>
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