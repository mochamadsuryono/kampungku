<<<<<<< HEAD
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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>DESA-KU | Kenali Desamu, Sejahtera Hidupmu!</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style2.css" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="#page-top"><img src="" alt=""></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<nav><ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="index.php">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="services.php">Services</a>
			</li>
			<li>
			<a class="page-scroll" href="about.php">About</a>
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
		</ul></nav>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading">WHAT WE STAND FOR<br/> & OUR<b> CONTACT</b></h2>
			<hr>
			<br/><h3><p>
				 <b>"DESA-KU: Kenali Desamu, Sejahtera Hidupmu"</b> merupakan sebuah pelayanan desa terpadu berbasis Online yang memberikan kemudahan akses dan kenyamanan untuk masyarakat. Kini, masyarakat mampu mengakses informasi secara realtime dan lebih update tentunya. Ayo, kenali desamu sekarang!
			</p></h3>
	</div>
</div>
</div>
</section>
<!-- Section after about --->
<section class="no-padding">
<div class="equal-heights w-middle">
<div class="col-md-4 bg-primary">
	<div class="box text-right">
		<h2>THE <b>SPEECH</b></h2>
		<h1>"Visi tanpa <b>eksekusi</b> adalah <b>halusinasi</b>."</h1><br/>
		<p>
			<b>Best Regards,</b>
			<br/> Ir. Kim So-Hyun
		</p>
	</div>
</div>
<div class="col-md-4">
	<img src="img/kades.jpg" alt="">
</div>
<div class="col-md-4 bg-dark">
	<div class="box">
		<h2>THE <b>SPEECH</b></h2>
		<p>
			 Selamat datang!<br/>
			 Dengan hadirnya <b>DESA-KU</b>: Kenali Desamu, Sejahtera Hidupmu, diharapkan mampu meningkatkan kualitas dan produktivitas masyarakat serta memudahkan memecahkan permasalahan Anda sebagai solusi terbaik untuk Anda.
			 <br/><br/>Terima kasih telah mengunjungi kami!
		</p>
	</div>
</div>
</div>
<section class="no-padding">
<div class="equal-heights w-middle text-center">
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2>BEST <b>Services</b></h2>
		<p>
			DESA-KU, Kenali Desamu, Sejahtera Hidupmu, memberikan pelayanan intensif dan ramah, serta memberikan fasilitas kemudahan dan kenyamanan untuk Anda. Jadikanlah pelayanan kami sebagai aktifitas yang menyenangkan.
		</p>
	</div>
</div>
<div class="col-md-4 bg-darkgray">
	<div class="box">
		<h2>Real <b>Solutions</b></h2>
		<p>
			 DESA-KU, Kenali Desamu, Sejahtera Hidupmu, adalah pusat aspirasi dan pelayanan masyarakat yang dapat menjawab kebutuhan kehidupan Anda. Kami memberikan kemudahan untuk Anda dalam pembuatan surat dan pelaporan tamu dengan menu navigasi "Services". Solusi cepat dan terpercaya. 
		</p>
	</div>
</div>
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2>Enjoy <b>Life</b></h2>
		<p>
			Pastikan Anda selalu mengikuti perkembangan terbaru dari kami dengan berbagai informasi yang menarik dan jangan lupa untuk berlangganan "Villagers News" kami untuk mendapatkan info lengkap mengenai pengumuman terbaru dan berita menarik lainnya.
		</p>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Timeline
================================================== -->
<section id="tline">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>CONTACT</b></h2>
	</div>
</div>
</div>
<br/>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="tline-holder">
			<!-- tline ITEM-->
			<li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-phone">
				</div>
				<div class="tline-item-txt text-right">
					<div class="meta">
						
					</div>
					<h3>Call Us</h3>
					<p>
						085641834032 | Pelayanan cepat, ramah, tepat, dan tanpa basa-basi. Anda tidak perlu khawatir, segera hubungi kami!
					</p>
				</div>
			</div>
			</li><br/>
			<!-- /tline--><br/>
			<br/>
			<!-- tline-->
			<li class="tline-item-right wow fadeInRight">
			<div class="tline-item-content">
				<div class="date-icon fa fa-envelope">
				</div>
				<div class="tline-item-txt text-left">
					<div class="meta">
						 
					</div>
					<h3>MAIL US</h3>
					<p>
						kampungku@gmail.com | Berbagai keluhan dapat Anda sampaikan sekarang. "DESA-KU" solusi terbaik masalah Anda!
					</p>
				</div>
			</div>
			</li>
			<!-- /tline-->
			<!-- tline-->
			<li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-globe">
				</div>
				<div class="tline-item-txt text-right">
					<div class="meta">
						 
					</div>
					<h3>ADDRESS</h3>
					<p>
						Jln. Babakan Lio RT 004/011 No. 19 Kelurahan: Balumbang Jaya, Kecamatan: Bogor Barat, Bogor Barat, Bogor 16116
					</p>
				</div>
			</div>
			</li>
			<!-- /tline-->
			<!-- /tline-->
			<li class="tline-start">
			<div class="tline-start-content">
				<div class="tline-start-icon">
				</div>
				<a href="services.php" class="btn btn-primary bgn-xl wow zoomIn">START</a>
			</div>
			</li>
		</ul>
	</div>
</div>
</div>
</section>

<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		<p>
			&copy; 2017 <b>DESA-KU</b> | <i>Kenali Desamu, Sejahtera Hidupmu</i>
		</p>
	</div>
