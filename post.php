<<<<<<< HEAD
<!DOCTYPE html>

<?php
	include 'modul/connect.php';

	if($_SESSION['status'] == "user"){
	    $id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
	}
	if(isset($_GET['id_post'])){
		$qry = mysqli_query($conn, "SELECT * FROM announcements WHERE id_announcement = '".$_GET['id_post']."'");
		$konten = mysqli_fetch_array($qry);
	}
	else{
		header("location: index.php");
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

<section id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading"><b><?php echo $konten['announcement_title']; ?></b></h2>
			<hr class="primary">
			<center><img src="<?php echo $konten['pic_announcement']; ?>" style="width:100%" alt="" /></center>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-6 text-center">
			<div class="service-box">
				<div class="iconbox bg-dark">
					<i class="fa fa-2x fa-user wow bounceIn text-fade"></i>
				</div>
			<h3><?php echo $konten['author']?></h3>
			<p class="text-muted">
			</p>
			</div>
		</div>
		<div class="col-lg-6 text-center">
			<div class="service-box">
				<div class="iconbox bg-primary">
					<i class="fa fa-2x fa-calendar wow bounceIn text-fade"></i>
				</div>
			<h3><?php echo date_format(date_create($konten['timestamp']),"d F Y"); ?></h3>
			<p class="text-muted">
			</p>
			</div>
		</div>
		<div class="col-md-9 col-lg-offset-1">
			<div class="funfacts text-center">
				<p>
				<?php echo $konten['content']; ?>
				</p>
			</div>
		</div>
	</div>
</div>
</section>
<div class="clearfix">
</div>

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
</html>
=======
<!DOCTYPE html>

<?php
	include 'modul/connect.php';

	if($_SESSION['status'] == "user"){
	    $id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
	}
	if(isset($_GET['id_post'])){
		$qry = mysqli_query($conn, "SELECT * FROM announcements WHERE id_announcement = '".$_GET['id_post']."'");
		$konten = mysqli_fetch_array($qry);
	}
	else{
		header("location: index.php");
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

<section id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading"><b><?php echo $konten['announcement_title']; ?></b></h2>
			<hr class="primary">
			<center><img src="<?php echo $konten['pic_announcement']; ?>" style="width:100%" alt="" /></center>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-6 text-center">
			<div class="service-box">
				<div class="iconbox bg-dark">
					<i class="fa fa-2x fa-user wow bounceIn text-fade"></i>
				</div>
			<h3><?php echo $konten['author']?></h3>
			<p class="text-muted">
			</p>
			</div>
		</div>
		<div class="col-lg-6 text-center">
			<div class="service-box">
				<div class="iconbox bg-primary">
					<i class="fa fa-2x fa-calendar wow bounceIn text-fade"></i>
				</div>
			<h3><?php echo date_format(date_create($konten['timestamp']),"d F Y"); ?></h3>
			<p class="text-muted">
			</p>
			</div>
		</div>
		<div class="col-md-9 col-lg-offset-1">
			<div class="funfacts text-center">
				<p>
				<?php echo $konten['content']; ?>
				</p>
			</div>
		</div>
	</div>
</div>
</section>
<div class="clearfix">
</div>

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
</html>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
