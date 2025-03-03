<!DOCTYPE html>
<html lang="en">
<head>

<title>YILMAZ HASTANESİ</title>
     <meta name="theme-color" content="#a5c422" />
     <link rel="shortcut icon" type="image/png" href="{{ asset('images/ico.png') }}"/>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}">

     <style type="text/css">
.iletisimbutonu {
     background-color:#a6c422;
     -moz-border-radius:4px;
     -webkit-border-radius:4px;
     border-radius:4px;
     display:inline-block;
     cursor:pointer;
     color:#ffffff;
     font-family:Arial;
     font-size:16px;
     padding:10px 20px;
     text-decoration:none;
     text-shadow:0px 1px 0px #2f6627;
}
.iletisimbutonu:hover {
     background-color:#5cbf2a;
}
.iletisimbutonu:active {
     position:relative;
     top:1px;
}
</style>



</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p><a href="yonetim/">Giriş Yap</a> / <a href="yonetim/kayitol.php">Üye Ol</a></p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> (505)685 55 88</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 - 18:00 (Pzt-Cum)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">iletisim@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{ route('home') }}" class="navbar-brand"><i class="fa fa-stethoscope"></i> YILMAZ Hastanesi</a>
               </div>

              <!-- MENU LINKS -->
              <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{ route('home') }}" class="smoothScroll">Anasayfa</a></li>
                         <li><a href="#about" class="smoothScroll">Hakkımızda</a></li>
                         <li><a href="#team" class="smoothScroll">Doktorlarımız</a></li>
                         <li><a href="#footer" class="smoothScroll">İletişim</a></li>
                         <li class="appointment-btn"><a href="#appointment">Randevu Al</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>ALANINLARINDA EN İYİLERDEN OLAN</h3>
                                             <h1>Uzman Doktorlar</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Doktorlarımızla Tanışın</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>SİZE EN İYİ HİZMETİ VEREBİLMEK ADINA BÜTÜN KADROMUZ İLE</h3>
                                             <h1>Biz Buradayız</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Hastanemiz Hakkında</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>DOKTORLARIMIZ TARAFINDAN YAZILAN ÜCRETSİZ</h3>
                                             <h1>Sağlık Rehberimizi Okudunuz Mu?</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Hemen Okuyun</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s"><i class="fa fa-stethoscope"></i> YILMAZ HASTANESİne Hoş Geldiniz </h2><!--<i class="fa fa-heartbeat">-->
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Hastanenemiz 2020 Tarihinde kurulmuş olup hedefimiz daima hastalarımızın sağlığığla en güzel şekilde ilgilenmektir.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Mehmet Yılmaz</h3>
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

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Doktorlarımız</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/team-image1.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Dr. Reyhan Yılmaz</h3>
                                        <p>Genel Cerrahi</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 123</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">reyhanyilmaz@hotmail.com</a></p>
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
                                        <h3>Dr. Emine Özdemir</h3>
                                        <p>Diyetisyen</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 321</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">emineozdemir@hotmail.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-facebook-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/team-image3.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Dr. Berna Özdemir</h3>
                                        <p>Kardiyolog</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 852</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">bernaozdemir@hotmail.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-twitter"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">




                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Sağlık Rehberi</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="#">
                                   <img src="images/yazi1.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>Mart 08, 2025</span>
                                   <h3><a href="#">Kalp sağlığınızı korumanın en iyi yolu: Spor</a></h3>
                                   <p>Spor yapmak kalp sağlığını koruyor.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Dr. Berna Özdemir</h5>
                                             <p>Kardiyolog</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="#">
                                   <img src="images/yazi2.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>Ekim 20, 2025</span>
                                   <h3><a href="#">Yeni yılda sağlıklı beslenmek için öneriler</a></h3>
                                   <p>Kendinizi daha mutlu ve enerjik hissetmek için.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Yazar Dr. Emine Özdemir</h5>
                                             <p>Diyetisyen</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="#">
                                   <img src="images/yazi3.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>Şubat 27, 2018</span>
                                   <h3><a href="#">Griple ilgili doğru bilinen yanlışlar</a></h3>
                                   <p>Çoğumuzun faydalı sandığı zararlı şeyler.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Yazar Dr. Reyhan Özdemir</h5>
                                             <p>Genel Cerrahi</p>
                                        </div>
                                   </div>
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
                <img src="{{ asset('images/appointment-image.jpg') }}" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                    <h2>Randevu Alın</h2>
                    <p>Sağlığınız bizim için önemli. Online randevu sistemimiz ile hızlıca randevu alabilirsiniz.</p>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.8s">
                    <a href="{{ route('appointment.index') }}" class="btn btn-primary btn-lg" style="background-color: #a5c422; border-color: #a5c422;">
                        Randevu Al
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



     <!-- FOOTER -->
     <section id="footer">
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">İletişime Geç</h4>
                              <p>Bize 7/24 ulaşabileceğiniz iletişim kanallarımız.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i>(505)685 55 88</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">iletisim@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                     <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Son Yazılar</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/yazi1.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Kalp sağlığınızı korumanın en iyi yolu: Spor</h5></a>
                                        <span>Mart 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/yazi2.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Yeni yılda sağlıklı beslenmek için öneriler</h5></a>
                                        <span>Ekim 20, 2018</span>
                                   </div>
                              </div>
                         </div>
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
                                   <p>Copyright &copy; 2025 YILMAZ Hastanesi 
                                   
                                   | Design: <a rel="nofollow" href="https://www.facebook.com/tooplate" target="_parent">Yılmaz</a></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Laboratuvar Sonuçları</a>
                                   <a href="#">Hasta Hakları ve Sorumlulukları</a>
                                   <a href="#">Kariyer</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>
</section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>