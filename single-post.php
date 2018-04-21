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
        <title>Fi thniti ? - Annonce</title>
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

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-content">
							<?php $ch=$_GET['id'];
							$res=mysqli_query($c,"select * from annonce where id_annonce='".$ch."'");
							while ($row=mysqli_fetch_array($res)){
							?>
                            <article class="single-article">
                                <header class="single-article-title">
									<?php $de="de ";
										$vers=" vers ";
										?>
									<h2><?php echo($de.$row["depart"].$vers.$row["arrivee"]); ?></h2>
                                    <span>conducteur <a href="#">
									<?php echo($row["conducteur"]); ?>
									</a></span>
                                </header>
                                <ul class="article-meta">
                                    <li class="article-date">
                                        <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                            <i class="fa fa-calendar"></i>
                                            <?php echo($row["date"]); ?>
                                        </a>
                                    </li><!-- end .article-date -->
                                    <li class="article-people">
                                        <a href="#" class="tooltip-link" data-original-title="Nombre de places" data-toggle="tooltip">
                                            <i class="fa fa-user"></i>
                                            <?php echo($row["nbplaces"]); ?>
                                        </a>
                                    </li><!-- end .article-people -->
                                    <li>
                                        <a href="#" class="tooltip-link" data-original-title="Voiture" data-toggle="tooltip">
                                            <i class="fa fa-car"></i>
                                            <?php echo($row["voiture"]); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltip-link" data-original-title="Téléphone" data-toggle="tooltip">
                                            <i class="fa fa-mobile"></i>
                                            <?php echo($row["telephone"]); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="fa fa-envelope"></i>
                                            Message privé
                                        </a>
                                    </li>
                                </ul><!-- end .article-meta -->
                                <div class="article-content">
                                    <?php echo($row["description"]); ?> 
                                </div>
                            </article>
							<?php
								}
							?>
							
							<div class="comments-area" id="comments">

                                <!-- Begin Comments -->

                                <h3>Commentaires</h3>

                                <ol class="commentslist">

									<?php
									$chh=$_GET['id'];
									$res=mysqli_query($c,"select * from commentaires where idannonce='".$chh."'");
									while ($row=mysqli_fetch_array($res)){
									?>
									<li id="comment-1">
                                        <article class="comment even thread-even depth-1 clearfix">

                                            <header>

                                                <div class="comment-user-name">
                                                    <a href="#">
													<?php echo($row["nomcomplet"]); ?>
													</a>
                                                </div>

                                                <span>
												<?php 
												$text = "Posté le ";
												?>
												<?php echo($text.$row["date"]); ?>
												</span>

                                            </header>

                                            <figure class="comment-avatar">
                                                <img alt='' src='img/avatar-2.jpg' class='avatar avatar-80 photo avatar-default' height='80' width='80' />
                                            </figure>

                                            <p>
											<?php echo($row["message"]); ?>
											</p>

                                            <a class='comment-reply-link btn green-color'>Répondre</a>
                                        </article>
										</li>
									<?php
										}
									?>
                                    

                                </ol><!-- end .commentslist -->

                                <div class="clearfix"></div>

                                <div id="respond">

                                    <div class="clearfix"></div>

                                    <h3 id="reply-title">Votre commentaire</h3>

                                    <form id="comment-form" action="" method="post" novalidate autocomplete="off" class="idealforms addcomment">

                                        <div class="field">
                                            <input name="username" type="text" placeholder="Nom">
                                            <span class="error"></span>
                                        </div>

                                        <div class="full-fild">
                                            <textarea name="message" id="message" cols="5" placeholder="Message" rows="4"></textarea>
                                        </div>

                                        <div class="field buttons">
                                            <button type="submit" name="btncommentaire" class="btn btn-lg blue-color">Envoyer</button>
                                        </div>
                                        <span id="invalid"></span>

                                    </form>
									<?php
									date_default_timezone_set('Europe/Paris');
									$date = date('d/m/Y h:i:s a', time());
									if(isset($_POST["btncommentaire"])){
										$idd=$_GET['id'];
										$_SESSION["idcommentaire"]=$idd;
										$_SESSION["usernamecommentaire"]=$_POST["username"];
										$_SESSION["messagecommentaire"]=$_POST["message"];
										$_SESSION["datecommentaire"]=$date;
									?>
										<script type="text/javascript">
										window.location="ajout-commentaire.php";
										</script>
									<?php
									}
									?>
								
                                </div><!-- #respond -->
                                <!-- End Comments -->

                            </div> <!-- end .comments-area -->

                        </div><!-- end .page-content -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

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
					window.location="single-post.php";
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
