<?php
	include "connect.php";
	
	$idw = $_POST['verified'];
	$verif = mysqli_query($conn, "UPDATE visitors SET status_visitor = 'yes' WHERE id_visitor = '$idw'");
	
	if ($verif) {
?>
		<script language="javascript">alert("Tamu Telah Diverifikasi");</script>
		<script>document.location.href='../moderatetamu.php';</script>
<?php
	}
	else {
?>
		<script language="javascript">alert("Verifikasi Gagal");</script>
		<script>document.location.href='../moderatetamu.php';</script>
<?php
	}
?>