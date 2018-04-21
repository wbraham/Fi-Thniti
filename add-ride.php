<?php
session_start();
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"web");
?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Fi thniti ? - Je suis un conducteur</title>
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
				<script type="text/javascript">
				window.location="index.php";
				</script>
				<!--<section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">

                                <a data-toggle="modal" data-target="#loginModal">
                                    Log in
                                </a> /
                                <a data-toggle="modal" data-target="#regModal">
                                    Sign up
                                </a>

                            </div>
                        </div>

                    </div>
                </section>-->	
				<?php	
				}
				?>
            </div><!-- end .top-menu -->

            <div class="main-baner">

                <div class="background parallax clearfix" style="background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

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

                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2>Ajouter votre course</h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-lg-12 -->

                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-content add-new-ride">

                            <form action="" method="post" novalidate autocomplete="off" class="idealforms add-ride">

								<div class="field">
									<input name="nomcomplet" type="text" placeholder="Nom Complet" required>
								</div>
								
                                <div class="field">
                                    <select id="destination" name="fromm" required>
                                        <option value="default">Départ</option>
                                        <option value="Tunis">Tunis</option>
                                        <option value="Sousse">Sousse</option>
                                        <option value="Sfax">Sfax</option>
                                        <option value="Bizerte">Bizerte</option>
                                        <option value="Nabeul">Nabeul</option>
                                        <option value="Hammamet">Hammamet</option>
                                        <option value="Kairouan">Kairouan</option>
										<option value="Tozeur">Tozeur</option>
										<option value="Monastir">Monastir</option>
										<option value="Djerba">Djerba</option>
                                    </select>
                                </div>

                                <div class="field">
                                    <select id="destinationd" name="destinationd" required>
                                        <option value="default">Destination</option>
                                        <option value="Tunis">Tunis</option>
                                        <option value="Sousse">Sousse</option>
                                        <option value="Sfax">Sfax</option>
                                        <option value="Bizerte">Bizerte</option>
                                        <option value="Nabeul">Nabeul</option>
                                        <option value="Hammamet">Hammamet</option>
                                        <option value="Kairouan">Kairouan</option>
										<option value="Tozeur">Tozeur</option>
										<option value="Monastir">Monastir</option>
										<option value="Djerba">Djerba</option>
                                    </select>
                                </div>

                                <div class="field">
                                    <input name="dateannonce" type="text" placeholder="Date" class="datepicker" required>
                                </div>

                                <div class="field">
                                    <select id="destination" name="nbplaces" required>
                                        <option value="default">Places libres</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
										<option value="4">4</option>
                                    </select>
                                </div>
								
								<div class="field">
									<input name="voiture" type="text" placeholder="Voiture" required>
								</div>
								
								<div class="field">
									<input name="telephone" type="text" placeholder="Telephone" required>
								</div>
								
								<div class="field">
									<input name="descrip" type="text" placeholder="Description" required>
								</div>

                                <div class="field buttons">
                                    <button type="submit" name="ajoutAnnonceBtn" class="btn btn-lg green-color">Ajouter</button>
                                </div>

                            </form>

                        </div><!-- end .page-content -->
                    </div><!-- end .col-sm-12 -->
						<?php
						if(isset($_POST["ajoutAnnonceBtn"])){
							$res=mysqli_query($c,"insert into annonce (conducteur,depart,arrivee,date,nbplaces,voiture,telephone,description) values ('$_POST[nomcomplet]','$_POST[fromm]','$_POST[destinationd]','$_POST[dateannonce]',$_POST[nbplaces],'$_POST[voiture]',$_POST[telephone],'$_POST[descrip]')");
						}
						?>
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

                        </form><!-- end .login -->
                    </div><!-- end .modal-body -->
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
                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

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
					window.location="add-ride.php";
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
