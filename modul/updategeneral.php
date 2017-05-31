<?php
	include "connect.php";
	if($_SESSION['status'] == 'user') {
		$id = $_SESSION['id'];
		$nama = $_POST['namabaru'];
		$birth = $_POST['datebaru'];
		$newphone = $_POST['telpbaru'];
		$newktp = $_POST['ktpbaru'];
		$newsex = $_POST['sexbaru'];
<<<<<<< HEAD
		$newagama = $_POST['agamabaru'];
		$alamat = $_POST['alamatbaru'];
		
		$result2 = mysqli_query($conn, "UPDATE villagers SET name_villager = '$nama', birth_date_villager = '$birth', phone_villager = '$newphone', no_ktp_villager = '$newktp', sex_villager = '$newsex', religion_villager = '$newagama', address_villager = '$alamat'  WHERE id_villagers = '$id'");
=======
		$alamat = $_POST['alamatbaru'];
		
		$result2 = mysqli_query($conn, "UPDATE villagers SET name_villager = '$nama', birth_date_villager = '$birth', phone_villager = '$newphone', no_ktp_villager = '$newktp', sex_villager = '$newsex', address_villager = '$alamat'  WHERE id_villagers = '$id'");
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
		
		if ($result2) {
?>
			<script language="javascript">alert("Update Successful");</script>
			<script>document.location.href='../profile.php';</script>
<?php
		}
		else {
?>
			<script language="javascript">alert("Update Failed");</script>
			<script>document.location.href='../profile.php';</script>
<?php
		}
	}
?>