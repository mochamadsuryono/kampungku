<<<<<<< HEAD
<?php
	include'connect.php';
	$idpost = $_GET['id_villagers'];
	mysqli_query($conn,"DELETE FROM villagers WHERE id_villagers = '$idpost'");?>
	<script language="javascript">alert("Villagers Berhasil di Hapus!");</script>
	<script>document.location.href='../listmember.php';</script>
=======
<?php
	include'connect.php';
	$idpost = $_GET['id_villagers'];
	mysqli_query($conn,"DELETE FROM villagers WHERE id_villagers = '$idpost'");?>
	<script language="javascript">alert("Villagers Berhasil di Hapus!");</script>
	<script>document.location.href='../listmember.php';</script>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
	