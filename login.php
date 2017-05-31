<!DOCTYPE html>
<?php
	include 'modul/connect.php';
	
	if($_SESSION['status'] == "user"){
		if($_SESSION['id'] == "1"){
			header('Location:dashboard.php');
		}
		else{
			header('Location:profile.php');
		}
	}
?>

<!-- Head -->
<head>

<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/w3-theme-cyan.css" type="text/css" media="all" />
<link rel='stylesheet' href="css/Open-Sans.css">
<link rel="stylesheet" href="css/font-awesome-min.css">
<link rel="stylesheet" type="text/css" href="css/coba.css">
<style> html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif} </style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home"></i></a>
 </div>
</div>
</head>

<!-- Body -->
<body>

<!-- Form Login -->
<!-- Page Container -->
<div class="w3-container w3-round w3-content" style="width:40%;margin-top:210px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col w3-center">
      <div class="w3-card-2 w3-round">
        <div class="w3-container">
         
         <form class="w3-container" name="cekdatabase" action="modul/loginproses.php" method="POST" enctype="multipart/form-data">
			<h1> Hi! </h1>
			<div class="w3-section">
				<input class="w3-input w3-round w3-border w3-margin-bottom" type="email" placeholder="Email *" name="emailogin" id="emailogin" required>
				<input class="w3-input w3-round w3-border" type="password" placeholder="Password *" name="passlogin" id="passlogin" min="8" required>
				<button class="w3-button w3-block w3-light-blue w3-round-large w3-section w3-padding" type="submit">Login</button>
			</div>
		</form>
	  <div class="w3-container w3-border-top w3-padding-16">
		<button onclick="document.getElementById('regis').style.display='block'" class="w3-button w3-light-blue w3-round-large">Register</button>
		<button onclick="document.getElementById('verif').style.display='block'" class="w3-button w3-light-blue w3-round-large">Forgot password?</button>
      </div>

        </div>
      </div>

<!-- verif begin structure -->
  <div id="verif" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('verif').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" name="verifer" action="modul/verifproses.php" method="POST" enctype="multipart/form-data">
        <div class="w3-section">
          <label><b>Input your email address</b></label>
          <input class="w3-input w3-round w3-border w3-margin-bottom" type="email" placeholder="Password wil be delivered to this address" name="emailuser" id="emailuser" required>
          <button class="w3-button w3-block w3-round w3-green w3-section w3-padding" type="submit">Send</button>
        </div>
      </form>

      
 </div>
    </div>
  </div>

<!-- /verif end structure -->
	
<!-- regis begin structure -->
<div id="regis" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('regis').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="images/male.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container " name="uploader" action="modul/daftarproses.php" method="POST" enctype="multipart/form-data">
        <div class="w3-section">
          <label><b>Name</b></label>
			<input class="w3-input w3-round w3-border w3-margin-bottom" type="text" placeholder="Name" name="namauser" id="namauser" required><br/>
          <label><b>Email</b></label>
			<input class="w3-input w3-round w3-border" type="email" placeholder="Email" name="emailuser" id="emailuser" required><br/>
		  <label><b>Password</b></label>
			<input class="w3-input w3-round w3-border" type="password" placeholder="Password at least contains 8 characters" name="passuser" id="passuser" min="8" required><br/>
		  <label><b>Birth</b></label>
			<input class="w3-input w3-round w3-border" type="date" placeholder="Birth" name="dateuser" id="dateuser" class="datepicker" required><br/>
		  <label><b>Phone</b></label>
			<input class="w3-input w3-round w3-border" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' MAXLENGTH="12" placeholder="Phone" name="telpuser" id="telpuser" required><br/>
		  <label><b>Address</b></label>
			<input class="w3-input w3-round w3-border" type="text" placeholder="Address" name="alamatuser" id="textareaku" required><br/>
		  <label><b>Photo</b></label>
			<p>Upload your photo, max 1 MB</p>
		    <input class="w3-input w3-round w3-border" class="file-path validate" type="file" placeholder="Upload your photo, max 1 MB" name="photomember" required>
		  <button onclick="myFunction('Agreement')" class="w3-button w3-block w3-left"><h3>Agreement</h3></button>
			<div id="Agreement" class="w3-container w3-hide">
				<p>
					Kami tidak bertanggungjawab atas keaslian data Anda.
					Kami hanya memberikan fasilitas untuk saling berbagi.
					Segala bentuk penipuan harap dipertanggungjawabkan oleh orang yang bersangkutan.
				</p>
			</div>
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

		  <input type="checkbox" id="test" required/>
		  <label class="item" for="test">Agree</label>
          <button class="w3-button w3-block w3-round w3-light-blue w3-section w3-padding" type="submit">Register</button>
        </div>
      </form>
	  </div>
  </div>
</div>
	<!-- /regis end structure -->

</div>
</body>
<?php
	require 'footer.php';
?>
