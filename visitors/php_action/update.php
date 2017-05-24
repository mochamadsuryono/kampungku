<?php
require_once 'db_connect.php';

if($_POST){
  $name_visitor = $_POST['name_visitor'];
  $no_ktp_visitor =$_POST['no_ktp_visitor'];
  $address_visitor = $_POST['address_visitor'];
  $status_visitor = $_POST['status_visitor'];
  $keterangan = $_POST['keterangan'];

  $id_visitor = $_POST['id_visitor'];
  $author = $_POST['author'];

  $sql = "UPDATE visitors SET name_visitor = '$name_visitor', no_ktp_visitor = '$no_ktp_visitor', address_visitor = '$address_visitor', status_visitor = '$status_visitor', keterangan = '$keterangan' WHERE id_visitor = {$id_visitor}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully Updated! </p>";
    echo "<a href='../edit.php?id_visitor=".$id_visitor."'><button type='button'>Back</button></a>";
    echo "<a href='../index.php'><button type='button'>Home</button></a>";
  } else {
    echo "Error while updating record :".$connect->connect_error;
  }
  $connect->close();
}
 ?>
