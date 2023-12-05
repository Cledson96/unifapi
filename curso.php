<?php

$namePag='Curso';
$description = 'Cursos FAPI';
include 'header.php'; 
include('db_connection.php');

    if (isset($_GET['id'])) {
        $id_curso = $_GET['id'];
        $query = "SELECT * FROM tbl_cursos WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
    
        mysqli_stmt_bind_param($stmt, "i", $id_curso);
    
        mysqli_stmt_execute($stmt);
    
        $result = mysqli_stmt_get_result($stmt);
    
        $curso = mysqli_fetch_assoc($result);
    
        mysqli_stmt_close($stmt);

      if($curso){
         $query2 = "SELECT * FROM tbl_cursos WHERE categoria_id = ?";
         $stmt2 = mysqli_prepare($conn, $query2);
     
         mysqli_stmt_bind_param($stmt2, "i", $curso['categoria_id']);
     
         mysqli_stmt_execute($stmt2);
     
         $result2 = mysqli_stmt_get_result($stmt2);
     
         $cursoRelacionado = mysqli_fetch_assoc($result2);
     
         mysqli_stmt_close($stmt2);
      }

        mysqli_close($conn);
        if (!$curso) {
         echo "<script>window.location.href = 'cursos.php';</script>";
        }
    } else {
      echo "<script>window.location.href = 'cursos.php';</script>";
    }

?>

<body>

    <main>

        <div class="course-details pt-60">
            <div class="container">
                <div class="course-details__header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="page__title-content mb-25">
                                    <?php
                                     echo'<span class="'; if ($curso['tipo'] == 'graduacao') {
                                       echo 'page__title-pre">Graduação</span>';
                                   } elseif ($curso['tipo'] == 'pos') {
                                       echo 'page__title-pre2">Pós graduação</span>';
                                   } elseif ($curso['tipo'] == 'extensao') {
                                       echo 'page__title-pre3">Extensão</span>';
                                   }
                                  
                                    ?>
                                    <h1 class="page__title"> <?php echo $curso['nome'] ?></h1>
                                </div>

                                <div class="course-details__content">
                                    <div class="course__img w-img mb-30">
                                        <img src=<?php echo $curso['foto'] ?> alt="">
                                    </div>
                                    <div class="course__tab-2 mb-45">
                                        <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="description-tab"
                                                    data-bs-toggle="tab" data-bs-target="#description" type="button"
                                                    role="tab" aria-controls="description" aria-selected="true"> <i
                                                        class="icon_ribbon_alt"></i> <span>Descrição</span> </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course__tab-content mb-95">
                                    <div class="tab-content" id="courseTabContent">
                                        <div class="tab-pane fade active show" id="description" role="tabpanel"
                                            aria-labelledby="description-tab">
                                            <div class="course__description">
                                                <h3><?php echo $curso['nome'] ?></h3>
                                                <p><?php echo $curso['descricao'] ?></p>


                                                <div class="course__description-list mb-45">
                                                    <h4>Venha para UNIFAPI</h4>
                                                    <ul>
                                                        <li> <i class="icon_check"></i> Referência em Pinhais
                                                        </li>
                                                        <li> <i class="icon_check"></i> Cursos validados pelo MEC</li>
                                                        <li> <i class="icon_check"></i> Professores de excelência</li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="course__share">
                                            <h3>Compartilhe :</h3>
                                            <ul>
                                                <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                                                <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                                <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                <div class="course__sidebar pl-70 p-relative">
                                    <div class="course__sidebar-widget-2 white-bg mb-20">
                                        <div class="course__video">
                                            <div class="course__video-thumb w-img mb-25">
                                                <img src=<?php echo $curso['foto'] ?> alt="">

                                            </div>

                                            <div class="course__video-content mb-35">
                                                <ul>
                                                    <li class="d-flex align-items-center">
                                                        <div class="course__video-icon">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" viewBox="0 0 16 16"
                                                                style="enable-background:new 0 0 16 16;"
                                                                xml:space="preserve">
                                                                <path class="st0"
                                                                    d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                                                                <polyline class="st0"
                                                                    points="6,14.7 6,8 10,8 10,14.7 " />
                                                            </svg>
                                                        </div>
                                                        <div class="course__video-info">
                                                            <h5><span>Instituição :</span> UNIFAPI Pinhais</h5>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <div class="course__video-icon">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" viewBox="0 0 24 24"
                                                                style="enable-background:new 0 0 24 24;"
                                                                xml:space="preserve">
                                                                <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20" />
                                                                <path class="st0"
                                                                    d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z" />
                                                            </svg>
                                                        </div>
                                                        <div class="course__video-info">
                                                            <h5><span>Modalidade
                                                                    :</span><?php echo ucfirst($curso['modalidade']); ?>
                                                            </h5>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <div class="course__video-icon">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" viewBox="0 0 16 16"
                                                                style="enable-background:new 0 0 16 16;"
                                                                xml:space="preserve">
                                                                <circle class="st0" cx="8" cy="8" r="6.7" />
                                                                <polyline class="st0" points="8,4 8,8 10.7,9.3 " />
                                                            </svg>
                                                        </div>
                                                        <div class="course__video-info">
                                                            <h5><span>Duração :</span><?php echo $curso['periodo'] ?>
                                                                periodos</h5>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="course__enroll-btn p-relative z-index-1">
                                                <a href="#" class="tp-btn w-100">
                                                    <span>Inscreva-se <i class="fa-regular fa-arrow-right"></i> </span>
                                                    <div class="transition"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course__sidebar-widget-2 white-bg mb-20">
                                        <div class="course__sidebar-course">
                                            <h3 class="course__sidebar-title">Cursos relacionados</h3>
                                            <ul>
                                                <?php
                                    while ($row = mysqli_fetch_assoc($result2)) {
                                     echo'  <li>
                                             <div class="course__sm d-flex align-items-center mb-30">
                                             <div class="course__sm-thumb mr-20">
                                               <a href="#">
                                                   <img src='.$row['foto'].' alt="">
                                               </a>
                                             </div>
                                             <div class="course__sm-content">

                                               <h5><a href="curso.php?id='.$row['id'].'">'.$row['nome'].'</a></h5>

                                             </div>
                                             </div>
                                           </li>';
                                    }
                                    ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>


    <?php include 'footer.php'; ?>
</body>