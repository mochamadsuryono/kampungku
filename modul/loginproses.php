<?php
	include 'connect.php';
	
	$email = $_POST['emailogin'];
	$password = $_POST['passlogin'];
	$encrypt = md5($password);
	
	$result = mysqli_query($conn, "SELECT * FROM villagers WHERE BINARY email_villager='$email' and BINARY password_villager='$encrypt'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row) {
		$_SESSION['id'] = $row['id_villagers'];
		$_SESSION['status'] = "user";
		if($_SESSION['id'] == '1'){
?>
			<script language="javascript">alert("Hello, Admin! Let's take a journey!");</script>
			<script> document.location.href='../dashboard.php';</script>
<?php
		}
		else {
?>
			<script language="javascript">alert("Logging succesful.");</script>
			<script> document.location.href='../profile.php';</script>
<?php		
		}
	}	
	else { 
?>
		<script language="javascript">alert("Logging failed.");</script>
		<script>document.location.href='../login.php';</script>
<?php 
	}		
	mysqli_close($conn);
?>