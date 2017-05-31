<?php
<<<<<<< HEAD
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
	$email_villager = mysqli_real_escape_string($conn, $_POST['email_villager']);
	$sql = "SELECT * FROM villagers WHERE email_villager = '$email_villager'";
	$res = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$password_villager = $r['password_villager'];
		$to = $r['email_villager'];
		$subject = "Your Recovered Password";
 
		$message = "Please use this password to login " . $password_villager;
		$headers = "From : kampungku@gmail.com";
		if(mail($to, $subject, $message, $headers)){
			echo "Your Password has been sent to your email id";
		}else{
			echo "Failed to Recover your password, try again";
		}
 
	}else{
		echo "User name does not exist in database";
	}
}
=======
	include 'connect.php';
	//belum ada
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
?>