<?php 
$namePag='Biblioteca';
$description = 'Biblioteca FAPI';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?= $namePag ?> - Grupo Educacional FAPI</title>
   <meta name="description" content="<?php $description; ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

   <!-- CSS here  -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/elegent-icons.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">
   <!-- css end  here-->
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- pre loader area start -->
   <div class="tp-preloader">
      <div class="tp-preloader__center">
         <span>
            <svg
                     viewBox="0 0 24 24"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
               >
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                     ></g>
                     <g id="SVGRepo_iconCarrier">
                        <path
                           d="M17.6566 12H21M3 12H6.34315M12 6.34342L12 3M12 21L12 17.6569"
                           stroke="#a9acb7"
                           stroke-width="1.5"
                           stroke-linecap="round"
                           stroke-linejoin="round"
                        ></path>
                        <path
                           d="M16 8.00025L18.3642 5.63611M5.63629 18.364L8.00025 16M8.00022 8.00025L5.63608 5.63611M18.364 18.364L16 16"
                           stroke="#ff0000"
                           stroke-width="1.5"
                           stroke-linecap="round"
                           stroke-linejoin="round"
                        >
                           <animateTransform
                           attributeName="transform"
                           attributeType="XML"
                           type="rotate"
                           from="0 12 12"
                           to="360 12 12"
                           dur="2s"
                           repeatCount="indefinite"
                           />
                        </path>
                     </g>
            </svg>

         </span>
      </div>
   </div>
   <!-- pre loader area end -->

    <!-- back to top start -->
    <button class="tp-backtotop">
      <span><i class="fal fa-angle-double-up"></i></span>
   </button>
   <header>
      <div class="tp-header__area tp-header__transparent">
         <div class="tp-header__main " id="header-sticky">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-12">
                     <div class="logo">
                        <a href="index.php">
                           <img src="assets/img/logo/logo-branca.png" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-xxl-11 col-xl-11 col-lg-11 d-none d-lg-block">
                     <div class="main-menu">
                        <nav id="mobile-menu">
                           <ul>
                                 <li>
                                    <a href="a-fapi.php">A FAPI</a>
                                 </li>
                                 <li>
                                    <a href="cursos.php">CURSOS</a>
                                 </li>
                                 <li>
                                    <a href="secretaria.php">SECRETARIA</a>
                                 </li>
                                 <li>
                                    <a href="biblioteca.php">BIBLIOTECA</a>
                                 </li>
                                 <li>
                                    <a href="fapi-informa.php">NOTÍCIAS</a>
                                 </li>
                                 <!--<li class="has-dropdown">
                                    <a href="#">PÁGINAS</a>
                                    <ul class="submenu">
                                       <li><a href="event.html">Events</a></li>
                                       <li><a href="event-details.html">Event Details</a></li>
                                       <li><a href="instructor.html">Instructor V1</a></li>
                                       <li><a href="instructor-2.html">Instructor V2</a></li>
                                       <li><a href="instructor-details.html">Instructor Details</a></li>
                                       <li><a href="wishlist.html">Wishlist</a></li>
                                       <li><a href="sign-in.html">Sign In</a></li>
                                       <li><a href="sign-up.html">Sign Up</a></li>
                                       <li><a href="faq.html">Faq</a></li>
                                       <li><a href="404.html">404</a></li>
                                    </ul>
                                 </li>-->
                                 <li>
                                    <a href="fapi-talentos.php">FAPI TALENTOS</a>
                                 </li>
                                 <li>
                                    <a href="extensao-e-pos.php">EXTENSÃO E PÓS</a>
                                 </li>
                                 <li>
                                    <a href="outbox-fapi.php">OUTBOXFAPI</a>
                                 </li>                                 
                                 <li>
                                    <a href="contato.php">CONTATO</a>
                                 </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->

   <!-- offcanvas area start -->
   <div class="offcanvas__area" >
      <div class="offcanvas__wrapper">
         <div class="offcanvas__content">
            <div class="offcanvas__close text-end">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <i class="fal fa-times"></i>
               </button>
            </div>
            <div class="offcanvas__top mb-40">
               <div class="offcanvas__subtitle">
                  <span class="text-white d-inline-block mb-25 d-none d-lg-block">ELEVATE YOUR BUSINESS WITH</span>
               </div>
               <div class="offcanvas__logo mb-40">
                  <a href="index.php">
                     <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="offcanvas-info d-none d-lg-block">
                  <p>Limitless customization options & Elementor compatibility let anyone create a beautiful website
                     with Valiance. </p>
               </div>
               <div class="offcanvas__btn d-none d-lg-block">
                  <a href="contato.php" class="tp-btn">Biblioteca <span></span></a>
               </div>
            </div>
            <div class="mobile-menu fix mb-40"></div>


            <div class="offcamvas__bottom">
               <div class="offcanvas__cta mt-30 mb-20">
                  <h3 class="offcanvas__cta-title">Contact info</h3>
                  <span>27 Division St, New York,</span>
                  <span>+154 4808 84082 4830</span>
                  <span>support@noxia.com</span>
                  <span>Office Hours: 8AM - 5PM</span>
                  <span>Sunday - Wekend Day</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="body-overlay"></div>
   <!-- offcanvas area end -->

   <main>

      <!-- breadcrumb area start -->
      <div class="breadcrumb__area include-bg pt-200 pb-150 breadcrumb__overlay"
         data-background="assets/img/capa/biblioteca.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title"><?= $namePag ?></h3>
                     <div class="breadcrumb__list">
                        <span><a href="#">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        <span><?= $namePag ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="whats-float">
    <a href="https://api.whatsapp.com/send/?phone=5541991892600&text&type=phone_number&app_absent=0"
       target="_blank">
       <i class="fa-brands fa-whatsapp fa-beat"></i><span>WhatsApp<br><small>(41)99189-2600</small></span>
    </a>
    </div>
      <!-- breadcrumb area end -->
      <div class="tp-about-2__section pt-120 pb-90 p-relative fix ">
         <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-6">
                  <div class="tp-about-2__right ">
                     <div class="tp-section__title-wrapper">
                        <h3 class="tp-section__title mb-15">Conheça nossa biblioteca</h3>
                        <p class="mb-40">A Biblioteca Drahomiro Lucio Segalla  Romanowski, foi inaugurada em 15 de outubro de 2.000 e tem por objetivo disseminar a informação a todos os  usuários, independente do tipo de suporte que a informação se apresente, colaborando sempre para o desenvolvimento e dignidade da pessoa humana.</p>
                        <p><strong>Coleção do Acervo:</strong><br/><br/>A biblioteca da FAPI disponibiliza aos seus usuários um acervo com aproximadamente 10.565 títulos e 30.116 exemplares. Distribuídos em suportes impresso e multimídia, divididos entre Livros, Periódicos, Enciclopédias, Anuários, Almanaques, CD´s, DVD´s. Conta também com o acervo digital (Minha Biblioteca FAPI) que aumenta continuamente e atualmente conta com mais de 8.000 títulos em diversas áreas do conhecimento.</p>
                                             
                     </div>
                     <div class="tp-hero__btn-wrappper">
                           <a target="_blank" href="https://fapi-pinhais.edu.br/public/storage/PDF/Regulamento%20Geral%20da%20Biblioteca%202022.pdf" class="tp-btn">
                              <span>Consulte o regulamento <i class="fa-regular fa-arrow-right"></i></span>
                              <div class="transition"></div>
                           </a>
                           <a target="_blank" href="http://187.95.131.38/pergamum/biblioteca/index.php" class="tp-btn">
                              <span>Acesse o acervo online <i class="fa-regular fa-arrow-right"></i></span>
                              <div class="transition"></div>
                           </a>
                           <a target="_blank" href="https://plataforma.bvirtual.com.br/Account/Login" class="tp-btn">
                              <span>Acesse a biblioteca virtual <i class="fa-regular fa-arrow-right"></i></span>
                              <div class="transition"></div>
                           </a>
                      </div>
                  </div>
            </div>
               <div class="col-lg-6">
                  <div class="tp-about-2__img-wrapper p-relative">
                     <div class="tp-about-2__img w-img mb-30">
                        <img src="assets/img/biblioteca/biblioteca.jpg" alt="fapi">
                     </div>
                     <div class="tp-about-2-shapes">
                        <div class="tp-about-2__shapes-1">
                           <img src="assets/img/icons/dots-shapes-2.png" alt="">
                        </div>
                        <div class="tp-about-2__shapes-2 ">
                           <img src="assets/img/icons/theme-circle.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
              

            </div>

         </div>
         <div class="tp-about-2__shapes">
            <div class="tp-about-2__shapes-8">
               <img src="assets/img/icons/lines-shape.png" alt="">
            </div>
            <div class="tp-about-2__shapes-3">
               <img src="assets/img/icons/role-shape-2.png" alt="">
            </div>
            <div class="tp-about-2__shapes-4 ">
               <img src="assets/img/icons/book-blue.png" alt="">
            </div>
         </div>
      </div> 
      <div class="tp-team-2__section pt-40 pb-30 grey-bg-2 ">
            <div class="container">
               <div class="row">
                  <div class="tp-section__title-wrapper mb-10 ">
                     <h3 class="tp-section__title ">
                     Biblioteca virtual
                     </h3>
                  </div>
               </div>

               <div class="row">
               <div class="col-lg-7">
               <a target="_blank" href="https://plataforma.bvirtual.com.br/Account/Login" class="tp-btn" style="text-decoration: underline;color:blue;font-size:16px">
                  Clique aqui e acesse a biblioteca virtual FAPI                
                </a>
                  <p>Caso esteja sem cadastro na Biblioteca Virtual FAPI, favor enviar um email para <a style="color:blue" target="_blank" href="malito:biblioteca@fapi-pinhais.com.br">biblioteca@fapi-pinhais.com.br</a> , com os seguintes dados: <br/>
                     </p>
                     <ul class="ml-30">
                           <li>Nome completo</li>
                           <li>CPF</li>
                           <li>Email institucional (email FAPI)</li>
                           <li>Curso</li>
                        </ul>
               </div>
               <div class="col-lg-5">
                  <div class="tp-about-2__img-wrapper p-relative">
                     <div class="tp-about-2__img w-img mb-30">
                        <img src="assets/img/biblioteca/bibliotecavirtual.jpg" alt="fapi">
                     </div>
                     <div class="tp-about-2-shapes">
                        <div class="tp-about-2__shapes-1">
                           <img src="assets/img/icons/dots-shapes-2.png" alt="">
                        </div>
                        <div class="tp-about-2__shapes-2 ">
                           <img src="assets/img/icons/theme-circle.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>     
               </div>
            </div>
      </div> 
   
</main>
<?php include 'footer.php' ?>