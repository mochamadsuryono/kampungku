<?php
	include 'modul/connect.php';
	require 'header.php';
	
	if($_SESSION['id'] != "1"){
?>
		<script language="javascript">alert("You don't have permission to this page");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
		$query2 = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers != '$id'");
		$query3 = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers != '$id'");
		$result = mysqli_fetch_array($query);
?>
		<!DOCTYPE html>
<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lists of Villagers </title>
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
                        <a  href="dashboard.php"> Dashboard</a>
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
                        <a class="active-menu" href="#"> Data DESA-KU<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href="listmember.php">Lists of Villagers</a>
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
			 
 <div class="row" >
                    <div class="col-md-12 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <center><b>Daftar Villagers</b></center>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<?php 
								if($result2 = mysqli_fetch_array($query2)){ 
							?>
                                <table class="table table-striped table-bordered table-hover w3-centered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
											<th>Name</th>
											<th>Email</th>
											<th class="hide-on-med-and-down">Date of Birth</th>
											<th class="hide-on-med-and-down">Phone</th>
											<th class="hide-on-med-and-down">Address</th>
											<th class="hide-on-med-and-down">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
											<?php
												$count = 1;
												while($result3 = mysqli_fetch_array($query3)){
													echo '<tr>
															<td>'.$count++.'</td>
															<td>'.$result3['name_villager'].'</td>
															<td>'.$result3['email_villager'].'</td>
															<td class="hide-on-med-and-down">'.$result3['birth_date_villager'].'</td>
															<td class="hide-on-med-and-down">'.$result3['phone_villager'].'</td>
															<td class="hide-on-med-and-down">'.$result3['address_villager'].'</td>
															<td><a href="modul/deletemember.php?id_villagers='.$result3['id_villagers'].'"><button class="btn waves-effect waves-teal goread">Delete</button></a></td>
													</tr>';
												}
												echo '</tbody></table>';
											}
											else {
										?>
											<p class="w3-center">Tidak ada Villagers</p>
										<?php 
											} 
										?>
                            </div>
                        </div>
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
?>