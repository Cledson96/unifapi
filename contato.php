<?php 
$namePag='Contato';
$description = 'Página de contato FAPI';
include 'header.php'; 
?>

<section class="contact__area pt-115 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-7 col-xl-7 col-lg-6">
            <div class="contact__wrapper">
               <div class="section__title-wrapper mb-40">
                  <h2 class="tp-section__title">Fale conosco</h2>
                  <p>Tem alguma dúvida ou sugestão? Envie-nos sua mensagem, ficaremos felizes em ajudar.</p>
               </div>
               <div class="contact__form mb-30">
                  <form action="assets/mail.php" id="contact-form">
                     <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="contact__form-input">
                              <input type="text" placeholder="Seu nome" name="name">
                           </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="contact__form-input">
                              <input type="email" placeholder="Seu email" name="email">
                           </div>
                        </div>
                        <div class="col-xxl-12">
                           <div class="contact__form-input">
                              <input type="text" placeholder="Assunto" name="subject">
                           </div>
                        </div>
                        <div class="col-xxl-12">
                           <div class="contact__form-input">
                              <textarea placeholder="Mensagem" name="message"></textarea>
                           </div>
                        </div>
                        <div class="col-xxl-12">
                           <div class="contact__btn">
                              <button type="submit" class="tp-btn"><span>Enviar mensagem</span> </button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="contact-response">
                  <p class="ajax-response"></p>
               </div>
            </div>
         </div>
         <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
            <div class="contact__info white-bg p-relative z-index-1">
               <div class="contact__shape">
                  <img class="contact-shape-1" src="assets/img/contact/contact-shape-1.png" alt="">
                  <img class="contact-shape-2" src="assets/img/contact/contact-shape-2.png" alt="">
                  <img class="contact-shape-3" src="assets/img/contact/contact-shape-3.png" alt="">
               </div>
               <div class="contact__info-inner white-bg">
                  <ul>
                     <li>
                        <div class="contact__info-item d-flex align-items-start mb-35">
                           <div class="contact__info-icon mr-15">
                              <svg class="map" viewBox="0 0 24 24">
                                 <path class="st0" d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"/>
                                 <circle class="st0" cx="12" cy="10" r="3"/>
                              </svg>
                           </div>
                           <div class="contact__info-text">
                              <h4>Câmpus Pinhais</h4>
                              <p><a target="_blank" href="https://www.google.com/maps/place/FAPI+-+Faculdade+de+Pinhais/@-25.4447835,-49.1916712,17z/data=!3m1!4b1!4m6!3m5!1s0x94dcefe059fdd707:0xce9ac61116904514!8m2!3d-25.4447884!4d-49.1890963!16s%2Fg%2F11h5n1y4z1?entry=ttu">Avenida Camilo di Lellis, 1065 CEP 83323-000 – Pinhais/PR</a></p>

                           </div>
                        </div>
                     </li>
                     <li> 
                        <div class="contact__info-item d-flex align-items-start mb-35">
                           <div class="contact__info-icon mr-15">
                              <svg class="mail" viewBox="0 0 24 24">
                                 <path class="st0" d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z"/>
                                 <polyline class="st0" points="22,6 12,13 2,6 "/>
                              </svg>
                           </div>
                           <div class="contact__info-text">
                              <h4>Email</h4>
                              <p><a href="mailto:secretaria@fapi-pinhais.com.br">secretaria@fapi-pinhais.com.br</a></p>
                              <p><a href="mailto:contato@fapi-pinhais.com.br">contato@fapi-pinhais.com.br</a></p>
                              
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="contact__info-item d-flex align-items-start mb-35">
                           <div class="contact__info-icon mr-15">
                              <svg class="call" viewBox="0 0 24 24">
                                 <path class="st0" d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z"/>
                                 </svg>
                           </div>
                           <div class="contact__info-text">
                              <h4>Telefones</h4>
                              <p><a href="tel:+554136676000">(41)3667-6000</a></p>
                              <p><a href="tel:+5541991892600">(41)99189-2600</a></p>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <div class="contact__social pl-30">
                     <h4>Nossas redes</h4>
                     <ul>
                        <li><a target="_blank" href="https://www.facebook.com/FaculdadeDePinhais" class="fb" ><i class="social_facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/faculdadedepinhais/" class="pin" ><i class="social_instagram"></i></a></li>
                      
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

   <div class="tp-contact-map">
      <div class="container-fluid p-0">
         <div class="tp-map-height">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.804811398357!2d-49.191671224609976!3d-25.444788377552506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcefe059fdd707%3A0xce9ac61116904514!2sFAPI%20-%20Faculdade%20de%20Pinhais!5e0!3m2!1spt-BR!2sus!4v1699672638947!5m2!1spt-BR!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
</main>
<?php include 'footer.php' ?>