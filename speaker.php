<?php
error_reporting(0);
  require_once './forms/php-i18n/i18n.class.php';
  session_start();
if (isset($_POST["lang"])){function clean($string){$string = str_replace(' ', '-', $string);return preg_replace('/[^A-Za-z0-9\-]/', '', $string);}$_SESSION["lang"]=clean($_POST["lang"]);}
  $i18n = new i18n('./forms/php-i18n/lang/lang_{LANGUAGE}.json', './forms/php-i18n/langcache/', 'ar','l');
  $i18n->init();
?>
<!DOCTYPE html>
<html lang="<?php echo $i18n->getappliedLang();?>">
<head>
    <meta charset="UTF-8">
    <meta name="description" >
    <meta name="keywords" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo l::title;?></title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">

        <div class="nav-menu">
            <a href="index.php">
            <img src="img/fits logo.jpeg" alt="" style="width: 95px;height: 55px;">
        </a>
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="active"><a href="./index.php"><?php echo l::menu_home;?></a></li>
                    <li><a href="./about-us.php"><?php echo l::menu_about;?></a></li>
                    <li><a href="./speaker.php"style="font-size:14px"><?php echo l::menu_speaker;?></a></li>
                    <li><a href="./schedule.php"style="font-size:14px"><?php echo l::menu_schedule;?></a></li>
                    <li><a href="./blog.php"style="font-size:14px"><?php echo l::menu_blog;?></a></li>
                    <li><a href="./contact.php"style="font-size:14px"><?php echo l::menu_contact;?></a></li>
                    <li><a href="./partners.php"style="font-size:14px"><?php echo l::menu_partners;?></a></li>
                    <li><div class="switch-lang"> 

            <div class="current-lang">
                <img class="lang-flag" src="img/<?php echo $i18n->getappliedLang();?>.png"/>
              <p class="lang-text"><?php echo l($i18n->getappliedLang());?></p>
            </div>
            <div class="lang-dropdown">
              <?php 
              $languages=array('fr','ar');
              foreach($languages as $l) {
                if ($l != $i18n->getappliedLang()){
              echo '<div class="selecting-lang" lang="'.$l.'"><img class="lang-flag" src="img/'.$l.'.png"/>
                <p class="lang-text">'.l($l).'</p></div>';}}?>
              </div>
            </li>
                </ul>
            </nav>
                  <a href="index.php"> <img src="img/ue.png" alt="" style="width:90px;height: 55px"> </a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2><?php echo l::speakers_h2;?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Speaker Section Begin -->
    <section class="speaker-section spad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/Dalila.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk1_h5;?></h4>
                                        <span><?php echo l::speakers_spk1_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/Dalila-Meftahi-101410274670590"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk1_p;?>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/salah.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk2_h5;?></h4>
                                        <span><?php echo l::speakers_spk2_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/Salah-Jday-%D8%B5%D8%A7%D9%84%D8%AD-%D8%A7%D9%84%D8%AC%D8%AF%D9%8A-260914754077114/"><i class="fa fa-facebook"></i></a>
                                        <a href="https://twitter.com/jdyesaleh?lang=fr"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk2_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/msadek.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk3_h5;?></h4>
                                        <span><?php echo l::speakers_spk3_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk3_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/sihem.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk4_h5;?></h4>
                                        <span><?php echo l::speakers_spk4_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/sihem.msadek"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk4_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/chedli.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk5_h5;?></h4>
                                        <span><?php echo l::speakers_spk5_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/chedly.arfaoui"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk5_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/mohamed.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk6_h5;?></h4>
                                        <span><?php echo l::speakers_spk6_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/mohamed.kouka"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk6_p;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/nour.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk7_h5;?></h4>
                                        <span><?php echo l::speakers_spk7_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/profile.php?id=100004932889410"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk7_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/mounir.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk8_h5;?></h4>
                                        <span><?php echo l::speakers_spk8_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/mounir.argui"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk8_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/kamel.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk9_h5;?></h4>
                                        <span><?php echo l::speakers_spk9_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/profile.php?id=100004619297871"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk9_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/zbidi.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk10_h5;?></h4>
                                        <span><?php echo l::speakers_spk10_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/laroussi.zbidi/"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk10_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/ridha.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk11_h5;?></h4>
                                        <span><?php echo l::speakers_spk11_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/ridha.benmansour.79"><i class="fa fa-facebook"></i></a>
                                        <a href="https://twitter.com/ridhabenmansour"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk11_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/bechir.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk12_h5;?></h4>
                                        <span><?php echo l::speakers_spk12_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/poete.BechirAbdeladhim/"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk12_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/boualleg.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk13_h5;?></h4>
                                        <span><?php echo l::speakers_spk13_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/profile.php?id=100000808013743"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk13_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/mohamed.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk14_h5;?></h4>
                                        <span><?php echo l::speakers_spk14_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="https://www.facebook.com/mohamedtawfikk"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk14_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="img/team-member/ghannam.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo l::speakers_spk15_h5;?></h4>
                                        <span><?php echo l::speakers_spk15_span;?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="facebook.com/ghannam-ghannam-196400257963265/?ref=py_c"><i class="fa fa-facebook"></i></a>
                                        <a href="https://twitter.com/ghannam_ghannam"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo l::speakers_spk15_p;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="load-more">-->
<!--                <a href="#" class="primary-btn">Load More</a>-->
<!--            </div>-->
        </div>
    </section>
    <!-- Speaker Section End -->

    <!-- Newslatter Section Begin -->
<section class="newslatter-section">
<div class="container">
<div class="newslatter-inner set-bg" data-setbg="img/newslatter-bg.jpg">
<div class="ni-text">
<h3><?php echo l::newsletter_h3;?></h3>
<p><?php echo l::newsletter_p;?></p>
</div>
<form class="ni-form">
<input type="text" placeholder="Your email" name="email" type="email" required="">
<button type="button" name="btn"><?php echo l::newsletter_btn;?></button>
<script type="text/javascript">
        var form =document.getElementsByTagName("form")[0];
      form.btn.addEventListener('click', function() {
var http = new XMLHttpRequest();
http.open('POST', 'forms/newsletter.php', true);
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200 && http.responseText){
        form.email.style="background:"+http.responseText;
    }}
http.send("email="+form.email.value);
});

