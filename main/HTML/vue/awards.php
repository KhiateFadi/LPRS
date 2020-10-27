<?php
session_start();
require_once('../manager/manager.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lycée Robert Schuman</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="../images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="../css/materialize.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="../css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <!-- MOBILE MENU -->
    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="../../../index.php"><img src="images/logo.png" alt="" />
            </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>All Courses</h4>
                            <ul>
                                <li><a href="course-details.html">Accounting/Finance</a></li>
                                <li><a href="course-details.html">civil engineering</a></li>
                                <li><a href="course-details.html">Art/Design</a></li>
                                <li><a href="course-details.html">Marine Engineering</a></li>
                                <li><a href="course-details.html">Business Management</a></li>
                                <li><a href="course-details.html">Journalism/Writing</a></li>
                                <li><a href="course-details.html">Physical Education</a></li>
                                <li><a href="course-details.html">Political Science</a></li>
                                <li><a href="course-details.html">Sciences</a></li>
                                <li><a href="course-details.html">Statistics</a></li>
                                <li><a href="course-details.html">Web Design/Development</a></li>
                                <li><a href="course-details.html">SEO</a></li>
                                <li><a href="course-details.html">Google Business</a></li>
                                <li><a href="course-details.html">Graphics Design</a></li>
                                <li><a href="course-details.html">Networking Courses</a></li>
                                <li><a href="course-details.html">Information technology</a></li>
                            </ul>
                            <h4>User Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="../../../../../index.php">Accueil</a></li>
                                <li><a href="all-courses.html">Formation</a></li>
                                <li><a href="admission.html">Evénement</a></li>
                                <li><a href="contact-us.html">Contact</a></li>

                            </ul>
                            <h4>User Profile</h4>
                            <    <ul>
                                    <li><a href="../../../index.php">Accueil</a></li>
                                    <li><a href="main/HTML/vue/all-courses.html">Formation</a></li>
                                    <li><a href="main/HTML/vue/admission.html">Evénement</a></li>
                                    <li><a href="main/HTML/vue/contact-us.html">Contact</a></li>

                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>











    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +101-1231-1231</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                </li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="../../../index.php"><img style="margin-left:60px;width:90px;height:90px;margin-top:-9px;" src="../images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="../../../index.php">Accueil</a>
                                </li>
                                <li class="about-menu">
                                    <a href="all-courses.html" class="mm-arr">Formation</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="main/HTML/vue/admission.html">
                                                            <img src="main/HTML/images/site/Formation.jpg" alt="">
                                                            <span>Formation</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="main/HTML/vue/all-courses.html">TROISIÈME PRÉPA PRO</a></li>
                                                        <li><a href="main/HTML/vue/all-courses.html">BAC PRO TU</a></li>
                                                        <li><a href="main/HTML/vue/all-courses.html">BAC PRO MEI</a></li>
                                                        <li><a href="main/HTML/vue/admission.html">BAC PRO SN</a></li>
                                                        <li><a href="main/HTML/vue/awards.html">FORMATION SST</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                        <li><a href="main/HTML/vue/dashboard.html">BAC STI2D</a></li>
                                                        <li><a href="main/HTML/vue/db-courses.html">BTS CPRP</a></li>
                                                        <li><a href="main/HTML/vue/db-exams.html">BTS SIO – OPTION SISR</a></li>
                                                        <li><a href="main/HTML/vue/db-profile.php">BTS SIO – OPTION SLAM</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="main/HTML/vue/awards.html" class="mm-arr">Evénement</a>
                                    <!-- MEGA MENU 1 -->
                                </li>
                                <li><a href="main/HTML/vue/contact-us.html">Contact</a></li>
                                <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                                <li class="cour-menu"/>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">

                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>History and <span> Awards</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                    <div class="s18-age-event l-info-pack-days">
                        <ul>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/1.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>21 May 1966</span>
                                    </div>
                                    <?php

                                    $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');
                                    $tab_requête = ['SELECT nom FROM evenement'];
                                    for ($i=0; $i <1; $i++) {
                                      $red = $bdd->query($tab_requête[$i]);
                                      $tableau =  $red->fetchall();
                                      

                                      }






                                    for ($i=0; $i < count($tableau) ; $i++) {
                                      foreach (array_unique($tableau[$i]) as $key => $value) {
                                       echo $key.' '.$value;
                                      }
                                    }
                                  ?>





                                    <div class="s17-eve-time-msg">

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/2.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>09:00AM - 10:30AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Academy Leadership</h4>
                                        <p>Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.</p>
                                        <div class="time-hide time-hide-1">
                                            <h5>Leadership</h5>
                                            <p> Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit amet sodales
                                                sapien. Ut vulputate nec mi non blandit.</p>
                                            <h5>Leadership</h5>
                                            <p> Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit amet sodales
                                                sapien. Ut vulputate nec mi non blandit.</p>
                                            <h5>Leadership</h5>
                                            <p> Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit amet sodales
                                                sapien. Ut vulputate nec mi non blandit.</p>
                                        </div>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-1-btn">
										<i class="fa fa-angle-down"></i>
									</a>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-11-btn hb-com">
										<i class="fa fa-angle-up"></i>
									</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/3.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>09:00AM - 10:30AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>All Courses</h4>
                                        <p>Donec at ligula turpis. Sed viverra velit ac urna dictum, nec pellentesque est rhoncus. Nam sollicitudin molestie consequat. Praesent ullamcorper nulla tellus, venenatis rhoncus lacus elementum eget. </p>
                                        <div class="time-hide time-hide-2">
                                            <h5>Course Name 1</h5>
                                            <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci quis diam pharetra faucibus.</p>
                                            <a href="course-details.html" class="aw-re-btn">Read more</a>
                                            <h5>Course Name 2</h5>
                                            <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci quis diam pharetra faucibus.</p>
                                            <a href="course-details.html" class="aw-re-btn">Read more</a>
                                            <h5>Course Name 3</h5>
                                            <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci quis diam pharetra faucibus.</p>
                                            <a href="course-details.html" class="aw-re-btn">Read more</a>
                                            <h5>Course Name 4</h5>
                                            <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci quis diam pharetra faucibus.</p>
                                            <a href="course-details.html" class="aw-re-btn">Read more</a>
                                            <h5>Course Name 5</h5>
                                            <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci quis diam pharetra faucibus.</p>
                                            <a href="course-details.html" class="aw-re-btn">Read more</a>
                                            <h5>Course Name 6</h5>
                                            <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci quis diam pharetra faucibus.</p>
                                            <a href="course-details.html" class="aw-re-btn">Read more</a>
                                            <h5>Course Name 7</h5>
                                            <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci quis diam pharetra faucibus.</p>
                                            <a href="course-details.html" class="aw-re-btn">Read more</a>
                                        </div>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-2-btn">
										<i class="fa fa-angle-down"></i>
									</a>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-22-btn hb-com">
										<i class="fa fa-angle-up"></i>
									</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/4.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>01:00PM - 02:30Pm</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Awards and Achievement</h4>
                                        <p>Sed nec egestas dui. Donec facilisis mauris sit amet auctor pellentesque. Suspendisse sagittis sagittis lobortis. Suspendisse rutrum eros vitae ex egestas, sed lobortis turpis facilisis.</p>
                                        <div class="time-hide time-hide-3">
                                            <h5>Best college award 2000</h5>
                                            <p>Sed nec egestas dui. Donec facilisis mauris sit amet auctor pellentesque. Suspendisse sagittis sagittis lobortis. Suspendisse rutrum eros vitae ex egestas, sed lobortis turpis facilisis. </p>
                                            <h5>Best college award 2018</h5>
                                            <p>Sed nec egestas dui. Donec facilisis mauris sit amet auctor pellentesque. Suspendisse sagittis sagittis lobortis. Suspendisse rutrum eros vitae ex egestas, sed lobortis turpis facilisis. </p>
                                        </div>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-3-btn">
										<i class="fa fa-angle-down"></i>
									</a>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-33-btn hb-com">
										<i class="fa fa-angle-up"></i>
									</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/5.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>02:45PM - 04:00Pm</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Facilities and Management</h4>
                                        <p>Qolor nibh dictum leo, ut accumsan dui purus eget turpis. Vestibulum molestie, tortor quis rutrum dapibus, tellus lorem volutpat tortor, ut efficitur justo nunc sed ante.</p>
                                        <div class="time-hide time-hide-4">
                                            <h5>Student Facilities</h5>
                                            <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                            <h5>Management Facilities</h5>
                                            <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                            <h5>Education Facilities</h5>
                                            <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                            <h5>Transport Facilities</h5>
                                            <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                            <h5>Alumini Facilities</h5>
                                            <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                        </div>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-4-btn">
										<i class="fa fa-angle-down"></i>
									</a>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-44-btn hb-com">
										<i class="fa fa-angle-up"></i>
									</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/6.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>10:30AM - 10:45AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Departments</h4>
                                        <p>Sed nec egestas dui. Donec facilisis mauris sit amet auctor pellentesque. Suspendisse sagittis sagittis lobortis. Suspendisse rutrum eros vitae ex egestas, sed lobortis turpis facilisis.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/7.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>10:30AM - 10:45AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Research</h4>
                                        <p>Donec at ligula turpis. Sed viverra velit ac urna dictum, nec pellentesque est rhoncus. Nam sollicitudin molestie consequat. Praesent ullamcorper nulla tellus.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/8.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>10:30AM - 10:45AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Staff</h4>
                                        <p>Curabitur accumsan ante id iaculis auctor. In mollis nisl tincidunt elit hendrerit, a ultrices massa commodo. Ut suscipit urna ut dolor varius semper.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/9.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>10:30AM - 10:45AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Admission</h4>
                                        <p>Proin sit amet metus nec augue vehicula congue ac sed risus. Ut quis enim in nulla facilisis venenatis cursus sed sapien. In convallis, est sit amet dictum placerat, erat velit consectetur dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/10.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>10:30AM - 10:45AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Media and Press Realese</h4>
                                        <p>A tristique est ante quis purus. Ut pretium leo enim, vel rhoncus dolor dictum vitae. Duis varius pellentesque vulputate. Vivamus pharetra</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/11.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>10:30AM - 10:45AM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Health Care</h4>
                                        <p>Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/12.png" alt="">
                                </div>
                                <div class="s17-eve-time s17-bor-bot-0">
                                    <div class="s17-eve-time-tim">
                                        <span>04:00PM - 04:30PM</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Nation award winning 2017</h4>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


    <!--SECTION START-->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>Vous souhaitez poster une offre d'alternance ?</h4>
                            <p>Veuillez compléter le formulaire suivant afin de d'enregistrer l'offre.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->




    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
  <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Alternance  </h4>

                    </div>
                    <div class="tab-inn">
                        <form action="../traitement/offre-traitement.php" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="" class="validate" name="nom" required>
                                    <label class="">Nom de l'entreprise</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">

                                  <input type="text" name="description">
                                    <label class="">Description de l'offre</label>
                                </div>
                            </div>
                            <div class="row">

                                <div class="input-field col s12">
                                    <input type="text" class="validate" value="" name="duree"required>
                                    <label class="">Durée du contract (en mois)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="" name="localisation"class="validate">
                                    <label class="">Localisation</label>
                                </div>
                            </div>

        <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style="">
                                      <input type="submit" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--HEADER SECTION-->
    <section class="wed-hom-footer">
        <div class="container">
            <!--<div class="row">
				<div class="col-md-12">
				<h4>About Wedding Planner</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
				<p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				<p></p>
			  </div>
			  </div>-->
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Top Courses</h4>
                    <ul>
                        <li><a href="course-details.html">Accounting/Finance</a></li>
                        <li><a href="course-details.html">civil engineering</a></li>
                        <li><a href="course-details.html">Art/Design</a></li>
                        <li><a href="course-details.html">Marine Engineering</a></li>
                        <li><a href="course-details.html">Business Management</a></li>
                        <li><a href="course-details.html">Journalism/Writing</a></li>
                        <li><a href="course-details.html">Physical Education</a></li>
                        <li><a href="course-details.html">Political Science</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>New Courses</h4>
                    <ul>
                        <li><a href="course-details.html">Sciences</a></li>
                        <li><a href="course-details.html">Statistics</a></li>
                        <li><a href="course-details.html">Web Design/Development</a></li>
                        <li><a href="course-details.html">SEO</a></li>
                        <li><a href="course-details.html">Google Business</a></li>
                        <li><a href="course-details.html">Graphics Design</a></li>
                        <li><a href="course-details.html">Networking Courses</a></li>
                        <li><a href="course-details.html">Information technology</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>HELP & SUPPORT</h4>
                    <ul>
                        <li><a href="#">24x7 Live help</a>
                        </li>
                        <li><a href="#">Contact us</a>
                        </li>
                        <li><a href="#">Feedback</a>
                        </li>
                        <li><a href="#">FAQs</a>
                        </li>
                        <li><a href="#">Safety Tips</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row wed-foot-link-1">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Get In Touch</h4>
                    <p>Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                    <p>Phone: <a href="#!">+101-1231-4321</a></p>
                    <p>Email: <a href="#!">info@educationmaster.com</a></p>
                </div>
                <div class="col-md-4">
                    <h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
                    <ul>
                        <li><a href="#"><span class="sprite sprite-android"></span></a>
                        </li>
                        <li><a href="#"><span class="sprite sprite-ios"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--HEADER SECTION-->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                    <p>Copyrights © 2018 RN53Themes. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate">
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Confirm password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... </h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate">
                                <label>User name or email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="icon-float">
            <ul>
                <li><a href="#" class="sh">1k <br> Share</a> </li>
                <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
            </ul>
        </div>
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="../js/main.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>
