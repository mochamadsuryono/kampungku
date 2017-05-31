<?php
	include "connect.php";
	
	$judul = $_POST['judulpost'];
	$isi = $_POST['isipost'];
	$folder = "images/post";
	$upload_dir = "../images/post";
	$photo_size = $_FILES["coverpic"]["size"];
	$photo_loc = $_FILES["coverpic"]["tmp_name"];
	$photo_name = $_FILES["coverpic"]["name"];
	$timestamp = date("Y-m-d H:i:s");
	$info = getimagesize($photo_loc);
		
		if(($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)){
		?>  
			<script language="javascript">alert("Posting Failed! Please Try Again.");</script>
			<script>document.location.href='../adminpost.php';</script>	
		<?php
		}
		else{
	
	if($photo_size < 1000000){
		move_uploaded_file($photo_loc, "$upload_dir/$photo_name");
		$sql_posting = "INSERT INTO announcements(id_announcement, author, announcement_title, content, pic_announcement, timestamp, status_announcement, active) 
						VALUE('','Admin','$judul','$isi','$folder/$photo_name','$timestamp','yes', 1)";
		mysqli_query($conn, $sql_posting);
?>
		<script language="javascript">alert("Posting Successful.");</script>
		<script>document.location.href='../listpost.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Posting Failed! Please Try Again.");</script>
		<script>document.location.href='../adminpost.php';</script>
<?php
		}
	}
?>