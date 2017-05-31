<?php

require_once 'db_connect.php';

if($_POST) {
	$author = $_POST['author'];
	$announcement_title = $_POST['announcement_title'];
	$content = $_POST['content'];
	$pic_announcement = $_POST['pic_announcement'];
	$timestamp = $_POST['timestamp'];
	$status_announcement = $_POST['status_announcement'];

  $sql = "INSERT INTO announcements (id_announcement, author, announcement_title, content, pic_announcement, timestamp, status_announcement, active) VALUES ('', '$author', '$announcement_title','$content', '$pic_announcement', '$timestamp', '$status_announcement',1)";
  if($connect->query($sql) === TRUE) {
    echo "<p>New Record Successfully Created!</p>";
    echo "<a href='../create.php'><button type='button'>Back</button></a>";
    echo "<a href='../index.php'><button type='button'>Home</button></a>";
  } else {
    echo "Error" .$sql.' '.$connect->connect_error;
  }
  $connect->close();
}
 ?>
