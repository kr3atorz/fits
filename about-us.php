<?php
  require_once './forms/php-i18n/i18n.class.php';
  session_start();
if (isset($_GET["lang"])){function clean($string){$string = str_replace(' ', '-', $string);return preg_replace('/[^A-Za-z0-9\-]/', '', $string);}$_GET["lang"]=clean($_GET["lang"]);$_SESSION["lang"]=$_GET["lang"];}
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
<!-- <div id="preloder">
    <div class="loader"></div>
</div> -->
<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">

        <div class="nav-menu">
            <a href="index.html">
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
                </ul>
            </nav>
            <img src="img/ue.png" alt="" style="width:90px;height: 55px">
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-text">
<h2><?php echo l::about_us_h2;?></h2>
</div>
</div>
</div>
</div>
</section>
<!-- Breadcrumb Section End -->
<!-- About Section Begin -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2><?php echo l::about_us_about_section_h2;?></h2>
                    <p class="f-para"><?php echo l::about_us_about_section_p1;?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="about-pic">
                    <img src="img/about.jpeg" style= "max-height:599px">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <h3><?php echo l::about_us_about_section_h3;?></h3>
                    <p><?php echo l::about_us_about_section_p2;?></p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Témoignages</h2>
                    <p>Ce que les Maghrebians pense de nous.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="testimonial-slider owl-carousel">
                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <div class="ti-author">
                                    <div class="quote-pic">
                                        <img src="img/quote.png" alt="" >
                                    </div>
                                    <div class="ta-pic">
                                        <img src="img/testimonial/testimonial-1.jpg" alt="" >
                                    </div>
                                    <div class="ta-text">
                                        <h5>Ahmed</h5>
                                        <span>Un visiteur</span>
                                    </div>
                                </div>
                                <p>“j'ai hâte de participer a cet événement.”</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <div class="ti-author">
                                    <div class="quote-pic">
                                        <img src="img/quote.png" alt="" >
                                    </div>
                                    <div class="ta-pic">
                                        <img src="img/testimonial/testimonial-2.jpg" alt="" >
                                    </div>
                                    <div class="ta-text">
                                        <h5>Mohamed Ali</h5>
                                        <span>Un Visiteur</span>
                                    </div>
                                </div>
                                <p>“ Une très bonne initiative en Sud de la Tunisie”</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <div class="ti-author">
                                    <div class="quote-pic">
                                        <img src="img/quote.png" alt="" >
                                    </div>
                                    <div class="ta-pic">
                                        <img src="img/testimonial/testimonial-2.jpg" alt="" >
                                    </div>
                                    <div class="ta-text">
                                        <h5>Person</h5>
                                        <span>Speaker Manager</span>
                                    </div>
                                </div>
                                <p>“ something here.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->
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

<script>//<![CDATA[
'use strict';(function($){$(window).on('load',function(){$(".loader").fadeOut();$("#preloder").delay(200).fadeOut("slow");});$('.set-bg').each(function(){var bg=$(this).data('setbg');$(this).css('background-image','url('+bg+')');});$(".mobile-menu").slicknav({prependTo:'#mobile-menu-wrap',allowParentLinks:true});$(".partner-logo").owlCarousel({items:6,dots:false,autoplay:true,loop:true,smartSpeed:1200,margin:116,responsive:{320:{items:2,},480:{items:3,},768:{items:4,},992:{items:5,},1200:{items:6}}});$(".testimonial-slider").owlCarousel({items:2,dots:false,autoplay:false,loop:true,smartSpeed:1200,nav:true,navText:["<span class='fa fa-angle-left'></span>","<span class='fa fa-angle-right'></span>"],responsive:{320:{items:1,},768:{items:2}}});$('.video-popup').magnificPopup({type:'iframe'});var today=new Date();var dd=String(today.getDate()).padStart(2,'0');var mm=String(today.getMonth()+1).padStart(2,'0');var yyyy=today.getFullYear();if(mm==12){mm='01';yyyy=yyyy+1;}else{mm=parseInt(mm)+1;mm=String(mm).padStart(2,'0');}var timerdate=mm+'/'+dd+'/'+yyyy;$("#countdown").countdown(timerdate,function(event){$(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>"+"<div class='cd-item'><span>%H</span> <p>Hrs</p> </div>"+"<div class='cd-item'><span>%M</span> <p>Mins</p> </div>"+"<div class='cd-item'><span>%S</span> <p>Secs</p> </div>"));});})(jQuery);
//]]></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>
</html>