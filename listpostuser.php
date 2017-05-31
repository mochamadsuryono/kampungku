<<<<<<< HEAD
<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	include 'modul/connect.php';

	if($_SESSION['status'] != "user"){
?>
		<script language="javascript">alert("You don't have permission to this page");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$query2 = mysqli_query($conn, "SELECT * FROM announcements WHERE status_announcement = 'yes'");
		$query3 = mysqli_query($conn, "SELECT * FROM announcements WHERE status_announcement = 'yes'");
		$result = mysqli_fetch_array($query);

?>


<html>
	<head>
		<title>VILLAGERS NEWS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="asset/css/main.css" />
		<noscript><link rel="stylesheet" href="asset/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color4-alt span-3-75">
									<h1 class="major">VILLAGERS <br/>
										<strong>NEWS</strong></h1>
									<p>Pastikan Anda selalu mengikuti perkembangan terbaru dari kami dengan berbagai informasi yang menarik. Uptodate dan terpercaya!</p>
									<ul class="actions">
										<li><a href="index.php" class="button special color1 circle icon fa-home">Home</a></li>
										<li><a href="profile.php" class="button special color1 circle icon fa-user">Profile</a></li>
										<li><a href="#news" class="button special color1 circle icon fa-newspaper-o">News</a></li>
										<li><a href="#gallery" class="button special color1 circle icon fa-camera-retro">Gallery</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/img1.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1" id="news">
								<div class="intro joined">
									<h2><strong>Recent</strong> Posts </h2>
									<?php
										if($result2 = mysqli_fetch_array($query2)){
									?>
									<?php
										while($result3 = mysqli_fetch_array($query3)){
											echo '<h3 class="major"><a href="post.php?id_post='.$result3['id_announcement'].'" target="_blank">'.$result3['announcement_title'].'</a></h3>';
											} echo '';
										}
										else {
									?>
									<h2 class="major">Tidak ada post.</h2>
									<?php
										}
									?>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel" id="gallery">
								<div class="intro color2">
									<h2 class="major">Our <strong>ACTIVITIES</strong></h2>
									<blockquote>"Memory is a way of holding on to the things you love, the things you are, the things you never want to lose."</blockquote> <br /> <p>MEMORIES CAPTURED</p>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="images/gallery/fulls/img1.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/img1.jpg" alt="" /></a>
										<a href="images/gallery/fulls/img2.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/img2.jpg" alt="" /></a>
										<a href="images/gallery/fulls/img3.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/img3.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/img6.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/img6.jpg" alt="" /></a>
									<div class="group span-4-5">
										<a href="images/gallery/fulls/img8.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/img8.jpg" alt="" /></a>
										<a href="images/gallery/fulls/iimg9.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/iimg9.jpg" alt="" /></a>
										<a href="images/gallery/fulls/img7.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/img7.jpg" alt="" /></a>
										<a href="images/gallery/fulls/img5.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/img5.jpg" alt="" /></a>
									</div>
								</div>
							</section>

						<!-- Copyright -->
							<div class="copyright"><b>&copy; 2017 DESA-KU | <i>Kenali Desamu, Sejahtera Hidupmu</i></b></div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="asset/js/jquery.min.js"></script>
			<script src="asset/js/skel.min.js"></script>
			<script src="asset/js/main.js"></script>

	</body>
</html>

<?php
	}
?>
=======
<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	include 'modul/connect.php';

	if($_SESSION['status'] != "user"){
?>
		<script language="javascript">alert("You don't have permission to this page");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$query2 = mysqli_query($conn, "SELECT * FROM announcements WHERE status_announcement = 'yes'");
		$query3 = mysqli_query($conn, "SELECT * FROM announcements WHERE status_announcement = 'yes'");
		$result = mysqli_fetch_array($query);

?>


<html>
	<head>
		<title>VILLAGERS NEWS</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="asset/css/main.css" />
		<noscript><link rel="stylesheet" href="asset/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color4-alt span-3-75">
									<h1 class="major">VILLAGERS <br/>
										<strong>NEWS</strong></h1>
									<p>Pastikan Anda selalu mengikuti perkembangan terbaru dari kami dengan berbagai informasi yang menarik. Uptodate dan terpercaya!</p>
									<ul class="actions">
										<li><a href="index.php" class="button special color1 circle icon fa-home">Home</a></li>
										<li><a href="profile.php" class="button special color1 circle icon fa-user">Profile</a></li>
										<li><a href="#news" class="button special color1 circle icon fa-newspaper-o">News</a></li>
										<li><a href="#gallery" class="button special color1 circle icon fa-camera-retro">Gallery</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/img1.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1" id="news">
								<div class="intro joined">
									<h2><strong>Recent</strong> Posts </h2>
									<?php
										if($result2 = mysqli_fetch_array($query2)){
									?>
									<?php
										while($result3 = mysqli_fetch_array($query3)){
											echo '<h3 class="major"><a href="post.php?id_post='.$result3['id_announcement'].'" target="_blank">'.$result3['announcement_title'].'</a></h3>';
											} echo '';
										}
										else {
									?>
									<h2 class="major">Tidak ada post.</h2>
									<?php
										}
									?>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel" id="gallery">
								<div class="intro color2">
									<h2 class="major">Our <strong>ACTIVITIES</strong></h2>
									<blockquote>"Memory is a way of holding on to the things you love, the things you are, the things you never want to lose."</blockquote> <br /> <p>MEMORIES CAPTURED</p>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="images/gallery/fulls/img1.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/img1.jpg" alt="" /></a>
										<a href="images/gallery/fulls/img2.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/img2.jpg" alt="" /></a>
										<a href="images/gallery/fulls/img3.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/img3.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/img6.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/img6.jpg" alt="" /></a>
									<div class="group span-4-5">
										<a href="images/gallery/fulls/img8.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/img8.jpg" alt="" /></a>
										<a href="images/gallery/fulls/iimg9.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/iimg9.jpg" alt="" /></a>
										<a href="images/gallery/fulls/img7.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/img7.jpg" alt="" /></a>
										<a href="images/gallery/fulls/img5.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/img5.jpg" alt="" /></a>
									</div>
								</div>
							</section>

						<!-- Copyright -->
							<div class="copyright"><b>&copy; 2017 DESA-KU | <i>Kenali Desamu, Sejahtera Hidupmu</i></b></div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="asset/js/jquery.min.js"></script>
			<script src="asset/js/skel.min.js"></script>
			<script src="asset/js/main.js"></script>

	</body>
</html>

<?php
	}
?>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
