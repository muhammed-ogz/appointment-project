<?php view('static/header') ?>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     <header>
          <div class="container">
               <div class="row">
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>+90(500) 999 99 90</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> Pazartesi - Cuma günleri arası
                              08.00 - 18.00</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a
                                   href="mailto:muhammetnabioguz@gmail.com">muhammetnabioguz@gmail.com</a></span>
                    </div>
               </div>
          </div>
     </header>
     
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"> Randevu Web App |
                         Muhammed Oğuz</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Anasayfa</a></li>
                         <li><a href="#about" class="smoothScroll">Hakkımızda</a></li>
                         <li class="appointment-btn"><a href="#appointment">Randevu Al</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s"> Randevu Uygulamasına hoşgeldiniz</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In blanditiis odit neque
                                        commodi quasi aliquid unde repellat ad quia adipisci!</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Kuaför Lorem Ipsum</h3>
                                        <p>Genel Müdür</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                         <figure class="profile wow fadeInUp" data-wow-delay="1s">
                              <figcaption>
                                   <h2>Hakkımızda</h2>
                              </figcaption>
                         </figure>
                         <h4>Ekibimiz sizler için çalışmaya hazır ! Şeffaf işçilik adı altında aşağı tarafta ekip
                              üyelerimizin bilgileri yer almaktadır. </h4>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/team-image1.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Kuaför 1</h3>
                                   <p>Epilasyon Uzmanı</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +90 555 555 55 55</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">kuafor1@testmail.mail</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/team-image2.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Kuaför 2</h3>
                                   <p>Manikür - Pedikür Uzmanı</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +90 532 532 32 32</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">kuafor2@testmail.mail</a></p>
                                   </div>
                                   <br><br><br>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/team-image3.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Kuaför 3</h3>
                                   <p>Saç Bakım Uzmanı</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +90 551 551 51 51</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">kuafor3@testmail.mail</a></p>
                                   </div>
                                   <br><br><br>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>



     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <br>
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <form id="appointment-form" role="form" method="post" action="yonetim/randevukayit.php">

                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Randevu Alın</h2>
                              </div>
                              <?php echo get_session('error') != false ? '<div class = "alert alert-' . $_SESSION['error'].['type']. '">' . $_SESSION['error'].['message']. '</div>' : null;
                              ?>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Adınız</label>
                                        <input type="text" class="form-control" id="name" name="adsoyad"
                                             placeholder="Tam Adınız" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                             placeholder="@">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Tarih</label>
                                        <input type="date" name="randevutarih" value="" class="form-control" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Bölüm</label>
                                        <select class="form-control" name="bolum">
                                             <option>Epilasyon</option>
                                             <option>Manikür-Pedikür</option>
                                             <option>Saç Bakım</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Telefon Numaranız</label>
                                        <input type="tel" class="form-control" id="phone" name="telno"
                                             placeholder="(500)-000-00-00" required>
                                        <label for="Message">Ek Mesajınız</label>
                                        <textarea class="form-control" rows="5" id="message" name="mesaj"
                                             placeholder="Mesaj"></textarea>
                                        <button type="submit" class="form-control btn-blue" id="cf-submit"
                                             name="submit">Randevu Al</button>
                                   </div>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>




     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5" style="background-color: #929b65;">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">İletişime Geç</h4>
                              <p>Bize 7/24 ulaşabileceğiniz iletişim kanallarımız.</p>

                              <div class="contact-info">
                                   <h4>İletişim Bilgileri</h4>
                                   <p>Telefon : +90 (500) 000 00 00</p>
                                   <p>E-Mail Adresi : <a href="#">iletisim@testmail.mail</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">

                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Çalışma Saatlerimiz</h4>
                                   <p>Pazartesi - Cuma <span>08:00 - 18:00</span></p>
                                   <p>Cumartesi <span>08:00 - 13:00</span></p>
                                   <p>Pazar <span>Kapalı</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p style="color : white;">Copyright &copy; 2024 | Muhammed Oğuz</p>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/jquery.sticky.js"></script>
     <script src="assets/js/jquery.stellar.min.js"></script>
     <script src="assets/js/wow.min.js"></script>
     <script src="assets/js/smoothscroll.js"></script>
     <script src="assets/js/owl.carousel.min.js"></script>
     <script src="assets/js/custom.js"></script>
     <script src="https://kit.fontawesome.com/8710cfdb2c.js" crossorigin="anonymous"></script>

</body>

</html>