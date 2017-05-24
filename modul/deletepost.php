<?php
	include'connect.php';
	$idpost = $_GET['id_post'];
	mysqli_query($conn,"DELETE FROM announcements WHERE id_announcement = '$idpost'");?>
	<script language="javascript">alert("Announcements Berhasil di Hapus!");</script>
	<script>document.location.href='../listpost.php';</script>
	