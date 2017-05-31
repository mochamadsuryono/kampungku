<?php
	include 'modul/connect.php';
	require 'header.php';
	
	if($_SESSION['id'] != "1"){
?>
		<script language="javascript">alert("Kamu tidak memiliki kewenangan membuka halaman ini.");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<title>Create a New Announcements</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
			selector: '#isipost',
			theme: 'modern',
			height: 250,
			plugins: [
				'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
				'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
				'save table contextmenu directionality emoticons template paste textcolor'
			],
			content_css: 'css/content.css',
			toolbar: 'insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | numlist outdent indent | link image | preview fullpage | forecolor backcolor'
		});
	</script>
	
<section id="contact">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading">VILLAGERS <b>NEWS</b></h2>
		<hr class="primary"></div></div>
		<p> <center>Tidak mau ketinggalan berita terkini? Tidak mau menjadi masyarakat yang kuno? "Villager's News" hadir dengan kabar dan berita yang terkini, terbaru, dan terpercaya. Anda tak perlu khawatir, karena semuanya dapat diakses dengan mudah dan realtime. Ayo, cari tahu berita disekitarmu!</center>
		</p>
		<div class="regularform ">
			<form class="w3-container" name="poster" action="modul/adminpost.php" method="POST" enctype="multipart/form-data">
				<div class="w3-section">
					<h4 class="section-heading">Judul <b>Pengumuman</b></h4>
					<input class="col-md-12" type="text" placeholder="Judul Pengumuman *" name="judulpost" id="judulpost" required><br/>
					<h4 class="section-heading">Isi <b>Artikel</b></h4>
					<textarea id="isipost" class="col-md-12" name="isipost" placeholder="Isi Artikel *"></textarea>
					<h4 class="section-heading">Cover <b>Picture</b></h4>
					<p> Upload your cover picture max 1 MB </p>
					<input class="col-md-12" class="file-path validate" type="file" placeholder="Upload your cover picture, max 1 MB" name="coverpic" required>
				</div>
				<button class="btn btn btn-primary btn-xl col-md-12" type="submit">TERBITKAN!</button>
			</form>
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

<?php
	}
?>