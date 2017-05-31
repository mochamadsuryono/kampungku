<?php
	$page = mysqli_query($conn, "SELECT * FROM announcements WHERE status_announcement = 'yes' ORDER BY id_announcement DESC LIMIT 0,3");
	
	function ambil_post($limit){
		$conn = mysqli_connect('localhost', 'root', '', 'kampungku') or die ("Gagal koneksi ke server".mysqli_error());
		$page = mysqli_query($conn, "SELECT * FROM announcements WHERE status_announcement = 'yes' ORDER BY id_announcement DESC LIMIT $limit,5");
		return $page;
	}

	function rip_tags($string) { 
		$string = preg_replace ('/<[^>]*>/', ' ', $string); 
		$string = str_replace("\r", '', $string);
		$string = str_replace("\n", ' ', $string);
		$string = str_replace("\t", ' ', $string);
		$string = trim(preg_replace('/ {2,}/', ' ', $string));
		
		return $string; 
	}
?>