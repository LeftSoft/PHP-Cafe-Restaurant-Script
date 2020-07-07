<?php 
ob_start();
session_start();
include 'ayarlar/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id' => 0
	));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
	'id' => 0
	));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);




 ?>
<!DOCTYPE html>
<html lang="en-us">


<head>
<meta charset="utf-8" />
<!-- Page Title -->
<title><?php echo $ayarcek['ayar_title'] ?></title>
<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>" />
<meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>" />
<meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>" />

<!-- Mobile Meta Tag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Fav and touch icons -->
<link rel="shortcut icon" type="image/x-icon" href="images/fav_touch_icons/favicon.ico" />
<link rel="apple-touch-icon" href="images/fav_touch_icons/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="images/fav_touch_icons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="images/fav_touch_icons/apple-touch-icon-114x114.png" />

<!-- Google Web Font -->
<link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,600,700|Dancing+Script:400,700|Great+Vibes|Josefin+Sans:400,400i,600,600i|Libre+Baskerville|Open+Sans:600,600i,700|Oswald:300,400,700|Yellowtail" rel="stylesheet">

<!-- Fonf Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Food Flaticon Font -->
<link href="css/food-flaticon.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="js/datepiker/css/datepicker.css" />

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-progressbar.css" />

<!-- ********************** XPRO Sliders ******************-->
<!-- HERO Home Slider -->
<link type="text/css" rel="stylesheet" href="js/xpro/slider.css" />

<!-- ********************** Owl Carousel ******************-->
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Template CSS -->
<link href="css/style.css" rel="stylesheet" />

</head>
<body class="home-page" >
	<div id="pageloader">
	  <div id="page-loader-box"></div>
		<div id="pageloadDiv" class="page-animate-bottom"></div>
	</div>
	<!--  WRAPPER -->
	<div id="wrapper">
	<!-- Mobile menu overlay background -->
	<div class="overlay" data-image-src="images/content/mob-menu-background.jpg"></div>

		<!-- BEGIN HEADER -->
		<header id="header">
			<div id="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul id="top-info">
								<li>Telefon: <?php echo $ayarcek['ayar_tel'] ?></li>
								<li>İletişim: <a href="mailto:<?php echo $ayarcek['ayar_mail'] ?>"><?php echo $ayarcek['ayar_mail'] ?></a></li>
								<li><a href="#" style="color:#c5a86a;"><i class="fa  fa-clock-o"></i> <?php echo $ayarcek['ayar_mesai'] ?></a></li>
							</ul>

							<ul class="socials-box pull-right">
								<li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
								<li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
								<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
								<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
								<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
							</ul>

						</div>
					</div>
				</div>
			</div>

			<div id="nav-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<!-- From Mobile Logo.png -->
							<a href="index-2.html" class="nav-logo"><img src="images/logo.png" alt=""></a>

							<button class="nav-mobile-btn is-closed animated fadeInLeft" data-toggle="offcanvas">
								<span class="hamb-top"></span>
								<span class="hamb-middle"></span>
								<span class="hamb-bottom"></span>
							</button>

							<!-- BEGIN MAIN MENU -->
							<nav id="nav-mobile" class="navbar">
								<ul class="nav navbar-nav">
									<li><a href="index.php">Anasayfa</a></li>
									<li><a href="hakkinda.php">Hakkında</a></li>
									<li><a href="rezervasyon.php">Rezervasyon</a></li>
									
									<!-- From Nav Logo.png -->
									<li class="border-none"><a href="index.php" class="nav-logo"><img src="images/logo.png" alt=""></a></li>
<!---
									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Blog<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="blog_right_sidebar.html">Blog Right Sidebar</a></li>
											<li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
											<li><a href="blog_fullwidth.html">Blog Fullwidth</a></li>
											<li><a href="blog_single.html">Blog Single</a></li>
										</ul>
									</li>

--->
<li><a href="menu.php">Menü</a></li>
									<li><a href="galeri.php">Galeri</a></li>
									
									<li><a href="iletisim.php">İletişim</a></li>
								</ul>

							</nav>
							<!-- END MAIN MENU -->

						</div>
					</div>
				</div>
			</div>
		</header>