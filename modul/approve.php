<?php
	include "connect.php";
	
	$idw = $_POST['verified'];
	$verif = mysqli_query($conn, "UPDATE letters SET status_letter = 'yes' WHERE id_letter = '$idw'");
	
	if ($verif) {
?>
		<script language="javascript">alert("Surat Telah Disetujui");</script>
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