</script>
</form>
</div>
</div>
</section>
    <!-- Newslatter Section End -->

    <!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2><?php echo l::contact_h2;?></h2>
                    <p><?php echo l::contact_p1;?></p>
                </div>
                <div class="cs-text">
                    <div class="ct-address">
                        <span><?php echo l::contact_adr;?></span>
                        <p><?php echo l::contact_p2;?></p>
                    </div>
                    <ul>
                        <li>
                            <span><?php echo l::contact_phone;?></span>
                            26 044 341
                        </li>
                        <li>
                            <span><?php echo l::contact_email;?></span>
                            contact@fits.tn
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cc-map">
                    <iframe
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=jemna%20kbili%20&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            height="580" style="border:0;" allowfullscreen=""></iframe>
                    <div class="map-hover">
                        <i class="fa fa-map-marker"></i>
                        <div class="map-hover-inner">
                            <h5>
                                <?php echo l::contact_h5;?>
                            </h5>
                            <p><?php echo l::contact_p3;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
<footer class="footer-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer-text">
<ul>
<li><a href="./index.php"><?php echo l::menu_home;?></a></li>
<li><a href="./speaker.php"><?php echo l::menu_speaker;?></a></li>
<li><a href="./schedule.php"><?php echo l::menu_schedule;?></a></li>
<li><a href="./blog.php"><?php echo l::menu_blog;?></a></li>
<li><a href="./contact.php"><?php echo l::menu_contact;?></a></li>
<li><a href="./partners.php"><?php echo l::menu_partners;?></a></li>
</ul>
<div class="copyright-text"><p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://kreatorz.me" target="_blank">Kreatorz</a>
</p></div>
<div class="ft-social">
<a href="https://www.facebook.com/Festival-International-du-Th%C3%A9%C3%A2tre-au-Sahara-104073988224759/
" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
<a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a>
</div>
</div>
</div>
</div>
</div>
</footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>

</html>