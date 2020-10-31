<?php session_start(); ?>
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
    <link rel="shortcut icon" href="main/HTML/images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="main/HTML/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="main/HTML/css/design.css" rel="stylesheet">
    <link href="main/HTML/css/materialize.css" rel="stylesheet">
    <link href="main/HTML/css/bootstrap.css" rel="stylesheet" />
    <link href="main/HTML/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="main/HTML/css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                      <img style="width:50px;height:50px;" src="main/HTML/images/logo.png" alt="" />

                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Formation</h4>
                            <ul>
                              <li><a href="main/HTML/vue/all-courses.html">TROISIÈME PRÉPA PRO</a></li>
                              <li><a href="main/HTML/vue/all-courses.html">BAC PRO TU</a></li>
                              <li><a href="main/HTML/vue/all-courses.html">BAC PRO MEI</a></li>
                              <li><a href="main/HTML/vue/admission.html">BAC PRO SN</a></li>
                              <li><a href="main/HTML/vue/awards.php">FORMATION SST</a></li>
                              <li><a href="main/HTML/vue/dashboard.html">BAC STI2D</a></li>
                              <li><a href="main/HTML/vue/db-courses.html">BTS CPRP</a></li>
                              <li><a href="main/HTML/vue/db-exams.html">BTS SIO – OPTION SISR</a></li>
                              <li><a href="main/HTML/vue/db-profile.php">BTS SIO – OPTION SLAM</a></li>
                            </ul>
                            <h4>Compte</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Connexion</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Inscription</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="main/HTML/vue/all-courses.html">Formation</a></li>
                                <li><a href="main/HTML/vue/awards.php">Evénement</a></li>
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
                                <li><a href="#">LYCÉE PRIVÉ ET UFA - ROBERT SCHUMAN - Enseignement catholique sous contrat avec l'état</a>
                                </li>
                                <li><a href="#">Tél: 01 48 37 74 26</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                              <li><a href="#!" data-toggle="modal" data-target="#modal2">Inscription</a></li>
                                <?php

                                  if (empty($_SESSION))
                                { ?>

                                  <li><a href="#!" data-toggle="modal" data-target="#modal1">Connexion</a></li>
                                <?php }
                                if(isset($_SESSION)){?>
                                    <li><a href="main/HTML/vue/profile.php"><span>Mon compte</span></a></li>
                                    <li><a href="main/HTML/vue/deconnexion.php"><span>Deconnexion</span></a></li>
                              <?php }
                              elseif ($_SESSION ['role'] == 1)
                              {?>
                                <li><a href="main/HTML/vue/admin.html"><span>Mon compte</span></a></li>
                              <?php } ?>
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
                            <a href="index.php"><img style="margin-left:60px;width:90px;height:90px;margin-top:-9px;" src="main/HTML/images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="index.php">Accueil</a>
                                </li>
                                <li class="about-menu">
                                    <a href="main/HTML/vue/all-courses.html" class="mm-arr">Formation</a>
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
                                                        <li><a href="main/HTML/vue/awards.php">FORMATION SST</a></li>
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
                                    <a href="main/HTML/vue/awards.php" class="mm-arr">Evénement</a>
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
        </div>

    </section>
    <!--END HEADER SECTION-->

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="main/HTML/images/site/lycée2.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Lycée   <span>Robert SCHUMAN</span></h2>
                        <p></p>

                    </div>
                </div>
                <div class="item">
                    <img src="main/HTML/images/site/lycée1.png" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Lycée   <span>Robert SCHUMAN</span></h2>
                        <p></p>

                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>

    <!-- QUICK LINKS -->




    <!-- POPULAR COURSES -->







    <!-- FOOTER -->
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
                    <h4>Formation</h4>
                    <ul>
                      <li><a href="main/HTML/vue/all-courses.html">TROISIÈME PRÉPA PRO</a></li>
                      <li><a href="main/HTML/vue/all-courses.html">BAC PRO TU</a></li>
                      <li><a href="main/HTML/vue/all-courses.html">BAC PRO MEI</a></li>
                      <li><a href="main/HTML/vue/admission.html">BAC PRO SN</a></li>
                      <li><a href="main/HTML/vue/awards.php">FORMATION SST</a></li>
                      <li><a href="main/HTML/vue/dashboard.html">BAC STI2D</a></li>
                      <li><a href="main/HTML/vue/db-courses.html">BTS CPRP</a></li>
                      <li><a href="main/HTML/vue/db-exams.html">BTS SIO – OPTION SISR</a></li>
                      <li><a href="main/HTML/vue/db-profile.php">BTS SIO – OPTION SLAM</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Accès</h4>
                    <ul>
                        <p>RER B (Le Bourget) et Bus 133 (Albert Chardavoine)</p>
                        <p>RER B (La Courneuve) et Bus 249 (Albert Chardavoine) </p>
                        <p>Tramway T11: arrêt Dugny-La Courneuve </p>
                    </ul>
                </div>

                    <div class="col-md-4">
                        <h4>Contact</h4>
                        <ul>
                        <p>Adresse : 5 Avenue du Général de Gaulle, 93440 Dugny</p>
                        <p>Téléphone : 01 48 37 74 26</a></p>
                        <p>Email: <a href="#!">administration@lyceerobertschuman.com</a></p>
                      </ul>
                    </div>



            </div>
        </div>
    </section>

    <!-- COPY RIGHTS -->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                    <p>Copyrights © 2021 RN53Themes. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>BONJOUR ! </h1>
                    <p>Vous ne possedez pas de compte? N'hesitez pas sa prend 2 minute </p>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="main/HTML/images/cancel.png" alt="" />
                    </a>
                    <h4>Bonjour ! </h4>
                    <p>Vous ne possedez pas de compte? N'hesitez pas sa prend 2 minute </p>
                      <form action="main/HTML/traitement/connexion-traitement.php" method="POST" class="s12">
                        <div>
                            <div class="input-field s12">
                                <input name="mail" type="text" data-ng-model="name" class="validate">
                                <label>Email</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input name="mdp" type="password" class="validate">
                                <label>Mot de passe</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Souvenir de moi</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Mot de passe oublier</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Crée un nouveau compte </a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Bonjour</h1>
                    <p>Vous ne possedez pas de compte? N'hesitez pas sa prend 2 minute </p>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="main/HTML/images/cancel.png" alt="" />
                    </a>
                    <h4>Crée un nouveau compte </h4>
                    <form action="main/HTML/traitement/inscription-traitement.php" method="POST" class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" name="nom"  data-ng-model="name1" class="validate">
                                <label>nom</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="text" name="prenom"  data-ng-model="name1" class="validate">
                                <label>prenom</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" name="mail" class="validate">
                                <label>Email</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" name="mdp" class="validate">
                                <label>mot de passe</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" name="mdp" class="validate">
                                <label>Confirme le mot de passe </label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Déja membre ? Connexion </a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">

                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="main/HTML/images/cancel.png" alt="" />
                    </a>
                    <h4>Mot de passe oublier </h4>

                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate">
                                <label>Nom ou mail </label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Déja membre? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Crée un compte </a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!--Import jQuery before materialize.js-->
    <script src="main/HTML/js/main.min.js"></script>
    <script src="main/HTML/js/bootstrap.min.js"></script>
    <script src="main/HTML/js/materialize.min.js"></script>
    <script src="main/HTML/js/custom.js"></script>
</body>

</html>
