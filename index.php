<<<<<<< HEAD
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
	include 'modul/connect.php';
	include "modul/page.php";

	if($_SESSION['status'] == "user"){
	    $id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
	}
?>

<html lang="en">
<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>DESA-KU | Kenali Desamu, Sejahtera Hidupmu</title>

	<!-- Styles -->
	<link rel='stylesheet' href='asse/css/bootstrap.min.css'>
	<link rel='stylesheet' href='asse/css/animate.min.css'>
	<link rel='stylesheet' href="asse/css/font-awesome.min.css"/>
	<link rel='stylesheet' href="asse/css/style.css"/>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	
</head>
<body>
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
<div class="container">
	<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<!-- Your Logo -->
		<a href="index.php" class="navbar-brand">DESA<span class="lighter">-KU</span></a>
	</div>
	<!-- Start Navigation -->
	<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	<ul class="nav navbar-nav">
			<li>
			<a href="index.php">Home</a>
			</li>
			<li>
			<a href="services.php">Services</a>
			</li>
			<li>
			<a href="about.php">About</a>
			</li>
			<?php
				if($_SESSION['status'] == "user"){
			?>
			<li>
			<a href="profile.php"><span>Profile</span></a>
			</li>
			<li>
			<a href="modul/logoutproses.php"><span>Logout</span></a>
			</li>
			<?php
				}
				else{
			?>
			<li>
			<a href="login.php"><span>Login</span></a>
			</li>
			<?php
				}
			?>
		</ul>
		</nav>
	</div>
	</header>
	<!-- Intro
		================================================== -->
	<section id="hero" class="section" style="background-image: url(img/ava3.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="herotext">
					<h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s">DESA<span class="lighter">-KU</span></h1>
					<p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
						When we give cheerfully and accept gratefully, everyone is blessed.
					</p>
					<p>
						<a href="services.php" class="btn btn-default btn-lg wow fadeInLeft" role="button"> GET STARTED </a>
					</p>
				</div>
			</div>
			<div class="col-md-7">
			</div>
		</div>
	</div>
	</section>

	<!-- About
		================================================== -->
	<section id="about" class="parallax section" style="background-image: url(img/ava1.jpg);">
	<div class="wrapsection">
		<div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.6;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Title -->
					<div class="maintitle">
						<h1 class="section-title"><strong>OUR <span class="lighter">SERVICES</span></h1>
						<br/><p class="lead">
							Nikmati pelayanan terpadu yang bisa diakses secara cepat dan mudah. Tak perlu ragu karena kami menjamin kerahasiaan data Anda. Ayo, tunggu apa lagi!
							<br/><br/><button type="button" class="btn btn-info btn-md"><a href="services.php">LET'S GO</a></button>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	</section>

<!-- Text Carousel
	================================================== -->
<section id="slider" class="parallax section" style="background-image: url(img/ava3.jpg);">
<div class="wrapsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="Carousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#Carousel" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel" data-slide-to="1"></li>
						<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<blockquote>
								<p class="lead">
									You have not lived today until you have done something for someone who can never repay you.
								</p>
								<small>John Bunyan, Marathon</small>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<p class="lead">
									The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer.
								</p>
								<small>Mahatma Gandhi</small>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<p class="lead">
									There is no exercise better for the heart than reaching down and lifting people up.
								</p>
								<small>John Holmes, Organizer</small>
							</blockquote>
						</div>
					</div>
					<a class="left carousel-control" href="#Carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#Carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>



<!-- Credits
=============================================== -->
<section id="credits" class="text-center">
	<span class="social wow zoomIn">
	</span><br/>
	&copy; 2017 <b>DESA-KU</b> | <i>Kenali Desamu, Sejahtera Hidupmu</i>
</section>
<!-- Bootstrap core JavaScript
	================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="asse/js/jquery.min.js"></script>
<script src="asse/js/bootstrap.min.js"></script>
<script src="asse/js/waypoints.min.js"></script>
<script src="asse/js/jquery.scrollTo.min.js"></script>
<script src="asse/js/jquery.localScroll.min.js"></script>
<script src="asse/js/jquery.magnific-popup.min.js"></script>
<script src="asse/js/validate.js"></script>
<script src="asse/js/common.js"></script>
</body>
</html>
=======
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
	include 'modul/connect.php';
	include "modul/page.php";

	if($_SESSION['status'] == "user"){
	    $id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
	}
