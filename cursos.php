<?php 
$namePag='Cursos';
$description = 'Cursos FAPI';
include 'header.php'; 
include('db_connection.php');

$itemsPerPage = 9;

$categoriaFilter = isset($_GET['categoria']) &&  $_GET['categoria'] !== ""  ? "AND categoria_id = {$_GET['categoria']}" : "";
$modalidadeFilter = isset($_GET['modalidade']) && $_GET['modalidade'] !==""  ? "AND modalidade = '{$_GET['modalidade']}'" : "";
$tipoFilter = isset($_GET['tipo']) && $_GET['tipo'] !==""  ? "AND tipo = '{$_GET['tipo']}'" : "";

$totalQuery = "SELECT COUNT(*) as total FROM tbl_cursos WHERE mostrar_site = 1 {$categoriaFilter} {$modalidadeFilter} {$tipoFilter}";

$totalResult = mysqli_query($conn, $totalQuery);
if (!$totalResult) {
   die("Erro ao consultar o banco de dados: " . mysqli_error($conn));
}
$totalRowCount = mysqli_fetch_assoc($totalResult)['total'];

$totalPages = ceil($totalRowCount / $itemsPerPage);

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

$startIndex = ($currentPage - 1) * $itemsPerPage;

$query = "SELECT * FROM tbl_cursos WHERE mostrar_site = 1 {$categoriaFilter} {$modalidadeFilter} {$tipoFilter} LIMIT $startIndex, $itemsPerPage";


$result = mysqli_query($conn, $query);


if (!$result) {
   die("Erro ao consultar o banco de dados: " . mysqli_error($conn));
}
$sql_categorias = "SELECT * FROM tbl_categorias";
$result_categorias = mysqli_query($conn, $sql_categorias);

if (!$result_categorias) {
   die("Erro ao consultar o banco de dados: " . mysqli_error($conn));
}
?>

