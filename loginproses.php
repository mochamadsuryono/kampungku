<?php
	include 'connect.php';
	
	$email = $_POST['emailogin'];
	$password = $_POST['passlogin'];
	
	$result = mysqli_query($conn, "SELECT * FROM villagers WHERE email_villagers='$email' and password_villager='$password'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row) {
		$_SESSION['id'] = $row['id_villagers'];
		$_SESSION['status'] = "user";
		if($_SESSION['id'] == '1'){
?>
			<script language="javascript">alert("Hello, Villagers!");</script>
			<script> document.location.href='../dashboard.php';</script>
<?php
		}
		else {
?>
			<script language="javascript">alert("Logging Succesful");</script>
			<script> document.location.href='../profile.php';</script>
<?php		
		}
	}	
	else { 
?>
		<script language="javascript">alert("Logging Failed");</script>
		<script>document.location.href='../login.php';</script>
<?php 
	}		
	mysqli_close($conn);
?>