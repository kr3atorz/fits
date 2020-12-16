<?php
error_reporting(0); 
if (isset($_GET['q'])){ 
$header = '<!DOCTYPE html> <html  lang="fr"> <head> <meta charset="UTF-8"> <meta name="description" > <meta name="keywords"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>Fest</title> <!-- Google Font --> <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet"> <!-- Css Styles --> <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"> <link rel="stylesheet" href="css/elegant-icons.css" type="text/css"> <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css"> <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"> <link rel="stylesheet" href="css/slicknav.min.css" type="text/css"> <link rel="stylesheet" href="css/style.css" type="text/css"> </head> <body> <!-- Page Preloder --> <div id="preloder"> <div class="loader"></div> </div> <!-- Header Section Begin --> <header class="header-section"> <div class="container"> <div class="nav-menu"> <a href="index.html"> <img src="img/logo.png" alt="" style="width:90px"> </a> <nav class="mainmenu mobile-menu"> <ul> <li class="active"><a href="./index.html">Accueil</a></li> <li><a href="./about-us.html">À propos</a></li> <li><a href="./speaker.html"style="font-size:14px">Participants</a> <ul class="dropdown"style="font-size:14px"> <li><a href="#"style="font-size:14px">main</a></li> <li><a href="#"style="font-size:14px">second</a></li> <li><a href="#"style="font-size:14px">third</a></li> </ul> </li> <li><a href="./schedule.html"style="font-size:14px">Programmes</a></li> <li><a href="./blog.php"style="font-size:14px">Nouveautés</a></li> <li><a href="./contact.html"style="font-size:14px">Contact</a></li> <li><a href="./partners.html"style="font-size:14px">Partners</a></li> </ul> </nav> <img src="img/ue.png" alt="" style="width:90px;height: 55px"> </div> <div id="mobile-menu-wrap"></div> </div> </header>  <!-- Header End -->';
$footer = '<!-- Footer Section Begin --> <footer class="footer-section"> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="footer-text"> <ul> <li><a href="./index.html">Acceuil</a></li> <li><a href="./speaker.html">Participants</a></li> <li><a href="./schedule.html">Programmes</a></li> <li><a href="./blog.php">Nouveautés</a></li> <li><a href="./contact.html">Contact</a></li> </ul> <div class="copyright-text"><p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://kreatorz.me" target="_blank">Kreatorz</a> </p></div> <div class="ft-social"> <a href="https://www.facebook.com/Festival-International-du-Th%C3%A9%C3%A2tre-au-Sahara-104073988224759/ " target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="#" target="_blank"><i class="fa fa-instagram"></i></a> <a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a> </div> </div> </div> </div> </div> </footer> <!-- Footer Section End --> <!-- Js Plugins --> <script src="js/jquery-3.3.1.min.js"></script> <script src="js/bootstrap.min.js"></script> <script src="js/jquery.magnific-popup.min.js"></script> <script src="js/jquery.countdown.min.js"></script> <script src="js/jquery.slicknav.js"></script> <script src="js/owl.carousel.min.js"></script> <script src="js/main.js"></script> <!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> </body> </html>';
$form = ' <div class="comment-section spad"> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="section-title"> <h3>Leave A Comment</h3> </div> </div> </div> <div class="row"> <div class="col-lg-8 m-auto"> <form action="#" class="comment-form"> <div class="row"> <div class="col-lg-4"> <input type="text" placeholder="Name"> </div> <div class="col-lg-4"> <input type="text" placeholder="Email"> </div> <div class="col-lg-4"> <input type="text" placeholder="Phone"> </div> <div class="col-lg-12 text-center"> <textarea placeholder="Messages"></textarea> <button type="submit" class="site-btn">Send Message</button> </div> </div> </form> </div> </div> </div> </div>';


$conn = new PDO("mysql:host=localhost;dbname=fitstn_db", 'fitstn_root','Sexmachine69');
$stmt = $conn->prepare("SELECT * FROM blog where id = :x");
$stmt->bindParam(':x', $_GET['q']);
$stmt->execute();
$arr = $stmt->fetch();
if (!$arr){echo "fetch error0";exit;}
$imgs=explode("$",$arr["img"]);
$top=' <section class="blog-hero-section set-bg" data-setbg="'.$imgs[0].'"> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="bh-text"> <h2>'.$arr["title"].'</h2> <ul> <li><span>By <strong>'.$arr["author"].'</strong></span></li> <li>'.$arr["date"].'</li> </ul> </div> </div> </div> </div> </section> ';

$core='<section class="blog-details-section">
<div class="container">
<div class="row">
<div class="col-lg-8 m-auto">
<div class="bd-text">
<div class="bd-more-text">
<h4>'.$arr["title"].'</h4>
<p>'.$arr["description"].'</p>
</div>
<div class="bd-more-pic">
<div class="row">
<div class="col-md-6">
<img src="'.$imgs[1].'" alt="">
</div>
<div class="col-md-6">
<img src="'.$imgs[2].'" alt="">
</div>
</div>
</div>
<div class="bd-more-text second-text">
<h4>'.$arr["secondary_description"].'</p>
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