<section class="course__area pt-120 pb-120">
    <div class="container">
        <div class="course__tab-inner grey-bg-2 mb-50">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="course__tab-wrapper d-flex align-items-center">
                        <div class="course__tab-btn">
                            <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="grid-tab" data-bs-toggle="tab"
                                        data-bs-target="#grid" type="button" role="tab" aria-controls="grid"
                                        aria-selected="true">
                                        <svg class="grid" viewBox="0 0 24 24">
                                            <rect x="3" y="3" class="st0" width="7" height="7" />
                                            <rect x="14" y="3" class="st0" width="7" height="7" />
                                            <rect x="14" y="14" class="st0" width="7" height="7" />
                                            <rect x="3" y="14" class="st0" width="7" height="7" />
                                        </svg>
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="course__view">
                            <h4>Mostrando <?php echo $startIndex + 1; ?> -
                                <?php echo min($startIndex + $itemsPerPage, $totalRowCount); ?> de
                                <?php echo $totalRowCount; ?></h4>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row d-flex flex-wrap reverse">
            <div class="col-xxl-9 col-lg-9 col-sm-12 ">
                <div class="course__tab-conent pb-40">
                    <div class="tab-content" id="courseTabContent">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <!-- course start  -->
                            <div class="tp-courses-2__section">
                                <div class="tp-courses-2__tab-content">
                                    <div class="row">
                                        <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                       
                                       echo '<div class="col-lg-4 col-md-6">
                                                <div class="tp-courses__item mb-30">
                                                   <div class="tp-courses__thumb w-img fix p-relative">
                                                      <img src='.$row['foto'].' alt="">
                                                      <span class="tp-courses__cat ';
                                                      if ($row['tipo'] == 'graduacao') {
                                                         echo 'cat-color-1"><a href="#">Bacharelado</a>';
                                                     } elseif ($row['tipo'] == 'pos') {
                                                         echo 'cat-color-2"><a href="#">Pós graduação</a>';
                                                     } elseif ($row['tipo'] == 'extensao') {
                                                         echo 'cat-color-3"><a href="#">Extensão</a>';
                                                     }
                                                      
                                        echo '
                                                      </span>
                                                   </div>
                                                   <div class="tp-courses__content white-bg">
                                                      <div class="tp-courses__meta">
                                                         
                                                         <span><i class="fa-light fa-chalkboard-user"></i>
                                                         '.($row['modalidade'] == 'presencial' ? 'Presencial' : 'Ead').'
                                                         </span>
                                                         <span><i class="fa-light fa-calendar-days"></i>'.$row['periodo'].' semestres</span>
                                                      </div>
                                                      <h3 class="tp-courses__title">
                                                          <a href="course-details.html">'.$row['nome'].'</a>
                                                      </h3>
                                                     
                                                      <div class="tp-courses__price d-flex justify-content-between">
                                                         <div class="tp-courses__time">
                                                             <span><a href="course-details.html" class="more-btn">Veja mais <i
                                                                 class="fa-regular fa-arrow-right"></i></a>
                                                             </span>
                                                         </div>
                                                        
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>';
                                     
                                    }

                                 mysqli_close($conn);
                              ?>



                                    </div>
                                </div>
                            </div>
                            <!-- course end  -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-3 col-sm-12 ">
                <div class="filter-list">
                    <form method="GET" action="">
                        <div class="form-group d-flex flex-column mb-15">
                            <label for="categoria">Categoria:</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <option value="">Todas as categorias</option>
                                <?php
                                       while ($categoria = mysqli_fetch_assoc($result_categorias)) {
                                       $selected = isset($_GET['categoria']) && $_GET['categoria'] == $categoria['id'] ? 'selected' : '';
                                       echo '<option value="' . $categoria['id'] . '" ' . $selected . '>' . $categoria['nome'] . '</option>';
                                    }
                                    ?>
                            </select>
                        </div>

                        <div class="form-group d-flex d-flex flex-column mb-15">
                            <label for="modalidade">Modalidade:</label>
                            <select class="form-control" id="modalidade" name="modalidade">
                                <option value="">Todas as modalidades</option>
                                <option value="presencial"
                                    <?php echo isset($_GET['modalidade']) && $_GET['modalidade'] == 'presencial' ? 'selected' : ''; ?>>
                                    Presencial</option>
                                <option value="ead"
                                    <?php echo isset($_GET['modalidade']) && $_GET['modalidade'] == 'ead' ? 'selected' : ''; ?>>
                                    EAD</option>

                            </select>
                        </div>
                        <div class="form-group d-flex d-flex flex-column mb-15">
                            <label for="tipo">Tipos:</label>
                            <select class="form-control" id="tipo" name="tipo">
                                <option value="">Todas os tipos</option>
                                <option value="graduacao"
                                    <?php echo isset($_GET['tipo']) && $_GET['tipo'] == 'graduacao' ? 'selected' : ''; ?>>
                                    Graduação</option>
                                <option value="pos"
                                    <?php echo isset($_GET['tipo']) && $_GET['tipo'] == 'pos' ? 'selected' : ''; ?>>
                                    Pós graduação</option>
                                <option value="pos"
                                    <?php echo isset($_GET['tipo']) && $_GET['tipo'] == 'extensao' ? 'selected' : ''; ?>>
                                    Extensão</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mb-20">Filtrar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xxl-12">
                <div class="basic-pagination">
                    <nav>
                        <ul>
                            <li>
                                <?php if ($currentPage > 1) : ?>
                                <a href="?page=<?php echo $currentPage - 1; ?>">
                                    <i class="far fa-angle-left"></i>
                                </a>
                                <?php else : ?>
                                <span><i class="far fa-angle-left"></i></span>
                                <?php endif; ?>
                            </li>
                            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li>
                                <a href="?page=<?php echo $i; ?>"
                                    <?php echo ($i == $currentPage) ? 'class="current"' : ''; ?>>
                                    <?php echo $i; ?>
                                </a>
                            </li>
                            <?php endfor; ?>
                            <li>
                                <?php if ($currentPage < $totalPages) : ?>
                                <a href="?page=<?php echo $currentPage + 1; ?>">
                                    <i class="far fa-angle-right"></i>
                                </a>
                                <?php else : ?>
                                <span><i class="far fa-angle-right"></i></span>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php include 'footer.php'; ?>