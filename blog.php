<?php
error_reporting(0);  
$header = '<!DOCTYPE html> <html  lang="fr"> <head> <meta charset="UTF-8"> <meta name="description" > <meta name="keywords"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>Fest</title> <!-- Google Font --> <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet"> <!-- Css Styles --> <link rel="stylesheet" href="css/bootstrap.min.css" tag="text/css"> <link rel="stylesheet" href="css/font-awesome.min.css" tag="text/css"> <link rel="stylesheet" href="css/elegant-icons.css" tag="text/css"> <link rel="stylesheet" href="css/owl.carousel.min.css" tag="text/css"> <link rel="stylesheet" href="css/magnific-popup.css" tag="text/css"> <link rel="stylesheet" href="css/slicknav.min.css" tag="text/css"> <link rel="stylesheet" href="css/style.css" tag="text/css"> </head> <body> <!-- Page Preloder --> <div id="preloder"> <div class="loader"></div> </div> <!-- Header Section Begin --> <header class="header-section"> <div class="container"> <div class="nav-menu"> <a href="index.html"> <img src="img/logo.png" alt="" style="width:90px"> </a> <nav class="mainmenu mobile-menu"> <ul> <li class="active"><a href="./index.html">Accueil</a></li> <li><a href="./about-us.html">À propos</a></li> <li><a href="./speaker.html"style="font-size:14px">Participants</a> <ul class="dropdown"style="font-size:14px"> <li><a href="#"style="font-size:14px">main</a></li> <li><a href="#"style="font-size:14px">second</a></li> <li><a href="#"style="font-size:14px">third</a></li> </ul> </li> <li><a href="./schedule.html"style="font-size:14px">Programmes</a></li> <li><a href="./blog.php"style="font-size:14px">Nouveautés</a></li> <li><a href="./contact.html"style="font-size:14px">Contact</a></li> <li><a href="./partners.html"style="font-size:14px">Partners</a></li> </ul> </nav> <img src="img/ue.png" alt="" style="width:90px;height: 55px"> </div> <div id="mobile-menu-wrap"></div> </div> </header>  <!-- Header End --> <!-- Breadcrumb Section Begin --> <section class="breadcrumb-section"> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="breadcrumb-text"> <h2>Dernières nouvelles</h2> <div class="bt-option"> <a href="#">Home</a> <span>Nos blogs</span> </div> </div> </div> </div> </div> </section> <!-- Breadcrumb Section End --> ';
$footer = '<!-- Footer Section Begin --> <footer class="footer-section"> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="footer-text"> <ul> <li><a href="./index.html">Acceuil</a></li> <li><a href="./speaker.html">Participants</a></li> <li><a href="./schedule.html">Programmes</a></li> <li><a href="./blog.php">Nouveautés</a></li> <li><a href="./contact.html">Contact</a></li> </ul> <div class="copyright-text"><p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://kreatorz.me" target="_blank">Kreatorz</a> </p></div> <div class="ft-social"> <a href="https://www.facebook.com/Festival-International-du-Th%C3%A9%C3%A2tre-au-Sahara-104073988224759/ " target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="#" target="_blank"><i class="fa fa-instagram"></i></a> <a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a> </div> </div> </div> </div> </div> </footer> <!-- Footer Section End --> <!-- Js Plugins --> <script src="js/jquery-3.3.1.min.js"></script> <script src="js/bootstrap.min.js"></script> <script src="js/jquery.magnific-popup.min.js"></script> <script src="js/jquery.countdown.min.js"></script> <script src="js/jquery.slicknav.js"></script> <script src="js/owl.carousel.min.js"></script> <script src="js/main.js"></script> <!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> </body> </html>';

    $conn = new PDO("mysql:host=localhost;dbname=fitstn_db", 'fitstn_root','Sexmachine69');
    $stmt = $conn->prepare("SELECT * FROM blog ORDER BY id DESC LIMIT 9");
    $stmt->execute();
    $arr = $stmt->fetchAll();

    function small($id,$path,$tag,$title,$time){
         return '<div class="col-md-6">
                <div class="blog-item set-bg" data-setbg="'.$path.'">
                    <div class="bi-tag bg-gradient">'.$tag.'</div>
                        <div class="bi-text">
                            <h5><a href="./blog-details.php?q='.$id.'">'.$title.'</a></h5>
                            <span><i class="fa fa-clock-o"></i>'.$time.'</span>
                        </div>
                </div>
        </div>';
    }

    function large($id,$path,$tag,$title,$time,$default){
        return '<div class="blog-item set-bg '.$default.'" data-setbg="'.$path.'">
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