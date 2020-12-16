<?php
// error_reporting(0);
  require_once './forms/php-i18n/i18n.class.php';
  session_start();
if (isset($_POST["lang"])){function clean($string){$string = str_replace(' ', '-', $string);return preg_replace('/[^A-Za-z0-9\-]/', '', $string);}$_SESSION["lang"]=clean($_POST["lang"]);}
  $i18n = new i18n('./forms/php-i18n/lang/lang_{LANGUAGE}.json', './forms/php-i18n/langcache/', 'fr','l');
  $i18n->init();
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION["lang"];?>">
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
<!-- <div id="preloder"> -->
    <!-- <div class="loader"></div> -->
<!-- </div> -->
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
                <img class="lang-flag" src="img/<?php echo $_SESSION["lang"];?>.png"/>
              <p class="lang-text"><?php echo l($_SESSION["lang"]);?></p>
            </div>
            <div class="lang-dropdown">
              <?php 
              $languages=array('fr','ar');
              foreach($languages as $l) {
                if ($l != $_SESSION["lang"]){
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

<!-- Header End -->
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="img/sanddd.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text">
                    <span><?php echo l::hero_span;?></span>
                    <h2><?php echo l::hero_h2;?></h2>
                    <br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Counter Section Begin -->
<section class="counter-section bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="counter-text">
                    <span><?php echo l::counter_span;?></span>
                    <h3><?php echo l::counter_h3;?></h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="cd-timer" id="countdown">
                    <div class="cd-item">
                        <span>40</span>
                        <p>Jours</p>
                    </div>
                    <div class="cd-item">
                        <span>18</span>
                        <p>Heures</p>
                    </div>
                    <div class="cd-item">
                        <span>46</span>
                        <p>Minutes</p>
                    </div>
                    <div class="cd-item">
                        <span>32</span>
                        <p>Secondes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
<!-- Home About Section Begin -->
<section class="home-about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ha-pic">
                    <img src="img/1.jpg" alt="" >
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ha-text">
                    <h2> <?php echo l::home_about_h2;?></h2>
                    <p><?php echo l::home_about_p;?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home About Section End -->
<!-- Team Member Section Begin -->
<section class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2><?php echo l::speakers_h2;?></h2>
                    <p><?php echo l::speakers_p;?> </p>
                    <!-- <p>These are our communicators, you can see each person information</p> -->
                </div>
            </div>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/Dalila.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/Dalila-Meftahi-101410274670590"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/meftehidalila?igshid=1gvkwz6xiojb4"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk1_h5;?></h5>
            <span><?php echo l::speakers_spk1_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/mohamed.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/mohamed.kouka"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk2_h5;?></h5>
            <span><?php echo l::speakers_spk2_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/salah.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/Salah-Jday-صالح-الجدي-260914754077114/"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/salah_jday?igshid=161dll1emg0bi"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/jdyesaleh?lang=fr"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk3_h5;?></h5>
            <span><?php echo l::speakers_spk3_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/msadek.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk4_h5;?></h5>
            <span><?php echo l::speakers_spk4_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/sihem.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/sihem.msadek"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/sihemmsadek?igshid=1id0s5k82eiji"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk5_h5;?></h5>
            <span><?php echo l::speakers_spk5_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/nour.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/profile.php?id=100004932889410"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk6_h5;?></h5>
            <span><?php echo l::speakers_spk6_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/mounir.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/mounir.argui"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk7_h5;?></h5>
            <span><?php echo l::speakers_spk7_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/kamel.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/profile.php?id=100004619297871"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk8_h5;?></h5>
            <span><?php echo l::speakers_spk8_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/chedli.png">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/chedly.arfaoui"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/chedlyarfaoui?igshid=ns4wzj3jud08"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk9_h5;?></h5>
            <span><?php echo l::speakers_spk9_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/zbidi.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/laroussi.zbidi/"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk10_h5;?></h5>
            <span><?php echo l::speakers_spk10_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/ridha.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/ridha.benmansour.79"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/ridhabenmansour"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk11_h5;?></h5>
            <span><?php echo l::speakers_spk11_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/bechir.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/poete.BechirAbdeladhim/"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk12_h5;?></h5>
            <span><?php echo l::speakers_spk12_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/Boualleg.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/profile.php?id=100000808013743"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk13_h5;?></h5>
            <span><?php echo l::speakers_spk13_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/tawfik.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/mohamedtawfikk"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/mohamedtawfikkhalfaoui?igshid=119s6s1s82b3d"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk14_h5;?></h5>
            <span><?php echo l::speakers_spk14_span;?></span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="img/team-member/ghannam.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="https://www.facebook.com/ghannam-ghannam-196400257963265/?ref=py_c"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/ghannam_ghannam"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5><?php echo l::speakers_spk15_h5;?></h5>
            <span><?php echo l::speakers_spk15_span;?></span>
        </div>
    </div>
</section>
<!-- Team Member Section End -->
<!-- Schedule Section Begin -->
<section class="schedule-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2><?php echo l::schedule_h2;?></h2>
                    <p><?php echo l::schedule_p;?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="schedule-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <h6><?php echo l::schedule_nav_item1_h6;?></h6>
                                <p><?php echo l::schedule_nav_item1_p;?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                <h6><?php echo l::schedule_nav_item2_h6;?></h6>
                                <p><?php echo l::schedule_nav_item2_p;?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                <h6><?php echo l::schedule_nav_item3_h6;?></h6>
                                <p><?php echo l::schedule_nav_item3_p;?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                <h6><?php echo l::schedule_nav_item4_h6;?></h6>
                                <p><?php echo l::schedule_nav_item4_p;?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                <h6><?php echo l::schedule_nav_item5_h6;?></h6>
                                <p><?php echo l::schedule_nav_item5_p;?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">
                                <h6><?php echo l::schedule_nav_item6_h6;?></h6>
                                <p><?php echo l::schedule_nav_item6_p;?></p>
                            </a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item1_date_p1;?></h4>
             
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i> <?php echo l::schedule_nav_item1_date_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item1_date_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item1_status_p1;?></h4>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i><?php echo l::schedule_nav_item1_status_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item1_status_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item1_prob_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i></i> <?php echo l::schedule_nav_item1_prob_p2;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item1_prob_p3;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item1_prob_p4;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item1_strat_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i ></i> <?php echo l::schedule_nav_item1_prob_p2;?></li>
                                                <li><i ></i> <?php echo l::schedule_nav_item1_prob_p3;?></li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                       <div class="tab-pane" id="tabs-1" role="tabpanel">
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">

                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item1_date_p1;?></h4>
        
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i> <?php echo l::schedule_nav_item1_date_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item1_date_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item1_status_p1;?></h4>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i><?php echo l::schedule_nav_item1_status_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item1_status_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">

                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item1_prob_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i></i> <?php echo l::schedule_nav_item1_prob_p2;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item1_prob_p3;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item1_prob_p4;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">

                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item1_strat_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i ></i> <?php echo l::schedule_nav_item1_prob_p2;?></li>
                                                <li><i ></i> <?php echo l::schedule_nav_item1_prob_p3;?></li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

                                          <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">

                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item2_date_p1;?></h4>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i> <?php echo l::schedule_nav_item2_date_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item2_date_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item2_status_p1;?></h4>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i><?php echo l::schedule_nav_item2_status_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item2_status_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">

                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item2_prob_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i></i> <?php echo l::schedule_nav_item2_prob_p2;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item2_prob_p3;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item2_prob_p4;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
  
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item2_strat_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i ></i> <?php echo l::schedule_nav_item2_prob_p2;?></li>
                                                <li><i ></i> <?php echo l::schedule_nav_item2_prob_p3;?></li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- //////////////////////////////////////////////////////////////////////////////////////// -->
                                          <div class="tab-pane " id="tabs-3" role="tabpanel">
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item3_date_p1;?></h4>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i> <?php echo l::schedule_nav_item3_date_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item3_date_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item3_status_p1;?></h4>
                                                <!--                                                <ul>-->
                                                <!--                                                    <li><i class="fa fa-user"></i> person</li>-->
                                                <!--                                                    <li><i class="fa fa-envelope"></i> @person-->
                                                <!--                                                    </li>-->
                                                <!--                                                </ul>-->
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i><?php echo l::schedule_nav_item3_status_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item3_status_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item3_prob_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i></i> <?php echo l::schedule_nav_item3_prob_p2;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item3_prob_p3;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item3_prob_p4;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item3_strat_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i ></i> <?php echo l::schedule_nav_item3_prob_p2;?></li>
                                                <li><i ></i> <?php echo l::schedule_nav_item3_prob_p3;?></li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- //////////////////////////////////////////////////////////////////////////////////////// -->

                  <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item4_date_p1;?></h4>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i> <?php echo l::schedule_nav_item4_date_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item4_date_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item4_status_p1;?></h4>
                                                <!--                                                <ul>-->
                                                <!--                                                    <li><i class="fa fa-user"></i> person</li>-->
                                                <!--                                                    <li><i class="fa fa-envelope"></i> @person-->
                                                <!--                                                    </li>-->
                                                <!--                                                </ul>-->
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i><?php echo l::schedule_nav_item4_status_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item4_status_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item4_prob_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i></i> <?php echo l::schedule_nav_item4_prob_p2;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item4_prob_p3;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item4_prob_p4;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item4_strat_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i ></i> <?php echo l::schedule_nav_item4_prob_p2;?></li>
                                                <li><i ></i> <?php echo l::schedule_nav_item4_prob_p3;?></li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /////////////////////////////////////////////////////////////////////////// -->

                                          <div class="tab-pane " id="tabs-5" role="tabpanel">
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item5_date_p1;?></h4>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i> <?php echo l::schedule_nav_item5_date_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item5_date_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item5_status_p1;?></h4>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i><?php echo l::schedule_nav_item5_status_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item5_status_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item5_prob_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i></i> <?php echo l::schedule_nav_item5_prob_p2;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item5_prob_p3;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item5_prob_p4;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item5_strat_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i ></i> <?php echo l::schedule_nav_item5_prob_p2;?></li>
                                                <li><i ></i> <?php echo l::schedule_nav_item5_prob_p3;?></li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- ////////////////////////////////////////// -->

                                          <div class="tab-pane" id="tabs-6" role="tabpanel">
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item6_date_p1;?></h4>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i> <?php echo l::schedule_nav_item6_date_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item6_date_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item6_status_p1;?></h4>
                                                <!--                                                <ul>-->
                                                <!--                                                    <li><i class="fa fa-user"></i> person</li>-->
                                                <!--                                                    <li><i class="fa fa-envelope"></i> @person-->
                                                <!--                                                    </li>-->
                                                <!--                                                </ul>-->
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i class="fa fa-clock-o"></i><?php echo l::schedule_nav_item6_status_p2;?></li>
                                                <li><i class="fa fa-map-marker"></i> <?php echo l::schedule_nav_item6_status_p3;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item6_prob_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i></i> <?php echo l::schedule_nav_item6_prob_p2;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item6_prob_p3;?></li>
                                                <li><i></i> <?php echo l::schedule_nav_item6_prob_p4;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="sc-pic">
                                                <!--                                                <img src="img/schedule/ev.jpg" alt="" >-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="sc-text">
                                                <h4><?php echo l::schedule_nav_item6_strat_p1;?></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="sc-widget">
                                                <li><i ></i> <?php echo l::schedule_nav_item6_prob_p2;?></li>
                                                <li><i ></i> <?php echo l::schedule_nav_item6_prob_p3;?></li>
                                                </li>
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
    </div>
</section>
<!-- Schedule Section End -->
<!-- Pricing Section Begin -->


<br><br><br><br>
<!-- latest BLog Section End -->
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
<script type="text/javascript">
    for (var t of document.getElementsByClassName('selecting-lang')){
  t.addEventListener('click', function() {
var http = new XMLHttpRequest();
http.open('POST', 'index.php', true);
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200 && http.responseText){
        window.location.reload();
    }}
http.send("lang="+this.getAttribute("lang"));
});}
</script>
</body>
</html>