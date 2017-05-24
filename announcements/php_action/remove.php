<?php
require_once 'db_connect.php';

if($_POST) {
  $id_announcement = $_POST['id_announcement'];

  $sql = "UPDATE announcements SET active = 2 where id_announcement = {$id_announcement}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully removed!</p>";
    echo "<a href='../index.php'><button type='button'>Back</button></a>";
  } else {
    echo "Error updating record : ".$connect->error;
  }
  $connect->close();
}
 ?>
