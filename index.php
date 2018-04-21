<?php
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"web");
session_start();
?>

<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Fi thniti ? - by Walid Braham</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Forms -->
        <link href="css/jquery.idealforms.css" rel="stylesheet">
        <!-- Select  -->
        <link href="css/jquery.idealselect.css" rel="stylesheet">
        <!-- Slicknav  -->
        <link href="css/slicknav.css" rel="stylesheet">
        <!-- Main style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <header class="header">

            <div class="top-menu">
				<?php 
				if (isset($_SESSION["adminn"])){
				$connexion = $_SESSION["adminn"];
				if ($connexion!=""){
				?>	
				<section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">

                                <a href="logout.php">Déconnexion</a>

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->
				<?php
				}} else{
				?>	
				<section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">

                                <a data-toggle="modal" data-target="#loginModal">
                                    Log in
                                </a> /
                                <a data-toggle="modal" data-target="#regModal">
                                    Sign up
                                </a>

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->	
				<?php	
				}
				?>
            </div><!-- end .top-menu -->

            <div class="main-baner">

                <div class="fullscreen background parallax clearfix" style="background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>Fi thniti ?</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
                                                        <a href="index.php">Acceuil</a>
                                                    </li>
                                                    <li>
                                                        <a href="rides.php">Voyageur</a>
                                                    </li>
                                                    <li>
                                                        <a href="add-ride.php">Conducteur</a>
                                                    </li>
                                                </ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->

                                </div><!-- end .row -->

                            </section><!-- end .container -->

                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

                </div><!-- end .background .parallax -->

            </div><!-- end .main-baner -->

        </header><!-- end .header -->

        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="page-content">

                        <div class="services clearfix">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="page-sub-title textcenter">
                                    <h2>On vous facilite la vie</h2>
                                    <div class="line"></div>
                                </div><!-- end .page-sub-title -->

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-car"></i>

                                    <h3>Partager votre route</h3>
                                    <p>Vous cherchez quelqu'un avec qui partager votre course et votre essence? Créez un compte avec nous et oubiez ce problème.</p>


                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-users"></i>

                                    <h3>Faites-vous de nouveaux amis</h3>
                                    <p>Elargissez votre cercle d'amis et trouvez des personnes qui partagent les memes loisirs que vous.</p>

                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-map-marker"></i>

                                    <h3>Découvrez votre pays</h3>
                                    <p> Partez à la découverte de votre pays en bonne compagnie, plus d'excuses préparez vos bagages et partez à l'aventure. </p>

                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                        </div><!-- end .services -->

                        <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="background parallax" style="background-image:url('img/XWBIL5.jpg');" data-img-width="1600" data-img-height="1064">

                                <div class="main-parallax-content">

                                    <div class="second-parallax-content">

                                        <div class="parallax-content clearfix">

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">1,000</span>
                                                    <span>Utilisateurs satisfaits</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">3,000</span>
                                                    <span>Voyages</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">600,000</span>
                                                    <span>Kilomètres en bonne compagnie</span>
                                                </div>
                                            </div>

                                        </div><!-- end .parallax-content -->

                                    </div><!-- end .main-parallax-content -->

                                </div><!-- end .paralax -->

                            </div><!-- end .fullscreen .background .parallax -->

                        </div><!-- end .col-md-12 -->

                        <div class="clearfix"></div>

                        <div class="last-rides">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="page-sub-title textcenter">
                                    <h2>Derniers voyages</h2>
                                    <div class="line"></div>
                                </div><!-- end .page-sub-title -->

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
							<?php
							$i = 0;
							$res=mysqli_query($c,"select * from annonce");
							while ($row=mysqli_fetch_array($res)){
							$i++;
							?>
								<article class="ride-box clearfix">
                                    <div class="ride-content">
                                        <h3><a href="#">
										<?php $de="de ";
										$vers=" vers ";
										?>
										<?php echo($de.$row["depart"].$vers.$row["arrivee"]); ?>
										</a></h3>conducteur <a href="#">
										<?php echo($row["conducteur"]); ?>
										</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                <?php echo($row["date"]); ?>
                                            </a>
                                        </li>

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Nombre de sièges" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                <?php echo($row["nbplaces"]); ?>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="single-post.php?id=<?php echo $row["id_annonce"];?>">
                                                <i class="fa fa-file"></i>
                                                <p>Plus d'infos</p>
                                            </a>
                                        </li>
                                    </ul>
                                </article>
							<?php
							if($i==5){
									break;
								}  
							}
							?>
                                <div class="clearfix"></div>

                                <div class="read-all pagination-margin">
                                    <a href="rides.php">Tout afficher</a>
                                </div>

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                        </div><!-- end .last-rides -->

                        <div class="clearfix"></div>

                    </div><!-- end .page-content -->

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Copyrights Walid Braham
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div><!-- end .modal-header -->

                    <div class="modal-body">
                        <form action="" method="post" novalidate autocomplete="off" class="idealforms login">

                            <div class="log-header">
                                <span class="log-in">Log in</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" name="loginbtn" class="submit btn green-color">Log in</button>
                            </div>

                            <div class="clearfix"></div>

                        </form>
                    </div>
					<?php
					if(isset($_POST["loginbtn"])){
					$res=mysqli_query($c,"select * from user where email='$_POST[username]' && password='$_POST[password]'");
					while ($row=mysqli_fetch_array($res)){
					$_SESSION["admin"]=$row["email"];
					$_SESSION["adminn"]=$row["email"];
					if($row["email"]=="admin"){
					?>
					<script type="text/javascript">
					window.location="admin.php";
					</script>
					<?php
					} else {
					?>
					<script type="text/javascript">
					window.location="rides.php";
					</script>
					<?php
					}
					}
					}
					?>
                </div>
            </div>
        </div>

        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="" method="post" novalidate autocomplete="off" class="idealforms reg">

                            <div class="log-header">
                                <span class="log-in">Sign up</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="email" type="email"  placeholder="E-Mail">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="confirmpass" type="password"  placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" name="signupbtn" class="submit btn green-color">Sign up</button>
                            </div>

                            <div class="clearfix"></div>

                        </form><!-- end .reg -->
                    </div><!-- end .modal-body -->
					<?php
					if(isset($_POST["signupbtn"])){
					$res=mysqli_query($c,"insert into user (nom,email,password) values ('$_POST[username]','$_POST[email]','$_POST[password]')");
					?>
					<script type="text/javascript">
					window.location="index.php";
					</script>
					<?php
					}
					?>
                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <!-- Counter-Up  -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <!-- Rating  -->
        <script type="text/javascript" src="js/bootstrap-rating-input.min.js"></script>
        <!-- Slicknav  -->
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

    </body>
</html>
