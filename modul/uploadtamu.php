<?php
	include "connect.php";
	
	$name_visitor = $_POST['namatamu'];
	$no_ktp_visitor = $_POST['nomorktp'];
	$address_visitor = $_POST['alamat'];
	
	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
	$result = mysqli_fetch_array($query);
	$author = $result['name_villager'];
	$timestamp = date("Y-m-d H:i:s");
	
		$sql_posting = "INSERT INTO visitors(id_visitor, author, name_visitor, no_ktp_visitor, address_visitor, status_visitor) 
						VALUE('','$author', '$name_visitor', '$no_ktp_visitor', '$address_visitor','yet')";
		$hasil = mysqli_query($conn, $sql_posting);
		
		if ($hasil) {
?>

		<script language="javascript">alert("Requesting Successful! Please Wait For Confirmation");</script>
		<script>document.location.href='../laportamu.php';</script>
<?php
		}
	else{
?>
		<script language="javascript">alert("Requesting Failed! Please Try Again");</script>
		<script>document.location.href='../laportamu.php';</script>
<?php
		}
?>