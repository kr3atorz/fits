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

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2><?php echo l::schedule_calentrier;?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Schedule Table Section Begin -->
<section class="schedule-table-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="schedule-table-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"><?php echo l::schedule_table_nav_item1;?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"><?php echo l::schedule_table_nav_item2;?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"><?php echo l::schedule_table_nav_item3;?></a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="schedule-table-content">
                                <table>
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <strong><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_itable_debut;?></center></strong>
                                        </th>
                                        <th>
                                            <strong><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_itable_fin;?></center></strong>
                                        </th>
                                        <th>
                                            <strong><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_itable_risque;?></center></strong>
                                        </th>
                                        <th>
                                            <strong><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_itable_strat;?></center></strong>
                                        </th>
                                        <th>
                                            <strong><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_itable_statut;?></center></strong>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="event-time"> <center style="margin-right:15px;margin-left:15px;"> <?php echo l::schedule_table_conf_nom;?></center></td>
                                        <td class="break hover-bg">
                                            <h5><center style="margin-right:15px;margin-left:15px;">26 Jan 21</center></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><center style="margin-right:15px;margin-left:15px;">26 Jan 21</center></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_conf_risque1;?></center></h5>
                                            <br>
                                            <h5><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_conf_risque2;?></center></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_conf_start;?></center></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><center style="margin-right:15px;margin-left:15px;"><?php echo l::schedule_table_conf_status;?></center></h5>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="schedule-table-content">
                                <table>
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_debut;?></strong>
                                        </th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_fin;?></strong>
                                        </th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_risque;?></strong>
                                        </th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_strat;?></strong>
                                        </th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_statut;?> </strong>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="event-time"><?php echo l::schedule_table_fest_nom;?></td>
                                        <td class="break hover-bg">
                                            <h5>3 Feb 21</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5>7 Feb 21</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_table_conf_risque1;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_table_conf_risque2;?></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_table_fest_start;?></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_table_fest_status;?></h5>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="schedule-table-content">
                                <table>
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_debut;?></strong>
                                        </th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_fin;?></strong>
                                        </th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_risque;?></strong>
                                        </th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_strat;?></strong>
                                        </th>
                                        <th>
                                            <strong><?php echo l::schedule_table_itable_statut;?> </strong>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="event-time"><?php echo l::schedule_nav_item1_date_p3;?></td>
                                        <td class="break hover-bg">
                                            <h5>19 Dec 20</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5>31 Jan 21</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item1_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item1_prob_p3;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item1_prob_p4;?></h5>

                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item1_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item1_prob_p3;?></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item1_status_p2;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="event-time"><?php echo l::schedule_nav_item2_date_p3;?></td>
                                        <td class="break hover-bg">
                                            <h5>19 Dec 20</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5>31 Jan 21</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item2_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item2_prob_p3;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item2_prob_p4;?></h5>

                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item2_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item2_prob_p3;?></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item2_status_p2;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="event-time"><?php echo l::schedule_nav_item3_date_p3;?></td>
                                        <td class="break hover-bg">
                                            <h5>20 Dec 20</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5>31 Jan 21</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item3_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item3_prob_p3;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item3_prob_p4;?></h5>

                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item3_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item3_prob_p3;?></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item3_status_p2;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="event-time"><?php echo l::schedule_nav_item4_date_p3;?></td>
                                        <td class="break hover-bg">
                                            <h5>20 Dec 20</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5>31 Jan 21</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item4_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item4_prob_p3;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item4_prob_p4;?></h5>

                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item4_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item4_prob_p3;?></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item4_status_p2;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="event-time"><?php echo l::schedule_nav_item5_date_p3;?></td>
                                        <td class="break hover-bg">
                                            <h5>21 Dec 20</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5>31 Jan 21</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item5_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item5_prob_p3;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item5_prob_p4;?></h5>

                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item5_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item5_prob_p3;?></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item5_status_p2;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="event-time"><?php echo l::schedule_nav_item6_date_p3;?></td>
                                        <td class="break hover-bg">
                                            <h5>21 Dec 20</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5>31 Jan 21</h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item6_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item6_prob_p3;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item6_prob_p4;?></h5>

                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item6_prob_p2;?></h5>
                                            <br>
                                            <h5><?php echo l::schedule_nav_item6_prob_p3;?></h5>
                                        </td>
                                        <td class="break hover-bg">
                                            <h5><?php echo l::schedule_nav_item6_status_p2;?></h5>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Schedule Table Section End -->

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