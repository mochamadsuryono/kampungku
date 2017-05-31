<?php

require_once 'db_connect.php';

if($_POST) {
  $content_letter = $_POST['content_letter'];
  $due_date = $_POST['due_date'];
  $category_letter = $_POST['category_letter'];
  $status_letter = $_POST['status_letter'];

  $sql = "INSERT INTO letters (id_letter, author, category_letter, status_letter, content_letter, due_date, active) VALUES ('', '$author', '$category_letter', '$status_letter', '$content_letter', '$due_date', 1)";
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
