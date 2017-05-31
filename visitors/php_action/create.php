<?php

require_once 'db_connect.php';

if($_POST) {
  $name_visitor = $_POST['name_visitor'];
  $no_ktp_visitor =$_POST['no_ktp_visitor'];
  $address_visitor = $_POST['address_visitor'];
  $status_visitor = $_POST['status_visitor'];
  $keterangan = $_POST['keterangan'];
  
  $author = $_POST['author'];

  $sql = "INSERT INTO visitors (id_visitor, author, name_visitor, no_ktp_visitor, address_visitor, status_visitor, keterangan, active) VALUES ('','$author','$name_visitor','$no_ktp_visitor', '$address_visitor', '$status_visitor', '$keterangan', 1)";
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
