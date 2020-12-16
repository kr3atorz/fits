<?php
error_reporting(0);  
    require_once './forms/php-i18n/i18n.class.php'; session_start(); if (isset($_GET["lang"])){function clean($string){$string =    str_replace(' ', '-', $string);return preg_replace('/[^A-Za-z0-9\-]/', '', $string);}$_GET["lang"]=clean($_GET["lang"]);$_SESSION["lang"]=$_GET["lang"];}else{$_SESSION["lang"]="fr";} $i18n = new i18n('./forms/php-i18n/lang/lang_{LANGUAGE}.json', './forms/php-i18n/langcache/', 'fr','l'); $i18n->init();
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
                        <li><a href="./partners.php">'.l::menu_partners .'</a></li>
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script></body>
</html>';

    $conn = new PDO("mysql:host=localhost;dbname=fitstn_db", 'fitstn_root','Sexmachine69');
    $stmt = $conn->prepare("SELECT * FROM blog ORDER BY id DESC LIMIT 9");
    $stmt->execute();
    $arr = $stmt->fetchAll();

    function small($id,$path,$tag,$title,$time){
         return '<div class="col-md-6">
                <div class="blog-item set-bg" data-setbg="'.str_replace(" ","%20",$path).'">
                    <div class="bi-tag bg-gradient">'.$tag.'</div>
                        <div class="bi-text">
                            <h5><a href="./blog-details.php?q='.$id.'">'.$title.'</a></h5>
                            <span><i class="fa fa-clock-o"></i>'.$time.'</span>
                        </div>
                </div>
        </div>';
    }

    function large($id,$path,$tag,$title,$time,$default){
        return '<div class="blog-item set-bg '.$default.'" data-setbg="'.str_replace(" ","%20",$path).'">
                        <div class="bi-tag bg-gradient">'.$tag.'</div>
                        <div class="bi-text">
                            <h3><a href="./blog-details.php?q='.$id.'">"'.$title.'</a></h3>
                            <span><i class="fa fa-clock-o"></i>'.$time.'</span>
                        </div>
                    </div>';
    }

$precore='<section class="blog-section spad"><div class="container"><div class="row">';
$core='
                <div class="col-lg-6">
                    <div class="row">'.
                        small($arr[0]["id"],$arr[0]["img"],$arr[0]["tag"],$arr[0]["title"],$arr[0]["date"]).
                        small($arr[1]["id"],$arr[1]["img"],$arr[1]["tag"],$arr[1]["title"],$arr[1]["date"]).'
                    </div>'.
                        large($arr[2]["id"],$arr[2]["img"],$arr[2]["tag"],$arr[2]["title"],$arr[2]["date"],"large-item").'
                    <div class="row">'.
                        small($arr[3]["id"],$arr[3]["img"],$arr[3]["tag"],$arr[3]["title"],$arr[3]["date"]).
                        small($arr[4]["id"],$arr[4]["img"],$arr[4]["tag"],$arr[4]["title"],$arr[4]["date"]).
                    '</div>
                </div>

                <div class="col-lg-6">'.
                    large($arr[5]["id"],$arr[5]["img"],$arr[5]["tag"],$arr[5]["title"],$arr[5]["date"],"large-item").   
                    '<div class="row">'.
                            small($arr[6]["id"],$arr[6]["img"],$arr[6]["tag"],$arr[6]["title"],$arr[6]["date"]).
                            small($arr[7]["id"],$arr[7]["img"],$arr[7]["tag"],$arr[7]["title"],$arr[7]["date"]).
    
                    '</div>'.
                    large($arr[8]["id"],$arr[8]["img"],$arr[8]["tag"],$arr[8]["title"],$arr[8]["date"],"").
                '</div>
            </div>
            <div class="load-more blog-more">
                <a href="#" class="primary-btn">Plus d\'informations</a>
            </div>
        </div>
    </section>
    ';
echo $header.$precore.$core.$footer;
?>