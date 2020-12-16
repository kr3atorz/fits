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
<div id="preloder">
    <div class="loader"></div>
</div>
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

<section class="breadcrumb-section">
    <center>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2><?php echo l::partners;?></h2>
                    </div>
    </center>
    <br>
    <br>
    <br>
    <center>


        <div class="content_img_references" style="position:relative;display:block">
            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px;margin-bottom: 25px;">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/1/1.png"style="max-height: 200px;max-width: 200px">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/1/2.png"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>



            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/1/4.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/1/5.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/1/6.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/1/7.png"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/1/8.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/1/3.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/1.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/2.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/3.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/4.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/5.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/6.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/7.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/8.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2  text-center">
                <div class="logo_reference"style="width: 200px;height: 200px">
                    <div style="max-width: 200px;max-height: 200px">
                        <img src="img/partners/2/9.jpg"style="max-height: 200px;max-width: 200px;margin-bottom: 25px;">
                    </div>
                </div>
            </div>

        </div> </center>


    </div>
    </div>
    </div>
</section>


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