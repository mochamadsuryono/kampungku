<?php
require_once 'db_connect.php';

if($_POST){
  $name_villager = $_POST['name_villager'];
  $email_villager = $_POST['email_villager'];
  $password_villager = $_POST['password_villager'];
  $phone_villager = $_POST['phone_villager'];
  $birth_place_villager = $_POST['birth_place_villager'];
  $birth_date_villager = $_POST['birth_date_villager'];
  $no_ktp_villager =$_POST['no_ktp_villager'];
  $sex_villager = $_POST['sex_villager'];
  $address_villager = $_POST['address_villager'];
  $religion_villager = $_POST['religion_villager'];
  $job = $_POST['job'];
  $photo_villager = $_POST['photo_villager'];

  $id_villagers = $_POST['id_villagers'];

  $sql = "UPDATE villagers SET name_villager = '$name_villager', email_villager = '$email_villager', password_villager = '$password_villager', phone_villager = '$phone_villager', birth_place_villager = '$birth_place_villager', birth_date_villager = '$birth_date_villager', no_ktp_villager = '$no_ktp_villager', sex_villager = '$sex_villager', address_villager = '$address_villager', religion_villager = '$religion_villager', job = '$job', photo_villager = '$photo_villager' WHERE id_villagers = {$id_villagers}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully Updated! </p>";
    echo "<a href='../edit.php?id_villagers=".$id_villagers."'><button type='button'>Back</button></a>";
    echo "<a href='../index.php'><button type='button'>Home</button></a>";
  } else {
    echo "Error while updating record :".$connect->connect_error;
  }
  $connect->close();
}
 ?>
