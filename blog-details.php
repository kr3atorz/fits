<?php
// error_reporting(0); 
if (isset($_GET['q'])){
	require_once './forms/php-i18n/i18n.class.php'; session_start(); if (isset($_GET["lang"])){function clean($string){$string = 	str_replace(' ', '-', $string);return preg_replace('/[^A-Za-z0-9\-]/', '', $string);}$_GET["lang"]=clean($_GET["lang"]);$_SESSION["lang"]=$_GET["lang"];}else{$_SESSION["lang"]="fr";} $i18n = new i18n('./forms/php-i18n/lang/lang_{LANGUAGE}.json', './forms/php-i18n/langcache/', 'fr','l'); $i18n->init();
$header = '<!DOCTYPE html> <html lang="'.$_SESSION["lang"].'"> <head> <meta charset="UTF-8"> <meta name="description" > <meta name="keywords" > <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>'.l::title.'</title> <!-- Google Font --> <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet"> <!-- Css Styles --> <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"> <link rel="stylesheet" href="css/elegant-icons.css" type="text/css"> <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css"> <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"> <link rel="stylesheet" href="css/slicknav.min.css" type="text/css"> <link rel="stylesheet" href="css/style.css" type="text/css"> </head> <body> <!-- Page Preloder --> <div id="preloder"> <div class="loader"></div> </div> <!-- Header Section Begin --> <header class="header-section"> <div class="container"> <div class="nav-menu"> <a href="index.php"> <img src="img/fits logo.jpeg" alt="" style="width: 95px;height: 55px;"> </a> <nav class="mainmenu mobile-menu"> <ul> <li class="active"><a href="./index.php">'.l::menu_home.'</a></li> <li><a href="./about-us.php">'.l::menu_about.'</a></li> <li><a href="./speaker.php"style="font-size:14px">'.l::menu_speaker.'</a></li> <li><a href="./schedule.php"style="font-size:14px">'.l::menu_schedule.'</a></li> <li><a href="./blog.php"style="font-size:14px">'.l::menu_blog.'</a></li> <li><a href="./contact.php"style="font-size:14px">'.l::menu_contact.'</a></li> <li><a href="./partners.php"style="font-size:14px">'.l::menu_partners.'</a></li> <li><div class="switch-lang"> <div class="current-lang"> <img class="lang-flag" src="img/'.$_SESSION["lang"].'.png"/> <p class="lang-text">'.l($_SESSION["lang"]).'</p> </div> <div class="lang-dropdown">';
	$languages=array('fr','ar');
	$temp="";
	foreach($languages as $l) { if ($l != $_SESSION["lang"]){ $temp=$temp.'<div class="selecting-lang" lang="'.$l.'"><img class="lang-flag" src="img/'.$l.'.png"/> <p class="lang-text">'.l($l).'</p></div>';}};
	$temp=$temp.'</div> </li> </ul> </nav> <a href="index.php"> <img src="img/ue.png" alt="" style="width:90px;height: 55px"> </a> </div> <div id="mobile-menu-wrap"></div> </div> </header>';
	$header=$header.$temp;

$footer = '<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-text">
                    <ul>
                        <li><a href="./index.php">'.l::menu_home.'</a></li>
                        <li><a href="./speaker.php">'.l::menu_speaker.'</a></li>
                        <li><a href="./schedule.php">'.l::menu_schedule.'</a></li>
                        <li><a href="./blog.php">'.l::menu_blog.'</a></li>
                        <li><a href="./contact.php">'.l::menu_contact.'</a></li>
                        <li><a href="./partners.php">'.l::menu_partners	.'</a></li>
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
</footer><script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>';
$form = ' <div class="comment-section spad"> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="section-title"> <h3>Leave A Comment</h3> </div> </div> </div> <div class="row"> <div class="col-lg-8 m-auto"> <form action="#" class="comment-form"> <div class="row"> <div class="col-lg-4"> <input type="text" placeholder="Name"> </div> <div class="col-lg-4"> <input type="text" placeholder="Email"> </div> <div class="col-lg-4"> <input type="text" placeholder="Phone"> </div> <div class="col-lg-12 text-center"> <textarea placeholder="Messages"></textarea> <button type="submit" class="site-btn">Send Message</button> </div> </div> </form> </div> </div> </div> </div>';

// <div class="bd-more-pic">
// <div class="row">
// <div class="col-md-6">
// <img src="'.$imgs[1].'" alt="">
// </div>
// <div class="col-md-6">
// <img src="'.$imgs[2].'" alt="">
// </div>
// </div>
// </div>
// <div class="bd-more-text second-text">
// <h4>'.$arr["secondary_description"].'</p>
// </div>

$conn = new PDO("mysql:host=localhost;dbname=blog", 'root','');
$stmt = $conn->prepare("SELECT * FROM blog where id = :x");
$stmt->bindParam(':x', $_GET['q']);
$stmt->execute();
$arr = $stmt->fetch();
if (!$arr){echo "fetch error0";exit;}
// $imgs=explode("$",$arr["img"]);
$top=' <section class="blog-hero-section set-bg" data-setbg="'.str_replace(" ","%20",$arr["img"]).'"> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="bh-text"> <h2>'.$arr["title"].'</h2> <ul> <li><span>By <strong>'.$arr["author"].'</strong></span></li> <li>'.$arr["date"].'</li> </ul> </div> </div> </div> </div> </section> ';



$core='<section class="blog-details-section">
<div class="container">
<div class="row">
<div class="col-lg-8 m-auto">
<div class="bd-text">
<div class="bd-more-text">
<h4>'.$arr["title"].'</h4>
<p>'.$arr["description"].'</p>
</div>

<div class="bd-tag-share">
<div class="tag">
<a href="">'.$arr["tag"].'</a>
</div>
<div class="s-share">
<span>Share:</span>
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-google-plus"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>';
echo $header.$top.$core.$form.$footer;
}
else{echo "fetch error";}
?>




