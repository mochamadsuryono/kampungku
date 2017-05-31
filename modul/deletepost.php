<<<<<<< HEAD
<?php
	include'connect.php';
	$idpost = $_GET['id_post'];
	mysqli_query($conn,"DELETE FROM announcements WHERE id_announcement = '$idpost'");?>
	<script language="javascript">alert("Announcements Berhasil di Hapus!");</script>
	<script>document.location.href='../listpost.php';</script>
=======
<?php
	include'connect.php';
	$idpost = $_GET['id_post'];
	mysqli_query($conn,"DELETE FROM announcements WHERE id_announcement = '$idpost'");?>
	<script language="javascript">alert("Announcements Berhasil di Hapus!");</script>
	<script>document.location.href='../listpost.php';</script>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
	