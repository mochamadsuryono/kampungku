<?php
	include "connect.php";
	if($_SESSION['status'] == 'user') {
		$id = $_SESSION['id'];
		$folder = "images/member";
		$upload = "../images/member";
		$foto_size = $_FILES["photobaru"]["size"];
		$foto_loc = $_FILES["photobaru"]["tmp_name"];
		$foto_name = $_FILES["photobaru"]["name"];
		$info = getimagesize($foto_loc);
		
		if(($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)){
?>  	
		<script language="javascript">alert("Photo Change Failed");</script>
		<script>document.location.href='../profile.php';</script>
<?php
		}
		else{
?>	
<?php	
		if($foto_size < 1000000){
			move_uploaded_file($foto_loc, "$upload/$foto_name");
			$hasil = mysqli_query($conn, "UPDATE villagers SET photo_villager='$folder/$foto_name' WHERE id_villagers ='$id'");
	
			if ($hasil) {
?>
				<script language="javascript">alert("Photo Change Successful");</script>
				<script>document.location.href='../profile.php';</script>
<?php
			}
		}
		else{
?>
			<script language="javascript">alert("Photo Change Failed");</script>
			<script>document.location.href='../profile.php';</script>
<?php
		}
	}}
?>