<?php
	$conn = mysqli_connect('localhost', 'root', '', 'kampungku')
	or die ("Gagal koneksi ke server".mysqli_error());
	session_start();
	if(!(isset($_SESSION['id']))) {
		$_SESSION['status'] = "nouser";
	}
?>