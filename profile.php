<!DOCTYPE html>

<?php
	include 'modul/connect.php';
	
	if($_SESSION['status'] == "nouser"){
		header('Location:login.php');
	}
	else{
	    $id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
		$author = $result['name_villager'];
		$query2 = mysqli_query($conn, "SELECT * FROM letters WHERE author = '$author'");
		$query3 = mysqli_query($conn, "SELECT * FROM letters WHERE author = '$author'");
		$query4 = mysqli_query($conn, "SELECT * FROM visitors WHERE author = '$author'");
		$query5 = mysqli_query($conn, "SELECT * FROM visitors WHERE author = '$author'");
?>

<html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css" type="text/css" media="all"/>
<style> html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif} </style>
<body class="w3-theme-l5">
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style2.css" type="text/css">
<!-- Navbar -->
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

<section>
<div class="container">
	<div class="col-md-12 text-center">
		<h2 class="section-heading"><?php echo $result['name_villager']?>'s <b>Profile</b></h2>
	</div>	
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="javascript:void(0)" onclick="openCity(event, 'General');">
						<div class="col-md-3 w3-third tablink w3-bottombar w3-hover-light-grey w3-padding active  w3-border-red"><h3><b>Profile Info</b></h3></div>
					</a>
					<a href="javascript:void(0)" onclick="openCity(event, 'Photo');">
						<div class="col-md-3 w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><h3><b>Profil Picture</b></h3></div>
					</a>
					<a href="javascript:void(0)" onclick="openCity(event, 'Letters');">
						<div class="col-md-3 w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><h3><b>My Letters</b></h3></div>
					</a>
					<a href="javascript:void(0)" onclick="openCity(event, 'Tamu');">
						<div class="col-md-3 w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><h3><b>My Visitors</b></h3></div>
					</a>
				</div>
			</div>
			<div id="General" class="w3-container city" style="display: block;">
				<div id="general" class="w3-row">
					<div class="w3-half w3-container">
						<br><br><img src="<?php echo $result['photo_villager']?>" class="circle profilimg" alt="<?php echo $result['name_villager']?>" width="80%">
					</div>
					<div class="w3-half w3-container xlarge">
						<br><table>
							<thead>
								<form action="modul/updategeneral.php"></form>
									<tr>
										<th data-field="id">Profile Info</th>
										<th data-field="separator"></th>
										<th data-field="name"></th>
									</tr>
								
							</thead>
							<h2><tbody>
								<tr>
									<td>Name</td>
									<td>:</td>
									<td>  <?php echo $result['name_villager']?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>  <?php echo $result['email_villager']?></td>
								</tr>
								<tr>
									<td>Birth</td>
									<td>:</td>
									<td>  <?php echo $result['birth_date_villager']?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>  <?php echo $result['email_villager']?></td>
								</tr>
								<tr>
									<td>Phone</td>
									<td>:</td>
									<td>  <?php echo $result['phone_villager']?></td>
								</tr>
								<tr>
									<td>Nomor Kartu Penduduk</td>
									<td>:</td>
									<td>  <?php echo $result['no_ktp_villager']?></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>:</td>
									<td>  <?php echo $result['sex_villager']?></td>
								</tr>
								<tr>
									<td>Agama</td>
									<td>:</td>
									<td>  <?php echo $result['religion_villager']?></td>
								</tr>
								<tr>
									<td>Address</td>
									<td>:</td>
									<td>  <?php echo $result['address_villager']?></td>
								</tr>
								
								<tr>
									<td></td>
									<td></td>
									<td><button onclick="document.getElementById('genmodal').style.display='block'" class="submit btn btn-primary btn-xl">Change</button></td>
								</tr>								
							</tbody></h2>
						</table>
					</div>
				</div>
			</div>
 
			<div id="Photo" class="w3-container city" style="display: none;">
				<div id="photo" class="w3-row">
					<div class="w3-col w3-center">
						<br>
						<img src="<?php echo $result['photo_villager']?>" class="profilimg" width="50%" height="50%" alt="<?php echo $result['name_villager']?>">
					</div>
					<form action="modul/updatephoto.php" name="uploader" method="post" enctype="multipart/form-data">
						<div class="w3-row">
							<div class="w3-col w3-center">
								<br><label><b>Change Profile Picture</b></label>
								<p> Upload your new photo, max 1 MB </p>
								<input class="w3-input w3-border" type="file" placeholder="Upload your new photo, max 1 MB" name="photobaru" required>
							</div>
							<div class="w3-row w3-center">
								<br><button class="w3-button w3-round-xlarge w3-black" type="submit" name="action">Submit</button>
							</div><br>
						</div>
					</form>
				</div>
			</div>

			<div id="Letters" class="w3-container city" style="display: none;">
				<div id="letters" class="w3-row tabelpro">
					<?php if($result2 = mysqli_fetch_array($query2)){ 
					?>
					<table class="w3-table-all w3-centered">
						<br/><thead><tr>
							<th>#</th>
							<th>Kategori Surat</th>
							<th>Status</th>
							<th>Keterangan</th>
						</tr></thead>
						<tbody>
						<?php
						$count = 1;
						while($result3 = mysqli_fetch_array($query3)){
							if ($result3['status_letter'] == 'no'){
								echo '<tr><td>'.$count++.'</td><td>'.$result3['category_letter'].'</td><td><i class="fa fa-times"></i></td><td>Surat ini tidak disetujui oleh Admin</td></tr>';
							} else if ($result3['status_letter'] == 'yes'){
								echo '<tr><td>'.$count++.'</td><td>'.$result3['category_letter'].'</td><td><i class="fa fa-check"></i></td><td>Surat ini telah disetujui oleh Admin</td></tr>';
							} else {
								echo '<tr><td>'.$count++.'</td><td>'.$result3['category_letter'].'</td><td><i class="fa fa-minus"></i></td><td>Surat ini belum dilihat oleh Admin</td></tr>';
							}
						}
						echo '</tbody></table>';
						}
						else {
						?>
						<br/><p class="w3-center">Anda belum mengirimkan surat.</p>
						<p class="w3-center"><button class="submit btn btn-dark btn-xl" type="submit" name="action"><a href="buatsurat.php">Buat Surat Sekarang</a></button></p>
						<?php 
							} 
						?>
				</div>
			</div>
			
			<div id="Tamu" class="w3-container city" style="display: none;">
				<div id="tamu" class="w3-row tabelpro">
					<?php if($result4 = mysqli_fetch_array($query4)){ 
					?>
					<table class="w3-table-all w3-centered">
						<br/><thead><tr>
							<th>#</th>
							<th>Nama Tamu</th>
							<th>Kartu Tanda Penduduk</th>
							<th>Alamat</th>
							<th>Status</th>
							<th>Keterangan</th>
						</tr></thead>
						<tbody>
						<?php
						$count = 1;
						while($result5 = mysqli_fetch_array($query5)){
							if ($result5['status_visitor'] == 'no'){
								echo '<tr><td>'.$count++.'</td><td>'.$result5['name_visitor'].'</td><td>'.$result5['no_ktp_visitor'].'</td><td>'.$result5['address_visitor'].'</td><td><i class="fa fa-times"></i></td><td>Tamu ini tidak disetujui oleh Admin</td></tr>';
							} else if ($result5['status_visitor'] == 'yes'){
								echo '<tr><td>'.$count++.'</td><td>'.$result5['name_visitor'].'</td><td>'.$result5['no_ktp_visitor'].'</td><td>'.$result5['address_visitor'].'</td><td><i class="fa fa-check"></i></td><td>Tamu ini telah disetujui oleh Admin</td></tr>';
							} else {
								echo '<tr><td>'.$count++.'</td><td>'.$result5['name_visitor'].'</td><td>'.$result5['no_ktp_visitor'].'</td><td>'.$result5['address_visitor'].'</td><td><i class="fa fa-minus"></i></td><td>Tamu ini belum dilihat oleh Admin</td></tr>';
							}
						}
						echo '</tbody></table>';
						}
						else {
						?>
						<br/><p class="w3-center">Anda belum melaporkan tamu.</p>
						<p class="w3-center"><button class="submit btn btn-dark btn-xl" type="submit" name="action"><a href="laportamu.php">Ayo, Laporkan Tamu Sekarang!</a></button></p>
						<?php 
							} 
						?>
				</div>
			</div>

	<!-- genmodal begin structure -->
	<div id="genmodal" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
			<div class="w3-center"><br>
				<span onclick="document.getElementById('genmodal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
					<h4 class="w3-center">Edit Personal Info</h4><br>
			</div>
			<form class="w3-container" name="genupdater" action="modul/updategeneral.php" method="POST" enctype="multipart/form-data">
				<div class="w3-row">
					<label><b>Name</b></label>
						<input value="<?php echo $result['name_villager']?>" class="active w3-input w3-border w3-margin-bottom" type="text" placeholder="Name" name="namabaru" id="namabaru" required="">
					<label><b>Birth</b></label>
						<input value="<?php echo $result['birth_date_villager']?>" class="active w3-input w3-border w3-margin-bottom" type="date" placeholder="Birth" name="datebaru" id="datebaru" required="">
					<label><b>Phone</b></label>
						<input value="<?php echo $result['phone_villager']?>" class="active w3-input w3-border w3-margin-bottom" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' MAXLENGTH="12" placeholder="Phone" name="telpbaru" id="telpbaru" required="">
					<label><b>Nomor Kartu Penduduk</b></label>
						<input value="<?php echo $result['no_ktp_villager']?>" class="active w3-input w3-border w3-margin-bottom" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Nomor Kartu Penduduk" name="ktpbaru" id="ktpbaru" required="">
					<label><b>Jenis Kelamin</b></label>
						<select value="<?php echo $result['sex_villager']?>" class="active w3-input w3-border w3-margin-bottom class="col-md-8"" type="text" placeholder="Jenis Kelamin" name="sexbaru" id="sexbaru" required="">
							<option value="" disabled selected>Pilih Jenis Kelamin</option>
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					<label><b>Agama</b></label>
						<select value="<?php echo $result['religion_villager']?>" class="active w3-input w3-border w3-margin-bottom class="col-md-8"" type="text" placeholder="Agama" name="agamabaru" id="agamabaru" required="">
							<option value="" disabled selected>Pilih Agama</option>
							<option value="Islam">Islam</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Kristen">Kristen</option>
							<option value="Nasrani">Nasrani</option>
						</select>
					<label><b>Address</b></label>
						<input value="<?php echo $result['address_villager']?>" class="active w3-input w3-border w3-margin-bottom" type="text" placeholder="Address" name="alamatbaru" id="textareamu" required="">
					
					<script>
						function myFunction(id) {
						var x = document.getElementById(id);
						if (x.className.indexOf("w3-show") == -1) {
							x.className += " w3-show";
						} else { 
							x.className = x.className.replace(" w3-show", "");
							}
						}
						</script>
						<button class="w3-button w3-block w3-grey w3-section w3-padding" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
	</div></section>
	<!-- /genmodal end structure -->

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>
<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12">
		<center><p>
			&copy; 2017 <b>DESA-KU</b> | <i>Kenali Desamu, Sejahtera Hidupmu</i>
		</p></center>
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