<?php
	include "connect.php";
	
	$category_letter = $_POST['kategori'];
	$due_date = $_POST['duedate'];
	$content_letter = $_POST['isipost'];
	
	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM villagers WHERE id_villagers = '$id'");
	$result = mysqli_fetch_array($query);
	$author = $result['name_villager'];
	$timestamp = date("Y-m-d");
	
		$sql_posting = "INSERT INTO letters(id_letter, author, category_letter, content_letter, due_date, status_letter) 
						VALUE('','$author', '$category_letter', '$content_letter', '$due_date','yet')";
		$hasil = mysqli_query($conn, $sql_posting);
		
		if ($hasil) {
?>

		<script language="javascript">alert("Requesting successful! Please wait for confirmation.");</script>
		<script>document.location.href='../buatsurat.php';</script>
<?php
		}
	else{
?>
		<script language="javascript">alert("Requesting failed! Please try again.");</script>
		<script>document.location.href='../buatsurat.php';</script>
<?php
		}
?>