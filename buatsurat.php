<!DOCTYPE html>
<?php
	include 'modul/connect.php';
	require 'header.php';
  
	if($_SESSION['status'] == "nouser"){
		header('Location:login.php');
	}
	if($_SESSION['status'] == "user"){
	    $id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
	}
?>

<html>
<title>Create a New Letter</title>
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
			selector: '#isiartikel',
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
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading">LETTERS <b>FOR LIFE</b></h2>
		<hr class="primary">
		<p>Ayo, kirimkan surat Anda! "Letters for Life" hadir untuk memenuhi kebutuhan surat Anda. Tunggu balasan SMS dari kami dan Anda dapat mengambil surat Anda ke kantor kami. Terima kasih telah menggunakan layanan kami!
		</p>
	</div>
</div>
</div>
</section>

<section class="no-padding">
<div class="col-md-4 bg-primary no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="<?php echo $result['photo_villager']?>" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 <h2>Ayo, kirimkan suratmu sekarang!</h2>
			</p>
		</div>
	</div>
</div>
<h2><?php echo $result['name_villager']?></h2>
<p> DESA-KU | Kenali Desamu, Sejahtera Hidupmu </p>
</div>
</section>

<section >
<div class="container">
		<div class="service-box">
			<div class="regularform">
				<form class="container" name="poster" action="modul/uploadsurat.php" method="POST" enctype="multipart/form-data">
						<div class="w3-section"><br/>
						<h3 ">Kategori <b>Surat</b></h3>
						<select class="col-md-8" name="kategori" required>
							<option value="" disabled selected>Kategori Surat</option>
							<option value="SURAT PENGANTAR PEMBUATAN KTP">SURAT PENGANTAR PEMBUATAN KTP</option>
							<option value="SURAT PENGANTAR AKTE KELAHIRAN">SURAT PENGANTAR AKTE KELAHIRAN</option>
							<option value="SURAT KETERANGAN DOMISILI">SURAT KETERANGAN DOMISILI</option>
							<option value="SURAT KETERANGAN TIDAK MAMPU (SKTM)">SURAT KETERANGAN TIDAK MAMPU (SKTM)</option>
							<option value="SURAT KETERANGAN TANAH">SURAT KETERANGAN TANAH</option>
							<option value="LAIN-LAIN">LAIN-LAIN</option>
						</select>
						<br/>
						<h3 ">Tanggal <b>Kebutuhan</b></h3>
						<input class="col-md-8" type="date" placeholder="Tanggal Kebutuhan" name="duedate" id="duedate" required>
						<br/>
						<br/>
							<textarea id="isiartikel" class="col-md-8" name="isipost" placeholder="Isi Surat *"></textarea><br/>
						<br/>
						</div>
						<button class="btn btn btn-primary btn-xl col-md-8" type="submit">KIRIM</button></div>
				</form>
			
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