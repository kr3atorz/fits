<?php
error_reporting(0);
  require_once './forms/php-i18n/i18n.class.php';
  session_start();
if (isset($_POST["lang"])){function clean($string){$string = str_replace(' ', '-', $string);return preg_replace('/[^A-Za-z0-9\-]/', '', $string);}$_SESSION["lang"]=clean($_POST["lang"]);}
  $i18n = new i18n('./forms/php-i18n/lang/lang_{LANGUAGE}.json', './forms/php-i18n/langcache/', 'fr','l');
  $i18n->init();
?>
<!DOCTYPE html>
<html lang="<?php echo $i18n->getappliedLang();;?>">
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
    

    <!-- Contact Top Content Section Begin -->
    <section class="contact-content-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cc-text set-bg" data-setbg="img/contact-content-bg.jpg">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-4">
                                <div class="section-title">
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
                        </div>
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
                                    <?php echo l::contact_h2;?>
                                </h5>
                                <p><?php echo l::contact_p1;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- Contact Form Section Begin -->
<section class="contact-from-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2><?php echo l::contact_p_h2;?></h2>
                    <p><?php echo l::contact_p_p;?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="form" class="comment-form contact-form">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" placeholder="Name" name="name" minlength="5" required="">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Email" name="email" required="">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Phone" name="phone" type="number" minlength="8" required="">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="Messages" name="message" minlength="5" required=""></textarea>
                            <button type="button" name="btn" class="site-btn">Send Message</button>
                            <p id="#response" style="display: none"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    var form =document.getElementsByTagName("form")[0];
    form.btn.addEventListener('click', function() {
        var http = new XMLHttpRequest();
        http.open('POST', 'forms/contact.php', true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = function() {
            if(http.readyState == 4 && http.status == 200 && http.responseText){
                var response=document.getElementById("#response");
                response.innerText=http.responseText;
                response.style="display:block";
            }}
        if (form.checkValidity()){
            http.send("email="+form.email.value+"&name="+form.name.value+"&phone="+form.phone.value+"&message="+form.email.value);}
    });

</script>
<!-- Contact Form Section End -->

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
