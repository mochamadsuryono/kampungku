<?php
	include "connect.php";

	$name = $_POST['namauser'];
	$email = $_POST['emailuser'];
	$pass = $_POST['passuser'];
	$encrypt = md5($pass);
	$dob = $_POST['dateuser'];
	$phone = $_POST['telpuser'];
	$address = $_POST['alamatuser'];
	$folder = "images/member";
	$upload_dir = "../images/member";
	$photo_size = $_FILES["photomember"]["size"];
	$photo_loc = $_FILES["photomember"]["tmp_name"];
	$photo_name = $_FILES["photomember"]["name"];
	
	if($photo_size < 1000000 && (strlen(trim($pass))>=8)){
		move_uploaded_file($photo_loc, "$upload_dir/$photo_name");
		$sql_tambah = "INSERT INTO villagers(id_villagers, name_villager, email_villager, password_villager, birth_date_villager, phone_villager, address_villager, photo_villager) 
					  VALUE('','$name','$email','$encrypt','$dob','$phone','$address','$folder/$photo_name')";
					  
		if(isset($_POST['emailuser'])){
				$email = $_POST['emailuser'];
				$checkdata = "SELECT email_villager FROM villagers WHERE email_villager = '$email'";
				$query = mysqli_query($conn,$checkdata);
				if(mysqli_num_rows($query)>0){
					?>
						<script language="javascript">alert("Email Already Exist.");</script>
						<script>document.location.href='../login.php';</script>
					<?php
				}
				/*else{
						echo "OK";
					}
					exit();
			
				*/
		}
		mysqli_query($conn, $sql_tambah);
?>
		<script language="javascript">alert("Register Successful");</script>
		<script>document.location.href='../login.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Register Failed");</script>
		<script>document.location.href='../login.php';</script>
<?php
	}
	mysqli_close($conn);
?>