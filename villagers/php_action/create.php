<?php

require_once 'db_connect.php';

if($_POST) {
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


  $sql = "INSERT INTO villagers (id_villagers, name_villager, email_villager, password_villager, phone_villager, birth_place_villager, birth_date_villager, no_ktp_villager, sex_villager, address_villager, religion_villager, job, photo_villager, active) VALUES ('','$name_villager', '$email_villager', '$password_villager', '$phone_villager','$birth_place_villager', '$birth_date_villager', '$no_ktp_villager', '$sex_villager', '$address_villager','$religion_villager', '$job', '$photo_villager', 1)";
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
