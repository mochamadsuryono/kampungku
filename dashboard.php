<<<<<<< HEAD
<?php
	include 'modul/connect.php';
	require 'header.php';
	
	if($_SESSION['id'] != "1"){
?>
		<script language="javascript">alert("Kamu tidak memiliki kewenangan membuka halaman ini");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
		$query2 = mysqli_query($conn, "SELECT * FROM letters WHERE status_letter = 'yet'");
		$result2 = mysqli_fetch_array($query2);
		$query3 = mysqli_query($conn, "SELECT * FROM visitors WHERE status_visitor = 'yet'");
		$result3 = mysqli_fetch_array($query2);
?>

<!DOCTYPE html>
<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Dashboard</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; 
<a href="index.php" class="btn btn-danger square-btn-adjust">Home</a>
<a href="modul/logoutproses.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
		
 <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<br><li class="text-center">
                    <img src="<?php echo $result['photo_villager']?>" class="w3-circle" style="height:200px;width:200px" alt="Avatar" class="user-image img-responsive"/>
					</li>
					<br>
                    <li>
                        <a class="active-menu"  href="dashboard.php"> Dashboard</a>
                    </li>
                     <li>
                        <a href="#"> Announcements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="adminpost.php">Create a new announcements</a>
                            </li>
                            <li>
                                <a href="listpost.php">Lists of Announcements</a>
                            </li>
						</ul>
                    </li>           
                    <li>
                        <a href="#"> Data DESA-KU<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="listmember.php">Lists of Villagers</a>
                            </li>
                            <li>
                                <a href="moderatetamu.php">Lists of Requests Tamu</a>
                            </li>
							<li>
                                <a href="moderatesurat.php">Lists of Requests Surat</a>
                            </li>
                        </ul>
                      </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><b>DASHBOARD<b></h2>   
                        <h5>Welcome <?php echo $result['name_villager']?>. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box" title="Total Villagers">
                <span class="icon-box set-icon">
				<a href="listmember.php">
                    <i class="fa fa-users"></i></a>
                </span>
                <div class="text-box" >
                    <p class="main-text">
					<?php 
						$query4 = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers != '1'"); 
						$hitung = mysqli_num_rows($query4);
						echo $hitung;
					?> Total
					</p>
                    <p class="text-muted">Villagers</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box" title="Total Request Tamu">
                <span class="icon-box set-icon">
                     <a href="moderatetamu.php">
					 <i class="fa fa-bars"></i></a>
                </span>
                <div class="text-box" >
                    <p class="main-text">
					<?php 
						$query5 = mysqli_query($conn, "SELECT * FROM visitors WHERE status_visitor = 'yet'"); 
						$hitung2 = mysqli_num_rows($query5);
						echo $hitung2;
					?> Total
					</p>
                    <p class="text-muted">Request Tamu</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box" title="Total Request Surat">
                <span class="icon-box set-icon">
                    <a href="moderatesurat.php">
					<i class="fa fa-envelope-o"></i></a>
                </span>
                <div class="text-box" >
                    <p class="main-text">
					<?php 
						$query6 = mysqli_query($conn, "SELECT * FROM letters WHERE status_letter = 'yet'"); 
						$hitung3 = mysqli_num_rows($query6);
						echo $hitung3;
					?> Total
					</p>
                    <p class="text-muted">Request Surat</p>
                </div>
             </div>
		     </div>
<!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

<?php
	}
=======
<?php
	include 'modul/connect.php';
	require 'header.php';
	
	if($_SESSION['id'] != "1"){
?>
		<script language="javascript">alert("Kamu tidak memiliki kewenangan membuka halaman ini");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$result = mysqli_fetch_array($query);
		$query2 = mysqli_query($conn, "SELECT * FROM letters WHERE status_letter = 'yet'");
		$result2 = mysqli_fetch_array($query2);
		$query3 = mysqli_query($conn, "SELECT * FROM visitors WHERE status_visitor = 'yet'");
		$result3 = mysqli_fetch_array($query2);
?>

<!DOCTYPE html>
<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Dashboard</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; 
<a href="index.php" class="btn btn-danger square-btn-adjust">Home</a>
<a href="modul/logoutproses.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
		
 <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<br><li class="text-center">
                    <img src="<?php echo $result['photo_villager']?>" class="w3-circle" style="height:200px;width:200px" alt="Avatar" class="user-image img-responsive"/>
					</li>
					<br>
                    <li>
                        <a class="active-menu"  href="dashboard.php"> Dashboard</a>
                    </li>
                     <li>
                        <a href="#"> Announcements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="adminpost.php">Create a new announcements</a>
                            </li>
                            <li>
                                <a href="listpost.php">Lists of Announcements</a>
                            </li>
						</ul>
                    </li>           
                    <li>
                        <a href="#"> Data DESA-KU<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="listmember.php">Lists of Villagers</a>
                            </li>
                            <li>
                                <a href="moderatetamu.php">Lists of Requests Tamu</a>
                            </li>
							<li>
                                <a href="moderatesurat.php">Lists of Requests Surat</a>
                            </li>
                        </ul>
                      </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><b>DASHBOARD<b></h2>   
                        <h5>Welcome <?php echo $result['name_villager']?>. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box" title="Total Villagers">
                <span class="icon-box set-icon">
				<a href="listmember.php">
                    <i class="fa fa-users"></i></a>
                </span>
                <div class="text-box" >
                    <p class="main-text">
					<?php 
						$query4 = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers != '1'"); 
						$hitung = mysqli_num_rows($query4);
						echo $hitung;
					?> Total
					</p>
                    <p class="text-muted">Villagers</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box" title="Total Request Tamu">
                <span class="icon-box set-icon">
                     <a href="moderatetamu.php">
					 <i class="fa fa-bars"></i></a>
                </span>
                <div class="text-box" >
                    <p class="main-text">
					<?php 
						$query5 = mysqli_query($conn, "SELECT * FROM visitors WHERE status_visitor = 'yet'"); 
						$hitung2 = mysqli_num_rows($query5);
						echo $hitung2;
					?> Total
					</p>
                    <p class="text-muted">Request Tamu</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box" title="Total Request Surat">
                <span class="icon-box set-icon">
                    <a href="moderatesurat.php">
					<i class="fa fa-envelope-o"></i></a>
                </span>
                <div class="text-box" >
                    <p class="main-text">
					<?php 
						$query6 = mysqli_query($conn, "SELECT * FROM letters WHERE status_letter = 'yet'"); 
						$hitung3 = mysqli_num_rows($query6);
						echo $hitung3;
					?> Total
					</p>
                    <p class="text-muted">Request Surat</p>
                </div>
             </div>
		     </div>
<!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

<?php
	}
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
?>