?>

<html lang="en">
<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>DESA-KU | Kenali Desamu, Sejahtera Hidupmu</title>

	<!-- Styles -->
	<link rel='stylesheet' href='asse/css/bootstrap.min.css'>
	<link rel='stylesheet' href='asse/css/animate.min.css'>
	<link rel='stylesheet' href="asse/css/font-awesome.min.css"/>
	<link rel='stylesheet' href="asse/css/style.css"/>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	
</head>
<body>
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
<div class="container">
	<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<!-- Your Logo -->
		<a href="index.php" class="navbar-brand">DESA<span class="lighter">-KU</span></a>
	</div>
	<!-- Start Navigation -->
	<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	<ul class="nav navbar-nav">
			<li>
			<a href="index.php">Home</a>
			</li>
			<li>
			<a href="services.php">Services</a>
			</li>
			<li>
			<a href="about.php">About</a>
			</li>
			<?php
				if($_SESSION['status'] == "user"){
			?>
			<li>
			<a href="profile.php"><span>Profile</span></a>
			</li>
			<li>
			<a href="modul/logoutproses.php"><span>Logout</span></a>
			</li>
			<?php
				}
				else{
			?>
			<li>
			<a href="login.php"><span>Login</span></a>
			</li>
			<?php
				}
			?>
		</ul>
		</nav>
	</div>
	</header>
	<!-- Intro
		================================================== -->
	<section id="hero" class="section" style="background-image: url(img/ava3.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="herotext">
					<h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s">DESA<span class="lighter">-KU</span></h1>
					<p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
						When we give cheerfully and accept gratefully, everyone is blessed.
					</p>
					<p>
						<a href="services.php" class="btn btn-default btn-lg wow fadeInLeft" role="button"> GET STARTED </a>
					</p>
				</div>
			</div>
			<div class="col-md-7">
			</div>
		</div>
	</div>
	</section>

	<!-- About
		================================================== -->
	<section id="about" class="parallax section" style="background-image: url(img/ava1.jpg);">
	<div class="wrapsection">
		<div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.6;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Title -->
					<div class="maintitle">
						<h1 class="section-title"><strong>OUR <span class="lighter">SERVICES</span></h1>
						<br/><p class="lead">
							Nikmati pelayanan terpadu yang bisa diakses secara cepat dan mudah. Tak perlu ragu karena kami menjamin kerahasiaan data Anda. Ayo, tunggu apa lagi!
							<br/><br/><button type="button" class="btn btn-info btn-md"><a href="services.php">LET'S GO</a></button>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	</section>

<!-- Text Carousel
	================================================== -->
<section id="slider" class="parallax section" style="background-image: url(img/ava3.jpg);">
<div class="wrapsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="Carousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#Carousel" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel" data-slide-to="1"></li>
						<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<blockquote>
								<p class="lead">
									You have not lived today until you have done something for someone who can never repay you.
								</p>
								<small>John Bunyan, Marathon</small>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<p class="lead">
									The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer.
								</p>
								<small>Mahatma Gandhi</small>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<p class="lead">
									There is no exercise better for the heart than reaching down and lifting people up.
								</p>
								<small>John Holmes, Organizer</small>
							</blockquote>
						</div>
					</div>
					<a class="left carousel-control" href="#Carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#Carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>



<!-- Credits
=============================================== -->
<section id="credits" class="text-center">
	<span class="social wow zoomIn">
	</span><br/>
	&copy; 2017 <b>DESA-KU</b> | <i>Kenali Desamu, Sejahtera Hidupmu</i>
</section>
<!-- Bootstrap core JavaScript
	================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="asse/js/jquery.min.js"></script>
<script src="asse/js/bootstrap.min.js"></script>
<script src="asse/js/waypoints.min.js"></script>
<script src="asse/js/jquery.scrollTo.min.js"></script>
<script src="asse/js/jquery.localScroll.min.js"></script>
<script src="asse/js/jquery.magnific-popup.min.js"></script>
<script src="asse/js/validate.js"></script>
<script src="asse/js/common.js"></script>
</body>
</html>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
