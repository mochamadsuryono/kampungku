<?php
require_once 'db_connect.php';

if($_POST){
  $content_letter = $_POST['content_letter'];
  $due_date = $_POST['due_date'];

  $id_letter = $_POST['id_letter'];
  $author = $_POST['author'];
  $category_letter = $_POST['category_letter'];
  $ktp = $_POST['ktp'];
  $akte = $_POST['akte'];
  $domisili = $_POST['domisili'];
  $sktm = $_POST['sktm'];
  $tanah = $_POST['tanah'];
  $status_letter = $_POST['status_letter'];

  $sql = "UPDATE letters SET content_letter = '$content_letter', due_date = '$due_date', category_letter = '$category_letter', ktp = '$ktp', akte = '$akte', domisili = '$domisili',  sktm = '$sktm', tanah = '$tanah', status_letter = '$status_letter' WHERE id_letter = {$id_letter}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully Updated! </p>";
    echo "<a href='../edit.php?id_letter=".$id_letter."'><button type='button'>Back</button></a>";
    echo "<a href='../index.php'><button type='button'>Home</button></a>";
  } else {
    echo "Error while updating record :".$connect->connect_error;
  }
  $connect->close();
}
 ?>