</div>
</div>
</section>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
</body>
=======
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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>DESA-KU | Kenali Desamu, Sejahtera Hidupmu!</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style2.css" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="#page-top"><img src="" alt=""></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<nav><ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="index.php">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="services.php">Services</a>
			</li>
			<li>
			<a class="page-scroll" href="about.php">About</a>
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
		</ul></nav>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading">WHAT WE STAND FOR<br/> & OUR<b> CONTACT</b></h2>
			<hr>
			<br/><h3><p>
				 <b>"DESA-KU: Kenali Desamu, Sejahtera Hidupmu"</b> merupakan sebuah pelayanan desa terpadu berbasis Online yang memberikan kemudahan akses dan kenyamanan untuk masyarakat. Kini, masyarakat mampu mengakses informasi secara realtime dan lebih update tentunya. Ayo, kenali desamu sekarang!
			</p></h3>
	</div>
</div>
</div>
</section>
<!-- Section after about --->
<section class="no-padding">
<div class="equal-heights w-middle">
<div class="col-md-4 bg-primary">
	<div class="box text-right">
		<h2>THE <b>SPEECH</b></h2>
		<h1>"Visi tanpa <b>eksekusi</b> adalah <b>halusinasi</b>."</h1><br/>
		<p>
			<b>Best Regards,</b>
			<br/> Ir. Kim So-Hyun
		</p>
	</div>
</div>
<div class="col-md-4">
	<img src="img/kades.jpg" alt="">
</div>
<div class="col-md-4 bg-dark">
	<div class="box">
		<h2>THE <b>SPEECH</b></h2>
		<p>
			 Selamat datang!<br/>
			 Dengan hadirnya <b>DESA-KU</b>: Kenali Desamu, Sejahtera Hidupmu, diharapkan mampu meningkatkan kualitas dan produktivitas masyarakat serta memudahkan memecahkan permasalahan Anda sebagai solusi terbaik untuk Anda.
			 <br/><br/>Terima kasih telah mengunjungi kami!
		</p>
	</div>
</div>
</div>
<section class="no-padding">
<div class="equal-heights w-middle text-center">
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2>BEST <b>Services</b></h2>
		<p>
			DESA-KU, Kenali Desamu, Sejahtera Hidupmu, memberikan pelayanan intensif dan ramah, serta memberikan fasilitas kemudahan dan kenyamanan untuk Anda. Jadikanlah pelayanan kami sebagai aktifitas yang menyenangkan.
		</p>
	</div>
</div>
<div class="col-md-4 bg-darkgray">
	<div class="box">
		<h2>Real <b>Solutions</b></h2>
		<p>
			 DESA-KU, Kenali Desamu, Sejahtera Hidupmu, adalah pusat aspirasi dan pelayanan masyarakat yang dapat menjawab kebutuhan kehidupan Anda. Kami memberikan kemudahan untuk Anda dalam pembuatan surat dan pelaporan tamu dengan menu navigasi "Services". Solusi cepat dan terpercaya. 
		</p>
	</div>
</div>
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2>Enjoy <b>Life</b></h2>
		<p>
			Pastikan Anda selalu mengikuti perkembangan terbaru dari kami dengan berbagai informasi yang menarik dan jangan lupa untuk berlangganan "Villagers News" kami untuk mendapatkan info lengkap mengenai pengumuman terbaru dan berita menarik lainnya.
		</p>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Timeline
================================================== -->
<section id="tline">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>CONTACT</b></h2>
	</div>
</div>
</div>
<br/>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="tline-holder">
			<!-- tline ITEM-->
			<li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-phone">
				</div>
				<div class="tline-item-txt text-right">
					<div class="meta">
						
					</div>
					<h3>Call Us</h3>
					<p>
						085641834032 | Pelayanan cepat, ramah, tepat, dan tanpa basa-basi. Anda tidak perlu khawatir, segera hubungi kami!
					</p>
				</div>
			</div>
			</li><br/>
			<!-- /tline--><br/>
			<br/>
			<!-- tline-->
			<li class="tline-item-right wow fadeInRight">
			<div class="tline-item-content">
				<div class="date-icon fa fa-envelope">
				</div>
				<div class="tline-item-txt text-left">
					<div class="meta">
						 
					</div>
					<h3>MAIL US</h3>
					<p>
						kampungku@gmail.com | Berbagai keluhan dapat Anda sampaikan sekarang. "DESA-KU" solusi terbaik masalah Anda!
					</p>
				</div>
			</div>
			</li>
			<!-- /tline-->
			<!-- tline-->
			<li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-globe">
				</div>
				<div class="tline-item-txt text-right">
					<div class="meta">
						 
					</div>
					<h3>ADDRESS</h3>
					<p>
						Jln. Babakan Lio RT 004/011 No. 19 Kelurahan: Balumbang Jaya, Kecamatan: Bogor Barat, Bogor Barat, Bogor 16116
					</p>
				</div>
			</div>
			</li>
			<!-- /tline-->
			<!-- /tline-->
			<li class="tline-start">
			<div class="tline-start-content">
				<div class="tline-start-icon">
				</div>
				<a href="services.php" class="btn btn-primary bgn-xl wow zoomIn">START</a>
			</div>
			</li>
		</ul>
	</div>
</div>
</div>
</section>

<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		<p>
			&copy; 2017 <b>DESA-KU</b> | <i>Kenali Desamu, Sejahtera Hidupmu</i>
		</p>
	</div>
</div>
</div>
</section>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
</body>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
</html>