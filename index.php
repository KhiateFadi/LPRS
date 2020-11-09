
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
<?php include('main/HTML/vue/header.php'); ?>

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
<?php include('main/HTML/vue/footer.php'); ?>

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
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="" alt="" />
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
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="" alt="" />
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
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="" alt="" />
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
