<?php
	include "connect.php";
	
	$idw = $_POST['disapproved'];
	$dis = mysqli_query($conn, "UPDATE letters SET status_letter = 'no' WHERE id_letter = '$idw'");
	
	if ($dis) {
?>
		<script language="javascript">alert("Surat Tidak Desetujui");</script>
		<script>document.location.href='../moderatesurat.php';</script>
<?php
	}
	else {
?>
		<script language="javascript">alert("Verifikasi Gagal");</script>
		<script>document.location.href='../moderatesurat.php';</script>
<?php
	}
?>