<<<<<<< HEAD
<?php
require_once 'db_connect.php';

if($_POST){
	$author = $_POST['author'];
	$announcement_title = $_POST['announcement_title'];
	$content = $_POST['content'];
	$pic_announcement = $_POST['pic_announcement'];
	$timestamp = $_POST['timestamp'];
	$status_announcement = $_POST['status_announcement'];

	$id_announcement = $_POST['id_announcement'];

  $sql = "UPDATE announcements SET author = '$author', announcement_title = '$announcement_title', content = '$content', pic_announcement = '$pic_announcement', timestamp = '$timestamp', status_announcement = '$status_announcement' WHERE id_announcement = {$id_announcement}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully Updated! </p>";
    echo "<a href='../edit.php?id_announcement=".$id_announcement."'><button type='button'>Back</button></a>";
    echo "<a href='../index.php'><button type='button'>Home</button></a>";
  } else {
    echo "Error while updating record :".$connect->connect_error;
  }
  $connect->close();
}
 ?>
=======
<?php
require_once 'db_connect.php';

if($_POST){
	$author = $_POST['author'];
	$announcement_title = $_POST['announcement_title'];
	$content = $_POST['content'];
	$pic_announcement = $_POST['pic_announcement'];
	$timestamp = $_POST['timestamp'];
	$status_announcement = $_POST['status_announcement'];

	$id_announcement = $_POST['id_announcement'];

  $sql = "UPDATE announcements SET author = '$author', announcement_title = '$announcement_title', content = '$content', pic_announcement = '$pic_announcement', timestamp = '$timestamp', status_announcement = '$status_announcement' WHERE id_announcement = {$id_announcement}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully Updated! </p>";
    echo "<a href='../edit.php?id_announcement=".$id_announcement."'><button type='button'>Back</button></a>";
    echo "<a href='../index.php'><button type='button'>Home</button></a>";
  } else {
    echo "Error while updating record :".$connect->connect_error;
  }
  $connect->close();
}
 ?>
>>>>>>> 404ee38b07ae6551027b6f5252e0262023db964f
